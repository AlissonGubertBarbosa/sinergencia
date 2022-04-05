<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * Ocorrencia Controller
 *
 * @property \App\Model\Table\OcorrenciaTable $Ocorrencia
 * @method \App\Model\Entity\Ocorrencium[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class OcorrenciaController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $ocorrencia = $this->paginate($this->Ocorrencia);

        $this->set(compact('ocorrencia'));
    }

    /**
     * View method
     *
     * @param string|null $id Ocorrencium id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $ocorrencium = $this->Ocorrencia->get($id, [
            'contain' => [],
        ]);

        $this->set(compact('ocorrencium'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $ocorrencium = $this->Ocorrencia->newEmptyEntity();
        if ($this->request->is('post')) {
            $ocorrencium = $this->Ocorrencia->patchEntity($ocorrencium, $this->request->getData());
            if ($this->Ocorrencia->save($ocorrencium)) {
                $this->Flash->success(__('The ocorrencium has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The ocorrencium could not be saved. Please, try again.'));
        }
        $this->set(compact('ocorrencium'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Ocorrencium id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $ocorrencium = $this->Ocorrencia->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $ocorrencium = $this->Ocorrencia->patchEntity($ocorrencium, $this->request->getData());
            if ($this->Ocorrencia->save($ocorrencium)) {
                $this->Flash->success(__('The ocorrencium has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The ocorrencium could not be saved. Please, try again.'));
        }
        $this->set(compact('ocorrencium'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Ocorrencium id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $ocorrencium = $this->Ocorrencia->get($id);
        if ($this->Ocorrencia->delete($ocorrencium)) {
            $this->Flash->success(__('The ocorrencium has been deleted.'));
        } else {
            $this->Flash->error(__('The ocorrencium could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
