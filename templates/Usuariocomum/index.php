<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\UsuarioComum[]|\Cake\Collection\CollectionInterface $usuarioComum
 */
?>
<div class="usuarioComum index content">
    <?= $this->Html->link(__('New Usuario Comum'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Usuario Comum') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id_usuarioComum') ?></th>
                    <th><?= $this->Paginator->sort('nome') ?></th>
                    <th><?= $this->Paginator->sort('telefone') ?></th>
                    <th><?= $this->Paginator->sort('sexo') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($usuarioComum as $usuarioComum): ?>
                <tr>
                    <td><?= $this->Number->format($usuarioComum->id_usuarioComum) ?></td>
                    <td><?= h($usuarioComum->nome) ?></td>
                    <td><?= h($usuarioComum->telefone) ?></td>
                    <td><?= h($usuarioComum->sexo) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $usuarioComum->id_usuarioComum]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $usuarioComum->id_usuarioComum]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $usuarioComum->id_usuarioComum], ['confirm' => __('Are you sure you want to delete # {0}?', $usuarioComum->id_usuarioComum)]) ?>
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
