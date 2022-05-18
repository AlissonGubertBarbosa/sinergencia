<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * Usuariocomums Controller
 *
 * @property \App\Model\Table\UsuariocomumsTable $Usuariocomums
 * @method \App\Model\Entity\Usuariocomum[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class UsuariocomumsController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $usuariocomums = $this->paginate($this->Usuariocomums);

        $this->set(compact('usuariocomums'));
    }

    /**
     * View method
     *
     * @param string|null $id Usuariocomum id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $usuariocomum = $this->Usuariocomums->get($id, [
            'contain' => ['Classificacoes', 'Feedback', 'Ocorrencias'],
        ]);

        $this->set(compact('usuariocomum'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $usuariocomum = $this->Usuariocomums->newEmptyEntity();
        if ($this->request->is('post')) {
            $usuariocomum = $this->Usuariocomums->patchEntity($usuariocomum, $this->request->getData());
            if ($this->Usuariocomums->save($usuariocomum)) {
                $this->Flash->success(__('The usuariocomum has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The usuariocomum could not be saved. Please, try again.'));
        }
        $this->set(compact('usuariocomum'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Usuariocomum id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $usuariocomum = $this->Usuariocomums->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $usuariocomum = $this->Usuariocomums->patchEntity($usuariocomum, $this->request->getData());
            if ($this->Usuariocomums->save($usuariocomum)) {
                $this->Flash->success(__('The usuariocomum has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The usuariocomum could not be saved. Please, try again.'));
        }
        $this->set(compact('usuariocomum'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Usuariocomum id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $usuariocomum = $this->Usuariocomums->get($id);
        if ($this->Usuariocomums->delete($usuariocomum)) {
            $this->Flash->success(__('The usuariocomum has been deleted.'));
        } else {
            $this->Flash->error(__('The usuariocomum could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
