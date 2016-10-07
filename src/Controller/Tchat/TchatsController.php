<?php
namespace App\Controller\Tchat;

use App\Controller\AppController;

/**
 * Tchats Controller
 *
 * @property \App\Model\Table\TchatsTable $Tchats */
class TchatsController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Users']
        ];
        $tchats = $this->paginate($this->Tchats);

        $this->set(compact('tchats'));
        $this->set('_serialize', ['tchats']);
    }

    /**
     * View method
     *
     * @param string|null $id Tchat id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $tchat = $this->Tchats->get($id, [
            'contain' => ['Users']
        ]);

        $this->set('tchat', $tchat);
        $this->set('_serialize', ['tchat']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $tchat = $this->Tchats->newEntity();
        if ($this->request->is('post')) {
            $tchat = $this->Tchats->patchEntity($tchat, $this->request->data);
            if ($this->Tchats->save($tchat)) {
                $this->Flash->success(__('The tchat has been saved.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The tchat could not be saved. Please, try again.'));
            }
        }
        $users = $this->Tchats->Users->find('list', ['limit' => 200]);
        $this->set(compact('tchat', 'users'));
        $this->set('_serialize', ['tchat']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Tchat id.
     * @return \Cake\Network\Response|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $tchat = $this->Tchats->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $tchat = $this->Tchats->patchEntity($tchat, $this->request->data);
            if ($this->Tchats->save($tchat)) {
                $this->Flash->success(__('The tchat has been saved.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The tchat could not be saved. Please, try again.'));
            }
        }
        $users = $this->Tchats->Users->find('list', ['limit' => 200]);
        $this->set(compact('tchat', 'users'));
        $this->set('_serialize', ['tchat']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Tchat id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $tchat = $this->Tchats->get($id);
        if ($this->Tchats->delete($tchat)) {
            $this->Flash->success(__('The tchat has been deleted.'));
        } else {
            $this->Flash->error(__('The tchat could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
