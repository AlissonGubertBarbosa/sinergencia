<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Moderador[]|\Cake\Collection\CollectionInterface $moderador
 */
?>
<div class="moderador index content">
    <?= $this->Html->link(__('Novo Cadastro'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Moderador') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('Identificador') ?></th>
                    <th><?= $this->Paginator->sort('Nome') ?></th>
                    <th><?= $this->Paginator->sort('Nome Usuario') ?></th>
                    <th><?= $this->Paginator->sort('senha') ?></th>
                    <th><?= $this->Paginator->sort('telefone') ?></th>
                    <th><?= $this->Paginator->sort('sexo') ?></th>
                    <th><?= $this->Paginator->sort('Endereco') ?></th>
                    <th class="actions"><?= __('Ações') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($moderador as $moderador): ?>
                <tr>
                    <td><?= $this->Number->format($moderador->id_moderador) ?></td>
                    <td><?= h($moderador->nomeModerador) ?></td>
                    <td><?= h($moderador->nomeUsuario) ?></td>
                    <td><?= h($moderador->senha) ?></td>
                    <td><?= h($moderador->telefone) ?></td>
                    <td><?= h($moderador->sexo) ?></td>
                    <td><?= $this->Number->format($moderador->id_endereco) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('Ver'), ['action' => 'view', $moderador->id_moderador]) ?>
                        <?= $this->Html->link(__('Editar'), ['action' => 'edit', $moderador->id_moderador]) ?>
                        <?= $this->Form->postLink(__('Excluir'), ['action' => 'delete', $moderador->id_moderador], ['confirm' => __('Are you sure you want to delete # {0}?', $moderador->id_moderador)]) ?>
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
