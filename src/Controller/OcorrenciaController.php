<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * Ocorrencia Controller
 *
 * @property \App\Model\Table\OcorrenciaTable $Ocorrencia
 * @method \App\Model\Entity\Ocorrencia[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
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
        $this->paginate = [
            'contain' => ['Usuariocomum', 'Endereco'],
        ];
        $ocorrencia = $this->paginate($this->Ocorrencia);

        $this->set(compact('ocorrencia'));
    }

    /**
     * View method
     *
     * @param string|null $id Ocorrencia id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $ocorrencia = $this->Ocorrencia->get($id, [
            'contain' => ['Usuariocomum', 'Endereco'],
        ]);

        $this->set(compact('ocorrencia'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $ocorrencia = $this->Ocorrencia->newEmptyEntity();
        if ($this->request->is('post')) {
            $ocorrencia = $this->Ocorrencia->patchEntity($ocorrencia, $this->request->getData());
            if ($this->Ocorrencia->save($ocorrencia)) {
                $this->Flash->success(__('The ocorrencia has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The ocorrencia could not be saved. Please, try again.'));
        }
        $usuariocomum = $this->Ocorrencia->Usuariocomum->find('list', ['limit' => 200])->all();
        $endereco = $this->Ocorrencia->Endereco->find('list', ['limit' => 200])->all();
        $this->set(compact('ocorrencia', 'usuariocomum', 'endereco'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Ocorrencia id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $ocorrencia = $this->Ocorrencia->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $ocorrencia = $this->Ocorrencia->patchEntity($ocorrencia, $this->request->getData());
            if ($this->Ocorrencia->save($ocorrencia)) {
                $this->Flash->success(__('The ocorrencia has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The ocorrencia could not be saved. Please, try again.'));
        }
        $usuariocomum = $this->Ocorrencia->Usuariocomum->find('list', ['limit' => 200])->all();
        $endereco = $this->Ocorrencia->Endereco->find('list', ['limit' => 200])->all();
        $this->set(compact('ocorrencia', 'usuariocomum', 'endereco'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Ocorrencia id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $ocorrencia = $this->Ocorrencia->get($id);
        if ($this->Ocorrencia->delete($ocorrencia)) {
            $this->Flash->success(__('The ocorrencia has been deleted.'));
        } else {
            $this->Flash->error(__('The ocorrencia could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
