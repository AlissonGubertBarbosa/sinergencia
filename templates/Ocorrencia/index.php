<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Ocorrencia[]|\Cake\Collection\CollectionInterface $ocorrencia
 */
?>
<div class="ocorrencia index content">
    <?= $this->Html->link(__('New Ocorrencia'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Ocorrencia') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id_ocorrencia') ?></th>
                    <th><?= $this->Paginator->sort('descricao') ?></th>
                    <th><?= $this->Paginator->sort('status') ?></th>
                    <th><?= $this->Paginator->sort('data_Criacao') ?></th>
                    <th><?= $this->Paginator->sort('usuariocomum_id') ?></th>
                    <th><?= $this->Paginator->sort('endereco_id') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($ocorrencia as $ocorrencia): ?>
                <tr>
                    <td><?= $this->Number->format($ocorrencia->id_ocorrencia) ?></td>
                    <td><?= h($ocorrencia->descricao) ?></td>
                    <td><?= h($ocorrencia->status) ?></td>
                    <td><?= h($ocorrencia->data_Criacao) ?></td>
                    <td><?= $ocorrencia->has('usuariocomum') ? $this->Html->link($ocorrencia->usuariocomum->id_usuarioComum, ['controller' => 'Usuariocomum', 'action' => 'view', $ocorrencia->usuariocomum->id_usuarioComum]) : '' ?></td>
                    <td><?= $this->Number->format($ocorrencia->endereco_id) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $ocorrencia->id_ocorrencia]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $ocorrencia->id_ocorrencia]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $ocorrencia->id_ocorrencia], ['confirm' => __('Are you sure you want to delete # {0}?', $ocorrencia->id_ocorrencia)]) ?>
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
