<?php
namespace App\Controller\Forums;

use App\Controller\AppController;
use Cake\ORM\TableRegistry;
use Cake\I18n\Time;
use Cake\ORM\Query;
use Cake\View\Helper\PaginatorHelper;
use Cake\Event\Event;


class ForumsController extends AppController
{
    public $paginate = [
        'limit' => 12,
        'order' => [
            'Threads.id' => 'desc'
        ]
    ];
    public function initialize()
    {
        parent::initialize();
        $this->loadComponent('Paginator');
    }


    public function index()
    {
        $role = $this->Auth->user('role_id');

        if ($role == 1){
        $cat = $this->Forums->Categories->find('all')
        ->contain(['Forums.Lasttopicuser','Forums.Users', 'Forums' => function($q) {
            return $q->order(['Forums.sort' => 'ASC']);
        }])
            ->where(['id !=' => 16])
        ->order(['Categories.sort' => 'ASC']);
            $countpost = $this->Forums->Threads->Posts->find('all')
                ->contain(['Threads.Forums.Categories'])
                ->where(['Categories.id !=' => 16])->count();
            $countthread = $this->Forums->Threads->find('all')
                ->contain(['Forums.Categories'])
                ->where(['Categories.id !=' => 16])->count();
        }

        if ($role == 3){
            $cat = $this->Forums->Categories->find('all')
                ->contain(['Forums.Lasttopicuser','Forums.Users', 'Forums' => function($q) {
                    return $q->where(['Forums.role_id !=' => 1])->order(['Forums.sort' => 'ASC']);
                }])
                ->where(['id !=' => 16])
                ->order(['Categories.sort' => 'ASC']);
            $countpost = $this->Forums->Threads->Posts->find('all')
                ->contain(['Threads.Forums.Categories'])
                ->where(['OR' => ['Categories.id !=' => 16],['Forums.role_id !=' => 1]])->count();
            $countthread = $this->Forums->Threads->find('all')
                ->contain(['Forums.Categories'])
                ->where(['OR' => ['Categories.id !=' => 16],['Categories.id !=' => 18]])->count();
        }

        if ($role == 2 || !$this->Auth->User('id')){
            $cat = $this->Forums->Categories->find('all')
                ->contain(['Forums.Lasttopicuser','Forums.Users', 'Forums' => function($q) {
                    return $q->where(['OR' => ['Forums.role_id !=' => 1],['Forums.role_id !=' => 3]])->order(['Forums.sort' => 'ASC']);
                }])
                ->where( ['OR' => ['id !=' => 16],['id !=' => 18]])
                ->order(['Categories.sort' => 'ASC']);
            $countpost = $this->Forums->Threads->Posts->find('all')
                ->contain(['Threads.Forums.Categories'])
                ->where(['OR' => ['Categories.id !=' => 16],['Categories.id !=' => 18]])->count();
            $countthread = $this->Forums->Threads->find('all')
                ->contain(['Forums.Categories'])
                ->where(['OR' => ['Categories.id !=' => 16],['Categories.id !=' => 18]])->count();
        }

        $countuser = $this->Forums->Users->find('all')->count();
        $lastuser = $this->Forums->Users->find('all')
            ->select(['id','username'])
            ->order(['Users.created' => 'DESC'])->first();

        $this->set(compact('cat','countpost','countthread','countuser','lastuser','role'));
    }

    public function view($slug = null, $id = null)
    {
        $role = $this->Auth->user('role_id');

        $forum = $this->Forums->Threads->find('all')
            ->contain(['Users','Posts','Lastuserthread'])
            ->where(['forum_id' => $id]);

        $forumname = $this->Forums->find('all')
            ->select(['name'])
            ->where(['id' => $id])
        ->first();

        $this->set(compact('forumname','id','role'));
        $this->set('forum', $this->paginate($forum));
    }

    public function search()
    {
        if ($this->request->is(['post'])) {
            $array = [];
            if (!empty($this->request->data['query'])) {
                $push = $this->request->data['query'];
                $pushall = "subject LIKE '%$push%' OR text LIKE '%$push%'";
                array_push($array, $pushall);
            }


            $results = $this->Forums->Threads->find('all', [
                'contain' => ['Users','Posts','Lastuserthread','Forums']
            ])
                ->where(['Threads.id >' => 0, $array]);

            $this->set(compact('results'));
        }
    }

    public function beforeFilter(Event $event)
    {
        parent::beforeFilter($event);
        $actions = $this->Common->guestActions($this->params['prefix'],$this->params['controller']);
        $this->Auth->allow($actions);
    }
}
