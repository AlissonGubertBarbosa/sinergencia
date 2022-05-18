<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Feedback[]|\Cake\Collection\CollectionInterface $feedback
 */
?>
<div class="feedback index content">
    <?= $this->Html->link(__('New Feedback'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Feedback') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id_feedback') ?></th>
                    <th><?= $this->Paginator->sort('devolutiva') ?></th>
                    <th><?= $this->Paginator->sort('ocorrencia_id') ?></th>
                    <th><?= $this->Paginator->sort('usuariocomum_id') ?></th>
                    <th><?= $this->Paginator->sort('instituicao_id') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($feedback as $feedback): ?>
                <tr>
                    <td><?= $this->Number->format($feedback->id_feedback) ?></td>
                    <td><?= h($feedback->devolutiva) ?></td>
                    <td><?= $this->Number->format($feedback->ocorrencia_id) ?></td>
                    <td><?= $this->Number->format($feedback->usuariocomum_id) ?></td>
                    <td><?= $this->Number->format($feedback->instituicao_id) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $feedback->id_feedback]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $feedback->id_feedback]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $feedback->id_feedback], ['confirm' => __('Are you sure you want to delete # {0}?', $feedback->id_feedback)]) ?>
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
