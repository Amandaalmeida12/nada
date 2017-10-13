<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Turma Controller
 *
 * @property \App\Model\Table\TurmaTable $Turma
 *
 * @method \App\Model\Entity\Turma[] paginate($object = null, array $settings = [])
 */
class TurmaController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Professor', 'Disciplina']
        ];
        $turma = $this->paginate($this->Turma);

        $this->set(compact('turma'));
        $this->set('_serialize', ['turma']);
    }

    /**
     * View method
     *
     * @param string|null $id Turma id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $turma = $this->Turma->get($id, [
            'contain' => ['Professor', 'Disciplina']
        ]);

        $this->set('turma', $turma);
        $this->set('_serialize', ['turma']);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $turma = $this->Turma->newEntity();
        if ($this->request->is('post')) {
            $turma = $this->Turma->patchEntity($turma, $this->request->getData());
            if ($this->Turma->save($turma)) {
                $this->Flash->success(__('The turma has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The turma could not be saved. Please, try again.'));
        }
        $professor = $this->Turma->Professor->find('list', ['limit' => 200]);
        $disciplina = $this->Turma->Disciplina->find('list', ['limit' => 200]);
        $this->set(compact('turma', 'professor', 'disciplina'));
        $this->set('_serialize', ['turma']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Turma id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $turma = $this->Turma->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $turma = $this->Turma->patchEntity($turma, $this->request->getData());
            if ($this->Turma->save($turma)) {
                $this->Flash->success(__('The turma has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The turma could not be saved. Please, try again.'));
        }
        $professor = $this->Turma->Professor->find('list', ['limit' => 200]);
        $disciplina = $this->Turma->Disciplina->find('list', ['limit' => 200]);
        $this->set(compact('turma', 'professor', 'disciplina'));
        $this->set('_serialize', ['turma']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Turma id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $turma = $this->Turma->get($id);
        if ($this->Turma->delete($turma)) {
            $this->Flash->success(__('The turma has been deleted.'));
        } else {
            $this->Flash->error(__('The turma could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
