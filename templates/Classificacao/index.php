<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Classificacao[]|\Cake\Collection\CollectionInterface $classificacao
 */
?>
<div class="classificacao index content">
    <?= $this->Html->link(__('New Classificacao'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Classificacao') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('nota') ?></th>
                    <th><?= $this->Paginator->sort('feedback_id') ?></th>
                    <th><?= $this->Paginator->sort('usuariocomum_id') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($classificacao as $classificacao): ?>
                <tr>
                    <td><?= $this->Number->format($classificacao->id) ?></td>
                    <td><?= $this->Number->format($classificacao->nota) ?></td>
                    <td><?= $this->Number->format($classificacao->feedback_id) ?></td>
                    <td><?= $this->Number->format($classificacao->usuariocomum_id) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $classificacao->id_classificacao]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $classificacao->id_classificacao]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $classificacao->id_classificacao], ['confirm' => __('Are you sure you want to delete # {0}?', $classificacao->id_classificacao)]) ?>
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
