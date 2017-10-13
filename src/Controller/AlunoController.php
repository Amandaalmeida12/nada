<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Aluno Controller
 *
 * @property \App\Model\Table\AlunoTable $Aluno
 *
 * @method \App\Model\Entity\Aluno[] paginate($object = null, array $settings = [])
 */
class AlunoController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $aluno = $this->paginate($this->Aluno);

        $this->set(compact('aluno'));
        $this->set('_serialize', ['aluno']);
    }

    /**
     * View method
     *
     * @param string|null $id Aluno id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $aluno = $this->Aluno->get($id, [
            'contain' => []
        ]);

        $this->set('aluno', $aluno);
        $this->set('_serialize', ['aluno']);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $aluno = $this->Aluno->newEntity();
        if ($this->request->is('post')) {
            $aluno = $this->Aluno->patchEntity($aluno, $this->request->getData());
            if ($this->Aluno->save($aluno)) {
                $this->Flash->success(__('The aluno has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The aluno could not be saved. Please, try again.'));
        }
        $this->set(compact('aluno'));
        $this->set('_serialize', ['aluno']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Aluno id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $aluno = $this->Aluno->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $aluno = $this->Aluno->patchEntity($aluno, $this->request->getData());
            if ($this->Aluno->save($aluno)) {
                $this->Flash->success(__('The aluno has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The aluno could not be saved. Please, try again.'));
        }
        $this->set(compact('aluno'));
        $this->set('_serialize', ['aluno']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Aluno id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $aluno = $this->Aluno->get($id);
        if ($this->Aluno->delete($aluno)) {
            $this->Flash->success(__('The aluno has been deleted.'));
        } else {
            $this->Flash->error(__('The aluno could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
