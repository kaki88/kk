<?php
namespace App\Controller\Component;
use Cake\Controller\Component;
use Cake\Database\Schema\Table;
use ReflectionClass;
use ReflectionMethod;
use Cake\ORM\TableRegistry;
use Cake\Controller\Component\AuthComponent;


class CommonComponent extends Component
{
    // This component is used to:
    // - know every action for every controllers
    // - check if an user can access a page


    public $components = ['Auth'];

    public function scanEverything($table = false)
    {
        $path = './src/Controller';
        $directories = scandir($path);
        // all things to ignore :
        $ignoreDirectories = ['Component'];
        $ignoreControllers = ['.', '..', 'empty'];
        $ignoreClasses = ['beforeFilter', 'afterFilter', 'initialize'];
        // end ignore
        // array declaration :
        $files = [];
        // end declaration
        foreach($directories as $directory)
        {
            if ($directory === '.' or $directory === '..') continue;

            if(is_dir($path . '/' . $directory) && !in_array($directory,$ignoreDirectories))
            {
                if(!array_key_exists($directory,$files))
                {
                    $files[$directory] = [];
                }
                $controllers = scandir($path . '/' . $directory);
                foreach ($controllers as $controller)
                {
                    if(!in_array($controller,$ignoreControllers))
                    {
                        $controller_renamed = str_replace('Controller.php','',$controller);
                        if(!array_key_exists($controller_renamed,$files[$directory]))
                        {
                            $files[$directory][$controller_renamed] = [];
                        }
                        $className = 'App\\Controller\\'.$directory.'\\'.$controller_renamed.'Controller';
                        $class = new ReflectionClass($className);
                        $actions = $class->getMethods(ReflectionMethod::IS_PUBLIC);
                        foreach($actions as $action){
                            if($action->class == $className && !in_array($action->name, $ignoreClasses)){
                                // if we want actions as keys or not
                                if(!$table)
                                {
                                    $files[$directory][$controller_renamed][] = $action->name;
                                }
                                else
                                {
                                    $files[$directory][$controller_renamed][$action->name] = [];
                                }
                            }
                        }

                    }

                }

            }
        }
        return $files;
    }

    public function getModules()
    {
        return array_keys($this->scanEverything());
    }

    public function getControllers($module)
    {
        return array_keys($this->scanEverything()[$module]);
    }

    public function getActions($module,$controller)
    {
        return $this->scanEverything()[$module][$controller];
    }


    //Return Front And Admin Controller => actions list
    public function getResources()
    {
        $controllers = $this->getControllers();

        $resources = [];
        foreach($controllers as $controller)
        {
            $actions = $this->getActions($controller);
            //Empty controller Ignore
            if(!empty($actions[$controller])){
                $resources = array_merge($resources, $actions);
            }
        }


        return $resources;
    }

    public function getPermissions()
    {
        $roles = TableRegistry::get('Roles');
        // know user's role
        if($this->request->session()->read('Auth.User.role_id') != null)
        {
            $rights = $roles->find()->select(['name'])->where(['id' => $this->request->session()->read('Auth.User.role_id')])->first();
        }
        else{
            $rights = $roles->find()->select(['name'])->where(['id' => '5'])->first(); // guest's role id
        }
        // to do : if no results found -> define as guest
        $rights = $rights->name;

        $connectors = $roles->find()->matching('Permissions.Connectors')->select(['Connectors.module','Connectors.controller','Connectors.function'])->where(['Roles.name' => $rights]);
        // let's list all authorized functions
        $actions = [];
        foreach($connectors as $connector)
        {
            // get Module
            $module = $connector['_matchingData']['Connectors']->module;
            // get Controller
            $controller = str_replace('Controller','',$connector['_matchingData']['Connectors']->controller);
            // get Action
            $action = $connector['_matchingData']['Connectors']->function;
            // Push a table
            $actions[$module][$controller][$action] = true;
        }
        // Write allowed actions in actual session
        return $actions;
    }

    public function checkPermissions($module,$controller,$action)
    {
        $session = $this->getPermissions();
        if(isset($session[$module][$controller][$action]) && $session[$module][$controller][$action])
        {
            return true;
        }
        else
        {
            return false;
        }

    }

    public function isAdmin()
    {
        $roles = TableRegistry::get('Roles');
        $rights = $roles->find()->select(['id'])->where(['id' => $this->request->session()->read('Auth.User.role_id')])->first();
        if($rights->id == 1){
            return true;
        }
        else
        {
            return false;
        }
    }

    public function listPermissions()
    {
        $table = TableRegistry::get('Roles');
        $roles= $table->find('all',[
            'contain' => ['Permissions','Permissions.Connectors']
        ]);
        $all_permissions = [];
        $registered_permissions = [];
        $results = [];

        // get all existing modules->controllers->function for each roles
        foreach($roles as $role)
        {
            $all_permissions[$role->name] = $this->scanEverything();
        }

        // get all permissions listed in the db for each role
        foreach($roles as $role)
        {
            //$registered_permissions[$role->name] = [];
            $registered_permissions[$role->name] = $this->scanEverything();
            $users_permissions[$role->name] = $this->scanEverything(true);

            foreach($role->permissions as $permission)
            {
                foreach ($permission->connectors as $connector)
                {
                    if(in_array($connector->function,$registered_permissions[$role->name][$connector->module][$connector->controller]))
                    {
                        // change array with permission_id and true;
                        $users_permissions[$role->name][$connector->module][$connector->controller][$connector->function]['value'] = true;
                    }
                    //$registered_permissions[$role->name][$connector->module][$connector->controller][] = $connector->function;
                }
            }
        }
        return $users_permissions;
    }
    // Guests & logged users default permissions
    public function guestActions($module,$controller)
    {
        $roles = TableRegistry::get('Connectors');
        $role = $roles->find('all',[
            'contain' => [
                'Permissions',
                'Permissions.Roles' => [
                    'conditions' => ['id' => 5]
                ]
            ],
            'fields' => [
                'module' => 'Connectors.module',
                'controller' => 'Connectors.controller',
                'action' => 'Connectors.function'
            ]
        ]);
        foreach ($role as $item)
        {
            $allow[] = $item->action;
        }
        return $allow;
    }
}