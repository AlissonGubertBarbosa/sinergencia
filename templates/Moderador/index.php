<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Moderador[]|\Cake\Collection\CollectionInterface $moderador
 */
?>
<div class="moderador index content">
    <?= $this->Html->link(__('New Moderador'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Moderador') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id_moderador') ?></th>
                    <th><?= $this->Paginator->sort('nome') ?></th>
                    <th><?= $this->Paginator->sort('username') ?></th>
                    <th><?= $this->Paginator->sort('telefone') ?></th>
                    <th><?= $this->Paginator->sort('sexo') ?></th>
                    <th><?= $this->Paginator->sort('roles_id') ?></th>
                    <th><?= $this->Paginator->sort('created') ?></th>
                    <th><?= $this->Paginator->sort('modified') ?></th>
                    <th><?= $this->Paginator->sort('id_endereco') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($moderador as $moderador): ?>
                <tr>
                    <td><?= $this->Number->format($moderador->id_moderador) ?></td>
                    <td><?= h($moderador->nome) ?></td>
                    <td><?= h($moderador->username) ?></td>
                    <td><?= h($moderador->telefone) ?></td>
                    <td><?= h($moderador->sexo) ?></td>
                    <td><?= $moderador->has('role') ? $this->Html->link($moderador->role->role, ['controller' => 'Roles', 'action' => 'view', $moderador->role->id]) : '' ?></td>
                    <td><?= h($moderador->created) ?></td>
                    <td><?= h($moderador->modified) ?></td>
                    <td><?= $moderador->has('logradouro') ? $this->html->linl($moderador->endereco->logradouro, ['controller' => 'Endereco', 'action' => 'view', $moderador->endereco->id]) : '' ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $moderador->id_moderador]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $moderador->id_moderador]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $moderador->id_moderador], ['confirm' => __('Are you sure you want to delete # {0}?', $moderador->id_moderador)]) ?>
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
