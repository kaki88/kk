<?php
namespace App\Controller\Promotions;

use App\Controller\AppController;
use Cake\Event\Event;

/**
 * Promotions Controller
 *
 * @property \App\Model\Table\PromotionsTable $Promotions
 */
class PromotionsController extends AppController
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
            'contain' => ['Users']
        ];
        $promotions = $this->paginate($this->Promotions);

        $this->set(compact('promotions'));
        $this->set('_serialize', ['promotions']);
    }

    /**
     * View method
     *
     * @param string|null $id Promotion id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $promotion = $this->Promotions->get($id, [
            'contain' => ['Users']
        ]);

        $this->set('promotion', $promotion);
        $this->set('_serialize', ['promotion']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $promotion = $this->Promotions->newEntity();
        if ($this->request->is('post')) {
            $exists = $this->Promotions->find()->select(['user_id'])->where(['user_id' => $this->Auth->User('id')])->count();
            if(!$exists){
                $this->request->data['user_id'] = $this->Auth->User('id');
                $promotion = $this->Promotions->patchEntity($promotion, $this->request->data);
                if ($this->Promotions->save($promotion)) {
                    $file = $this->Upload->getFile($this->request->data['cv'],'cv',true);
                    $this->request->data['cv_url'] = $file;
                    $this->Flash->success(__('The promotion has been saved.'));

                    return $this->redirect(['action' => 'index']);
                } else {
                    $this->Flash->error(__('The promotion could not be saved. Please, try again.'));
                }
            }else{

                echo ('Tu as déjà un profil publique !');
            }
        }
        $users = $this->Promotions->Users->find('list', ['limit' => 200]);
        $this->set(compact('promotion', 'users'));
        $this->set('_serialize', ['promotion']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Promotion id.
     * @return \Cake\Network\Response|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $promotion = $this->Promotions->get($id, [
            'contain' => []
        ]);

        if ($this->request->is(['patch', 'post', 'put'])) {
            if(!empty($this->request->data['cv']['name'])) {
                $file = $this->Upload->getFile($this->request->data['cv'], 'cv', true);
                $this->request->data['cv_url'] = $file;
            }
            $promotion = $this->Promotions->patchEntity($promotion, $this->request->data);
            if ($this->Promotions->save($promotion)) {
                $this->Flash->success(__('The promotion has been saved.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The promotion could not be saved. Please, try again.'));
            }
        }
        $users = $this->Promotions->Users->find('list', ['limit' => 200]);
        $this->set(compact('promotion', 'users'));
        $this->set('_serialize', ['promotion']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Promotion id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $promotion = $this->Promotions->get($id);
        if ($this->Promotions->delete($promotion)) {
            $this->Flash->success(__('The promotion has been deleted.'));
        } else {
            $this->Flash->error(__('The promotion could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
