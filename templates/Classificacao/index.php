<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Classificacao[]|\Cake\Collection\CollectionInterface $classificacao
 */
?>
<div class="classificacao index content">
    <h3><?= __('Classificacao') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('Identificador') ?></th>
                    <th><?= $this->Paginator->sort('nota') ?></th>
                    <th><?= $this->Paginator->sort('Identificador feedback') ?></th>
                    <th><?= $this->Paginator->sort('Nome usuario') ?></th>
                    <th class="actions"><?= __('Ações') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($classificacao as $classificacao): ?>
                <tr>
                    <td><?= $this->Number->format($classificacao->id_classificacao) ?></td>
                    <td><?= $this->Number->format($classificacao->nota) ?></td>
                    <td><?= $this->Number->format($classificacao->id_feedback) ?></td>
                    <td><?= $this->Number->format($classificacao->id_usuarioComum) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('Ver'), ['action' => 'view', $classificacao->id_classificacao]) ?>
                        <?= $this->Html->link(__('Editar'), ['action' => 'edit', $classificacao->id_classificacao]) ?>
                        <?= $this->Form->postLink(__('Excluir'), ['action' => 'delete', $classificacao->id_classificacao], ['confirm' => __('Are you sure you want to delete # {0}?', $classificacao->id_classificacao)]) ?>
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
