<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Instituicao[]|\Cake\Collection\CollectionInterface $instituicao
 */
?>
<div class="instituicao index content">
    <?= $this->Html->link(__('Novo cadastro'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Instituicao') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('identificador') ?></th>
                    <th><?= $this->Paginator->sort('nome') ?></th>
                    <th><?= $this->Paginator->sort('nome Usuario') ?></th>
                    <th><?= $this->Paginator->sort('senha') ?></th>
                    <th><?= $this->Paginator->sort('telefone') ?></th>
                    <th><?= $this->Paginator->sort('email') ?></th>
                    <th><?= $this->Paginator->sort('endereco') ?></th>
                    <th class="actions"><?= __('Ações') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($instituicao as $instituicao): ?>
                <tr>
                    <td><?= $this->Number->format($instituicao->id_instituicao) ?></td>
                    <td><?= h($instituicao->nomeInstituição) ?></td>
                    <td><?= h($instituicao->nomeUsuario) ?></td>
                    <td><?= h($instituicao->senha) ?></td>
                    <td><?= h($instituicao->telefone) ?></td>
                    <td><?= h($instituicao->email) ?></td>
                    <td><?= $this->Number->format($instituicao->id_endereco) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('Ver'), ['action' => 'view', $instituicao->id_instituicao]) ?>
                        <?= $this->Html->link(__('Editar'), ['action' => 'edit', $instituicao->id_instituicao]) ?>
                        <?= $this->Form->postLink(__('Excluir'), ['action' => 'delete', $instituicao->id_instituicao], ['confirm' => __('Are you sure you want to delete # {0}?', $instituicao->id_instituicao)]) ?>
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->first('<< ' . __('primeior')) ?>
            <?= $this->Paginator->prev('< ' . __('anterior')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('próximo') . ' >') ?>
            <?= $this->Paginator->last(__('último') . ' >>') ?>
        </ul>
        <p><?= $this->Paginator->counter(__('Página {{page}} de {{pages}}')) ?></p>
    </div>
</div>
