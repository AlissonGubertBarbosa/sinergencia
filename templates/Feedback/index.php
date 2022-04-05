<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Feedback[]|\Cake\Collection\CollectionInterface $feedback
 */
?>
<div class="feedback index content">
    <h3><?= __('Feedback') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('identificador') ?></th>
                    <th><?= $this->Paginator->sort('Número ocorrencia') ?></th>
                    <th><?= $this->Paginator->sort('nome usuario') ?></th>
                    <th><?= $this->Paginator->sort('nome instituição') ?></th>
                    <th class="actions"><?= __('Ações') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($feedback as $feedback): ?>
                <tr>
                    <td><?= $this->Number->format($feedback->id_feedback) ?></td>
                    <td><?= $this->Number->format($feedback->id_ocorrencia) ?></td>
                    <td><?= $this->Number->format($feedback->id_usuarioComum) ?></td>
                    <td><?= $this->Number->format($feedback->id_instituicao) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('Ver'), ['action' => 'view', $feedback->id_feedback]) ?>
                        <?= $this->Html->link(__('Editar'), ['action' => 'edit', $feedback->id_feedback]) ?>
                        <?= $this->Form->postLink(__('Excluir'), ['action' => 'delete', $feedback->id_feedback], ['confirm' => __('Are you sure you want to delete # {0}?', $feedback->id_feedback)]) ?>
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
