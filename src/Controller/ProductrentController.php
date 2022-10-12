<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * Productrent Controller
 *
 * @property \App\Model\Table\ProductrentTable $Productrent
 * @method \App\Model\Entity\Productrent[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class ProductrentController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $productrent = $this->paginate($this->Productrent);

        $this->set(compact('productrent'));
    }

    /**
     * View method
     *
     * @param string|null $id Productrent id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $productrent = $this->Productrent->get($id, [
            'contain' => [],
        ]);

        $this->set(compact('productrent'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $productrent = $this->Productrent->newEmptyEntity();
        if ($this->request->is('post')) {
            $productrent = $this->Productrent->patchEntity($productrent, $this->request->getData());
            if ($this->Productrent->save($productrent)) {
                $this->Flash->success(__('The productrent has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The productrent could not be saved. Please, try again.'));
        }
        $this->set(compact('productrent'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Productrent id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $productrent = $this->Productrent->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $productrent = $this->Productrent->patchEntity($productrent, $this->request->getData());
            if ($this->Productrent->save($productrent)) {
                $this->Flash->success(__('The productrent has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The productrent could not be saved. Please, try again.'));
        }
        $this->set(compact('productrent'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Productrent id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $productrent = $this->Productrent->get($id);
        if ($this->Productrent->delete($productrent)) {
            $this->Flash->success(__('The productrent has been deleted.'));
        } else {
            $this->Flash->error(__('The productrent could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
