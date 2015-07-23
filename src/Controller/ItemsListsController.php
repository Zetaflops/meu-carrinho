<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * ItemsLists Controller
 *
 * @property \App\Model\Table\ItemsListsTable $ItemsLists
 */
class ItemsListsController extends AppController
{

    /**
     * Index method
     *
     * @return void
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['ShoppingLists', 'Items']
        ];
        $this->set('itemsLists', $this->paginate($this->ItemsLists));
        $this->set('_serialize', ['itemsLists']);
    }

    /**
     * View method
     *
     * @param string|null $id Items List id.
     * @return void
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function view($id = null)
    {
        $itemsList = $this->ItemsLists->get($id, [
            'contain' => ['ShoppingLists', 'Items']
        ]);
        $this->set('itemsList', $itemsList);
        $this->set('_serialize', ['itemsList']);
    }

    /**
     * Add method
     *
     * @return void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $itemsList = $this->ItemsLists->newEntity();
        if ($this->request->is('post')) {
            $itemsList = $this->ItemsLists->patchEntity($itemsList, $this->request->data);
            if ($this->ItemsLists->save($itemsList)) {
                $this->Flash->success(__('The items list has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The items list could not be saved. Please, try again.'));
            }
        }
        $shoppingLists = $this->ItemsLists->ShoppingLists->find('list', ['limit' => 200]);
        $items = $this->ItemsLists->Items->find('list', ['limit' => 200]);
        $this->set(compact('itemsList', 'shoppingLists', 'items'));
        $this->set('_serialize', ['itemsList']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Items List id.
     * @return void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $itemsList = $this->ItemsLists->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $itemsList = $this->ItemsLists->patchEntity($itemsList, $this->request->data);
            if ($this->ItemsLists->save($itemsList)) {
                $this->Flash->success(__('The items list has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The items list could not be saved. Please, try again.'));
            }
        }
        $shoppingLists = $this->ItemsLists->ShoppingLists->find('list', ['limit' => 200]);
        $items = $this->ItemsLists->Items->find('list', ['limit' => 200]);
        $this->set(compact('itemsList', 'shoppingLists', 'items'));
        $this->set('_serialize', ['itemsList']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Items List id.
     * @return void Redirects to index.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $itemsList = $this->ItemsLists->get($id);
        if ($this->ItemsLists->delete($itemsList)) {
            $this->Flash->success(__('The items list has been deleted.'));
        } else {
            $this->Flash->error(__('The items list could not be deleted. Please, try again.'));
        }
        return $this->redirect(['action' => 'index']);
    }
}
