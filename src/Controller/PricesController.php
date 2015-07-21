<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Prices Controller
 *
 * @property \App\Model\Table\PricesTable $Prices
 */
class PricesController extends AppController
{

    /**
     * Index method
     *
     * @return void
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Suppliers', 'Items']
        ];
        $this->set('prices', $this->paginate($this->Prices));
        $this->set('_serialize', ['prices']);
    }

    /**
     * View method
     *
     * @param string|null $id Price id.
     * @return void
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function view($id = null)
    {
        $price = $this->Prices->get($id, [
            'contain' => ['Suppliers', 'Items']
        ]);
        $this->set('price', $price);
        $this->set('_serialize', ['price']);
    }

    /**
     * Add method
     *
     * @return void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $price = $this->Prices->newEntity();
        if ($this->request->is('post')) {
            $price = $this->Prices->patchEntity($price, $this->request->data);
            if ($this->Prices->save($price)) {
                $this->Flash->success(__('The price has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The price could not be saved. Please, try again.'));
            }
        }
        $suppliers = $this->Prices->Suppliers->find('list', ['limit' => 200]);
        $items = $this->Prices->Items->find('list', ['limit' => 200]);
        $this->set(compact('price', 'suppliers', 'items'));
        $this->set('_serialize', ['price']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Price id.
     * @return void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $price = $this->Prices->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $price = $this->Prices->patchEntity($price, $this->request->data);
            if ($this->Prices->save($price)) {
                $this->Flash->success(__('The price has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The price could not be saved. Please, try again.'));
            }
        }
        $suppliers = $this->Prices->Suppliers->find('list', ['limit' => 200]);
        $items = $this->Prices->Items->find('list', ['limit' => 200]);
        $this->set(compact('price', 'suppliers', 'items'));
        $this->set('_serialize', ['price']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Price id.
     * @return void Redirects to index.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $price = $this->Prices->get($id);
        if ($this->Prices->delete($price)) {
            $this->Flash->success(__('The price has been deleted.'));
        } else {
            $this->Flash->error(__('The price could not be deleted. Please, try again.'));
        }
        return $this->redirect(['action' => 'index']);
    }
}
