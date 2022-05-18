<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Usuariocomum[]|\Cake\Collection\CollectionInterface $usuariocomums
 */
?>
<div class="usuariocomums index content">
    <?= $this->Html->link(__('New Usuariocomum'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Usuariocomums') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('nome') ?></th>
                    <th><?= $this->Paginator->sort('telefone') ?></th>
                    <th><?= $this->Paginator->sort('sexo') ?></th>
                    <th><?= $this->Paginator->sort('email') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($usuariocomums as $usuariocomum): ?>
                <tr>
                    <td><?= $this->Number->format($usuariocomum->id) ?></td>
                    <td><?= h($usuariocomum->nome) ?></td>
                    <td><?= h($usuariocomum->telefone) ?></td>
                    <td><?= h($usuariocomum->sexo) ?></td>
                    <td><?= h($usuariocomum->email) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $usuariocomum->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $usuariocomum->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $usuariocomum->id], ['confirm' => __('Are you sure you want to delete # {0}?', $usuariocomum->id)]) ?>
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->first('<< ' . __('first')) ?>
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
            <?= $this->Paginator->last(__('last') . ' >>') ?>
        </ul>
        <p><?= $this->Paginator->counter(__('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')) ?></p>
    </div>
</div>
