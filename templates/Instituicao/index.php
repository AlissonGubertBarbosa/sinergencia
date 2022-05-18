<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Instituicao[]|\Cake\Collection\CollectionInterface $instituicao
 */
?>
<div class="instituicao index content">
    <?= $this->Html->link(__('New Instituicao'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Instituicao') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id_instituicao') ?></th>
                    <th><?= $this->Paginator->sort('nome') ?></th>
                    <th><?= $this->Paginator->sort('username') ?></th>
                    <th><?= $this->Paginator->sort('telefone') ?></th>
                    <th><?= $this->Paginator->sort('email') ?></th>
                    <th><?= $this->Paginator->sort('roles_id') ?></th>
                    <th><?= $this->Paginator->sort('created') ?></th>
                    <th><?= $this->Paginator->sort('modified') ?></th>
                    <th><?= $this->Paginator->sort('endereco_id') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($instituicao as $instituicao): ?>
                <tr>
                    <td><?= $this->Number->format($instituicao->id_instituicao) ?></td>
                    <td><?= h($instituicao->nome) ?></td>
                    <td><?= h($instituicao->username) ?></td>
                    <td><?= h($instituicao->telefone) ?></td>
                    <td><?= h($instituicao->email) ?></td>
                    <td><?= $instituicao->has('role') ? $this->Html->link($instituicao->role->role, ['controller' => 'Roles', 'action' => 'view', $instituicao->role->id]) : '' ?></td>
                    <td><?= h($instituicao->created) ?></td>
                    <td><?= h($instituicao->modified) ?></td>
                    <td><?= $this->Number->format($instituicao->endereco_id) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $instituicao->id_instituicao]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $instituicao->id_instituicao]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $instituicao->id_instituicao], ['confirm' => __('Are you sure you want to delete # {0}?', $instituicao->id_instituicao)]) ?>
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
