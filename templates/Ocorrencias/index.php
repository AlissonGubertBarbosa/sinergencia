<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Ocorrencia[]|\Cake\Collection\CollectionInterface $ocorrencias
 */
?>
<div class="ocorrencias index content">
    <?= $this->Html->link(__('New Ocorrencia'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Ocorrencias') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('descricao') ?></th>
                    <th><?= $this->Paginator->sort('status') ?></th>
                    <th><?= $this->Paginator->sort('data_Criacao') ?></th>
                    <th><?= $this->Paginator->sort('usuariocomum_id') ?></th>
                    <th><?= $this->Paginator->sort('endereco_id') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($ocorrencias as $ocorrencia): ?>
                <tr>
                    <td><?= $this->Number->format($ocorrencia->id) ?></td>
                    <td><?= h($ocorrencia->descricao) ?></td>
                    <td><?= h($ocorrencia->status) ?></td>
                    <td><?= h($ocorrencia->data_Criacao) ?></td>
                    <td><?= $ocorrencia->has('usuariocomum') ? $this->Html->link($ocorrencia->usuariocomum->id, ['controller' => 'Usuariocomum', 'action' => 'view', $ocorrencia->usuariocomum->id]) : '' ?></td>
                    <td><?= $ocorrencia->has('endereco') ? $this->Html->link($ocorrencia->endereco->id, ['controller' => 'Enderecos', 'action' => 'view', $ocorrencia->endereco->id]) : '' ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $ocorrencia->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $ocorrencia->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $ocorrencia->id], ['confirm' => __('Are you sure you want to delete # {0}?', $ocorrencia->id)]) ?>
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
    <a href="<?= $this->Url->build('/') ?>">Voltar a Página inicial</a>
</div>
