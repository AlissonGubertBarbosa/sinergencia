<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * UsuarioComum Controller
 *
 * @property \App\Model\Table\UsuarioComumTable $UsuarioComum
 * @method \App\Model\Entity\UsuarioComum[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class UsuarioComumController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $usuarioComum = $this->paginate($this->UsuarioComum);

        $this->set(compact('usuarioComum'));
    }

    /**
     * View method
     *
     * @param string|null $id Usuario Comum id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $usuarioComum = $this->UsuarioComum->get($id, [
            'contain' => ['Classificacao', 'Feedback', 'Ocorrencia'],
        ]);

        $this->set(compact('usuarioComum'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $usuarioComum = $this->UsuarioComum->newEmptyEntity();
        if ($this->request->is('post')) {
            $usuarioComum = $this->UsuarioComum->patchEntity($usuarioComum, $this->request->getData());
            if ($this->UsuarioComum->save($usuarioComum)) {
                $this->Flash->success(__('The usuario comum has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The usuario comum could not be saved. Please, try again.'));
        }
        $this->set(compact('usuarioComum'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Usuario Comum id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $usuarioComum = $this->UsuarioComum->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $usuarioComum = $this->UsuarioComum->patchEntity($usuarioComum, $this->request->getData());
            if ($this->UsuarioComum->save($usuarioComum)) {
                $this->Flash->success(__('The usuario comum has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The usuario comum could not be saved. Please, try again.'));
        }
        $this->set(compact('usuarioComum'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Usuario Comum id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $usuarioComum = $this->UsuarioComum->get($id);
        if ($this->UsuarioComum->delete($usuarioComum)) {
            $this->Flash->success(__('The usuario comum has been deleted.'));
        } else {
            $this->Flash->error(__('The usuario comum could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
