<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * StudentTurma Controller
 *
 * @property \App\Model\Table\StudentTurmaTable $StudentTurma
 *
 * @method \App\Model\Entity\StudentTurma[] paginate($object = null, array $settings = [])
 */
class StudentTurmaController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Aluno', 'Turma']
        ];
        $studentTurma = $this->paginate($this->StudentTurma);

        $this->set(compact('studentTurma'));
        $this->set('_serialize', ['studentTurma']);
    }

    /**
     * View method
     *
     * @param string|null $id Student Turma id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $studentTurma = $this->StudentTurma->get($id, [
            'contain' => ['Aluno', 'Turma']
        ]);

        $this->set('studentTurma', $studentTurma);
        $this->set('_serialize', ['studentTurma']);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $studentTurma = $this->StudentTurma->newEntity();
        if ($this->request->is('post')) {
            $studentTurma = $this->StudentTurma->patchEntity($studentTurma, $this->request->getData());
            if ($this->StudentTurma->save($studentTurma)) {
                $this->Flash->success(__('The student turma has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The student turma could not be saved. Please, try again.'));
        }
        $aluno = $this->StudentTurma->Aluno->find('list', ['limit' => 200]);
        $turma = $this->StudentTurma->Turma->find('list', ['limit' => 200]);
        $this->set(compact('studentTurma', 'aluno', 'turma'));
        $this->set('_serialize', ['studentTurma']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Student Turma id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $studentTurma = $this->StudentTurma->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $studentTurma = $this->StudentTurma->patchEntity($studentTurma, $this->request->getData());
            if ($this->StudentTurma->save($studentTurma)) {
                $this->Flash->success(__('The student turma has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The student turma could not be saved. Please, try again.'));
        }
        $aluno = $this->StudentTurma->Aluno->find('list', ['limit' => 200]);
        $turma = $this->StudentTurma->Turma->find('list', ['limit' => 200]);
        $this->set(compact('studentTurma', 'aluno', 'turma'));
        $this->set('_serialize', ['studentTurma']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Student Turma id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $studentTurma = $this->StudentTurma->get($id);
        if ($this->StudentTurma->delete($studentTurma)) {
            $this->Flash->success(__('The student turma has been deleted.'));
        } else {
            $this->Flash->error(__('The student turma could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
