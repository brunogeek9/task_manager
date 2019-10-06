<?php

namespace App\Controller;

use App\Controller\AppController;

/**
 * Tasks Controller
 *
 * @property \App\Model\Table\TasksTable $Tasks
 *
 * @method \App\Model\Entity\Task[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class TasksController extends AppController
{
    public function initialize()
    {
        parent::initialize();
        $this->loadComponent('Flash'); // Inclui o FlashComponent
    }
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null
     */
    public function index()
    {
        $tasks = $this->paginate($this->Tasks);
        // buscando tarefas incompletas
        $incompleted = $this->paginate(
            $this->Tasks->find('all')
                ->where(['Tasks.done' => false])
        );
        // buscando as tarefas completas
        $completed = $this->Tasks->find('all')
            ->where(['Tasks.done' => true]);
        // passando todos os arrays para a view
        $compQtd = $completed->count();
        $incompQtd = $incompleted->count();
        $this->set(compact('tasks', 'incompleted', 'completed','compQtd','incompQtd'));
    }

    public function completed()
    {
        $incompleted = $this->Tasks->find('all')
            ->where(['Tasks.done' => false]);

        $completed = $this->Tasks->find('all')
            ->where(['Tasks.done' => true]);
        $this->set(compact('incompleted', 'completed'));
    }

    public function incompleted()
    {
        $incompleted = $this->Tasks->find('all')
            ->where(['Tasks.done' => false]);
        $this->set(compact('incompleted'));
    }

    /**
     * View method
     *
     * @param string|null $id Task id.
     * @return \Cake\Http\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $task = $this->Tasks->get($id, [
            'contain' => []
        ]);

        $this->set('task', $task);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $task = $this->Tasks->newEntity();
        if ($this->request->is('post')) {
            $task = $this->Tasks->patchEntity($task, $this->request->getData());
            if ($this->Tasks->save($task)) {
                // $this->Flash->success(__('The task has been saved.'));
                $this->Flash->flash('The task has been saved.', [
                    'params' => [
                        'type' => 'success'
                    ]
                ]);
                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->flash('The task could not be saved. Please, try again.', [
                'params' => [
                    'type' => 'danger'
                ]
            ]);
        }
        $this->set(compact('task'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Task id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $task = $this->Tasks->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $task = $this->Tasks->patchEntity($task, $this->request->getData());
            if ($this->Tasks->save($task)) {
                $this->Flash->flash('The task has been saved.', [
                    'params' => [
                        'type' => 'success'
                    ]
                ]);

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->flash('The task could not be saved. Please, try again.', [
                'params' => [
                    'type' => 'danger'
                ]
            ]);
        }
        $this->set(compact('task'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Task id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $task = $this->Tasks->get($id);
        if ($this->Tasks->delete($task)) {
            $this->Flash->flash('The task has been deleted.', [
                'params' => [
                    'type' => 'warning'
                ]
            ]);
        } else {
            $this->Flash->flash('The task could not be deleted. Please, try again.', [
                'params' => [
                    'type' => 'danger'
                ]
            ]);
        }

        return $this->redirect(['action' => 'index']);
    }
}
