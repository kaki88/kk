<?php
namespace App\Controller\Utilisateur;

use Cake\Event\Event;
use App\Controller\AppController;


/**
 * Users Controler
 *
 * @property \App\Model\Table\UsersTable $Users
 */
class UsersController extends AppController
{
    public function beforeFilter(Event $event)
    {
        parent::beforeFilter($event);
        $actions = $this->Common->guestActions($this->params['prefix'],$this->params['controller']);
        $this->Auth->allow($actions);
    }
    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Roles']
        ];
        $users = $this->paginate($this->Users);


        $this->set(compact('users'));
        $this->set('_serialize', ['users']);
    }

    /**
     * View method
     *
     * @param string|null $id User id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $this->loadModel('promotions');
        $user = $this->Users->get($id, [
            'contain' => [
                'Roles',
                'Projects' =>[
                    'conditions' => ['Projects.finished' => true]
                ]
            ]

        ]);


        $promotions = $this->promotions->find('all',[
            'conditions' => ['promotions.user_id' => $id],
        ]);


        $roles = $this->Users->Roles->find('list', ['limit' => 200]);

        $this->set('user', $user);
        $this->set('roles', $roles);
        $this->set(compact('promotions'));
        $this->set('_serialize', ['user']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $user = $this->Users->newEntity();
        if ($this->request->is('post')) {
            $user = $this->Users->patchEntity($user, $this->request->data);
            if ($this->Users->save($user)) {
                $picture = $this->Upload->getPicture($this->request->data['picture'],'user',$user->id, 300, 300, false);
                $this->request->data['picture_url'] = $picture;
                $user = $this->Users->patchEntity($user, $this->request->data);
                $this->Users->save($user);

                $this->Flash->success(__('The user has been saved.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The user could not be saved. Please, try again.'));
            }
        }
        $roles = $this->Users->Roles->find('list', ['limit' => 200]);
        $this->set(compact('images', 'erreur','user', 'roles'));
        $this->set('_serialize', ['user']);

    }

    /**
     * Edit method
     *
     * @param string|null $id User id.
     * @return \Cake\Network\Response|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $this->loadModel('Promotions');
        $promotion = $this->Promotions->find('all',[
           'conditions' => ['promotions.user_id' => $id ]
        ]);


        $user = $this->Users->get($id, [
            'contain' => []
        ]);

        if ($this->request->is(['patch', 'post', 'put'])) {
            if(!empty($this->request->data['picture']['name'])) {
                $picture = $this->Upload->getPicture($this->request->data['picture'], 'user', $user->id, 300, 300, false);
                $this->request->data['picture_url'] = $picture;
            }
            $user = $this->Users->patchEntity($user, $this->request->data);
            if ($this->Users->save($user)) {
                $this->Flash->success(__('The user has been saved.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The user could not be saved. Please, try again.'));
            }
        }
        $roles = $this->Users->Roles->find('list', ['limit' => 200]);
        $this->set(compact('user','promotion'));
        $this->set('roles', $roles);
        $this->set('_serialize', ['user']);
    }

    /**
     * Delete method
     *
     * @param string|null $id User id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $user = $this->Users->get($id);
        if ($this->Users->delete($user)) {
            $this->Flash->success(__('The user has been deleted.'));
        } else {
            $this->Flash->error(__('The user could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }


    public function login()
    {
        if ($this->request->is('post')) {
            $user = $this->Auth->identify();
            if ($user) {
                $this->Auth->setUser($user);
                return $this->redirect(['controller' => 'Users', 'action' => 'view', 'prefix' => 'admin',$this->Auth->user('id')]);
            }
            $this->Flash->error(__('Invalid username or password, try again'));
        }
        $this->set('con',$this->request->params['action']);
        $this->viewBuilder()->layout('login');
    }

    public function logout()
    {
        $this->request->session()->destroy();
        return $this->redirect($this->Auth->logout());
    }
}
