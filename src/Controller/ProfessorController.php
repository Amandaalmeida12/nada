<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Professor Controller
 *
 * @property \App\Model\Table\ProfessorTable $Professor
 *
 * @method \App\Model\Entity\Professor[] paginate($object = null, array $settings = [])
 */
class ProfessorController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $professor = $this->paginate($this->Professor);

        $this->set(compact('professor'));
        $this->set('_serialize', ['professor']);
    }

    /**
     * View method
     *
     * @param string|null $id Professor id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $professor = $this->Professor->get($id, [
            'contain' => ['Turma']
        ]);

        $this->set('professor', $professor);
        $this->set('_serialize', ['professor']);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $professor = $this->Professor->newEntity();
        if ($this->request->is('post')) {
            $professor = $this->Professor->patchEntity($professor, $this->request->getData());
            if ($this->Professor->save($professor)) {
                $this->Flash->success(__('The professor has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The professor could not be saved. Please, try again.'));
        }
        $this->set(compact('professor'));
        $this->set('_serialize', ['professor']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Professor id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $professor = $this->Professor->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $professor = $this->Professor->patchEntity($professor, $this->request->getData());
            if ($this->Professor->save($professor)) {
                $this->Flash->success(__('The professor has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The professor could not be saved. Please, try again.'));
        }
        $this->set(compact('professor'));
        $this->set('_serialize', ['professor']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Professor id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $professor = $this->Professor->get($id);
        if ($this->Professor->delete($professor)) {
            $this->Flash->success(__('The professor has been deleted.'));
        } else {
            $this->Flash->error(__('The professor could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
