<?php
namespace App\Controller\Admin;

use App\Controller\AppController;

/**
 * BlogCategories Controller
 *
 * @property \App\Model\Table\BlogCategoriesTable $BlogCategories
 */
class BlogCategoriesController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {
        $blogCategories = $this->paginate($this->BlogCategories);

        $this->set(compact('blogCategories'));
        $this->set('_serialize', ['blogCategories']);
    }

    /**
     * View method
     *
     * @param string|null $id Blog Category id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $blogCategory = $this->BlogCategories->get($id, [
            'contain' => ['BlogArticles']
        ]);

        $this->set('blogCategory', $blogCategory);
        $this->set('_serialize', ['blogCategory']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $blogCategory = $this->BlogCategories->newEntity();
        if ($this->request->is('post')) {
            $blogCategory = $this->BlogCategories->patchEntity($blogCategory, $this->request->data);
            if ($this->BlogCategories->save($blogCategory)) {
                $this->Flash->success(__('The blog category has been saved.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The blog category could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('blogCategory'));
        $this->set('_serialize', ['blogCategory']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Blog Category id.
     * @return \Cake\Network\Response|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $blogCategory = $this->BlogCategories->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $blogCategory = $this->BlogCategories->patchEntity($blogCategory, $this->request->data);
            if ($this->BlogCategories->save($blogCategory)) {
                $this->Flash->success(__('The blog category has been saved.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The blog category could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('blogCategory'));
        $this->set('_serialize', ['blogCategory']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Blog Category id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $blogCategory = $this->BlogCategories->get($id);
        if ($this->BlogCategories->delete($blogCategory)) {
            $this->Flash->success(__('The blog category has been deleted.'));
        } else {
            $this->Flash->error(__('The blog category could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
