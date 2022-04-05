<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Usuariocomum[]|\Cake\Collection\CollectionInterface $usuariocomum
 */
?>
<div class="column-responsive column-20">
    <?= $this->Html->link(__('Novo cadastro'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Usuario Comum') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('Identificador') ?></th>
                    <th><?= $this->Paginator->sort('Nome') ?></th>
                    <th><?= $this->Paginator->sort('telefone') ?></th>
                    <th><?= $this->Paginator->sort('sexo') ?></th>
                    <th class="actions"><?= __('Ações') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($usuariocomum as $usuariocomum): ?>
                <tr>
                    <td><?= $this->Number->format($usuariocomum->id_usuarioComum) ?></td>
                    <td><?= h($usuariocomum->nomeUsuario) ?></td>
                    <td><?= h($usuariocomum->telefone) ?></td>
                    <td><?= h($usuariocomum->sexo) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('Ver'), ['action' => 'view', $usuariocomum->id_usuarioComum]) ?>
                        <?= $this->Html->link(__('Editar'), ['action' => 'edit', $usuariocomum->id_usuarioComum]) ?>
                        <?= $this->Form->postLink(__('Excluir'), ['action' => 'delete', $usuariocomum->id_usuarioComum], ['confirm' => __('Are you sure you want to delete # {0}?', $usuariocomum->id_usuarioComum)]) ?>
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
