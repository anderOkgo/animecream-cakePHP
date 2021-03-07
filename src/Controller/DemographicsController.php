<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Demographics Controller
 *
 * @property \App\Model\Table\DemographicsTable $Demographics
 *
 * @method \App\Model\Entity\Demographic[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class DemographicsController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $demographics = $this->paginate($this->Demographics);

        $this->set(compact('demographics'));
    }

    /**
     * View method
     *
     * @param string|null $id Demographic id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $demographic = $this->Demographics->get($id, [
            'contain' => []
        ]);

        $this->set('demographic', $demographic);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $demographic = $this->Demographics->newEntity();
        if ($this->request->is('post')) {
            $demographic = $this->Demographics->patchEntity($demographic, $this->request->getData());
            if ($this->Demographics->save($demographic)) {
                $this->Flash->success(__('The demographic has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The demographic could not be saved. Please, try again.'));
        }
        $this->set(compact('demographic'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Demographic id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $demographic = $this->Demographics->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $demographic = $this->Demographics->patchEntity($demographic, $this->request->getData());
            if ($this->Demographics->save($demographic)) {
                $this->Flash->success(__('The demographic has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The demographic could not be saved. Please, try again.'));
        }
        $this->set(compact('demographic'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Demographic id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $demographic = $this->Demographics->get($id);
        if ($this->Demographics->delete($demographic)) {
            $this->Flash->success(__('The demographic has been deleted.'));
        } else {
            $this->Flash->error(__('The demographic could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
