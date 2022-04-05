<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Ocorrencium[]|\Cake\Collection\CollectionInterface $ocorrencia
 */
?>
<div class="ocorrencia index content">
    <?= $this->Html->link(__('Nova ocorrência'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Ocorrência') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('Identificador') ?></th>
                    <th><?= $this->Paginator->sort('Estado') ?></th>
                    <th><?= $this->Paginator->sort('data Criacao') ?></th>
                    <th><?= $this->Paginator->sort('Usuario') ?></th>
                    <th><?= $this->Paginator->sort('Endereco') ?></th>
                    <th class="actions"><?= __('Ações') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($ocorrencia as $ocorrencium): ?>
                <tr>
                    <td><?= $this->Number->format($ocorrencium->id_ocorrencia) ?></td>
                    <td><?= h($ocorrencium->status) ?></td>
                    <td><?= h($ocorrencium->data_Criacao) ?></td>
                    <td><?= $this->Number->format($ocorrencium->id_usuarioComum) ?></td>
                    <td><?= $this->Number->format($ocorrencium->id_enderecoOcorrencia) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('Ver'), ['action' => 'view', $ocorrencium->id_ocorrencia]) ?>
                        <?= $this->Html->link(__('Editar'), ['action' => 'edit', $ocorrencium->id_ocorrencia]) ?>
                        <?= $this->Form->postLink(__('Excluir'), ['action' => 'delete', $ocorrencium->id_ocorrencia], ['confirm' => __('Are you sure you want to delete # {0}?', $ocorrencium->id_ocorrencia)]) ?>
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
