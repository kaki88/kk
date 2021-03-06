<?php
namespace App\Controller\Dashboard;

use App\Controller\AppController;

/**
 * Diaries Controller
 *
 * @property \App\Model\Table\DiariesTable $Diaries
 */
class DiariesController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {

        $uid = $this->Auth->user('id');

        $user = $this->Diaries->Users->get($uid, [
            'contain' => 'Roles'
        ]);

        if ($user->role->name == 'Administrateur' || $user->role->name == 'Formateur') {
            $diaries = $this->Diaries->find()->contain([
                'Entries',
                'Users',
                'Projects',
                'Users.Tasks',
                'Users.Tasks.States',
            ]);
        } else {
            $diaries = $this->Diaries->find()->contain([
                'Entries',
                'Users',
                'Projects',
                'Users.Tasks',
                'Users.Tasks.States',
            ])->where(['user_id' => $uid]);
        }



        $this->set(compact('diaries'));
        $this->set('_serialize', ['diaries']);
    }

    /**
     * View method
     *
     * @param string|null $id Diary id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $diary = $this->Diaries->get($id, [
            'contain' => ['Users', 'Projects', 'Entries']
        ]);

        $this->set('diary', $diary);
        $this->set('_serialize', ['diary']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $diary = $this->Diaries->newEntity();
        if ($this->request->is('post')) {
            $diary = $this->Diaries->patchEntity($diary, $this->request->data);
            if ($this->Diaries->save($diary)) {
                $this->Flash->success(__('The diary has been saved.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The diary could not be saved. Please, try again.'));
            }
        }
        $users = $this->Diaries->Users->find('list', ['limit' => 200]);
        $projects = $this->Diaries->Projects->find('list', ['limit' => 200]);
        $this->set(compact('diary', 'users', 'projects'));
        $this->set('_serialize', ['diary']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Diary id.
     * @return \Cake\Network\Response|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $diary = $this->Diaries->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $diary = $this->Diaries->patchEntity($diary, $this->request->data);
            if ($this->Diaries->save($diary)) {
                $this->Flash->success(__('The diary has been saved.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The diary could not be saved. Please, try again.'));
            }
        }
        $users = $this->Diaries->Users->find('list', ['limit' => 200]);
        $projects = $this->Diaries->Projects->find('list', ['limit' => 200]);
        $this->set(compact('diary', 'users', 'projects'));
        $this->set('_serialize', ['diary']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Diary id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $diary = $this->Diaries->get($id);
        if ($this->Diaries->delete($diary)) {
            $this->Flash->success(__('The diary has been deleted.'));
        } else {
            $this->Flash->error(__('The diary could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
