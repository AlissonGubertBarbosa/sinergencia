<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Endereco[]|\Cake\Collection\CollectionInterface $endereco
 */
?>
<div class="endereco index content">
    <?= $this->Html->link(__('New Endereco'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Endereco') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id_endereco') ?></th>
                    <th><?= $this->Paginator->sort('logradouro') ?></th>
                    <th><?= $this->Paginator->sort('numero') ?></th>
                    <th><?= $this->Paginator->sort('bairro') ?></th>
                    <th><?= $this->Paginator->sort('complemento') ?></th>
                    <th><?= $this->Paginator->sort('cidade') ?></th>
                    <th><?= $this->Paginator->sort('estado') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($endereco as $endereco): ?>
                <tr>
                    <td><?= $this->Number->format($endereco->id_endereco) ?></td>
                    <td><?= h($endereco->logradouro) ?></td>
                    <td><?= h($endereco->numero) ?></td>
                    <td><?= h($endereco->bairro) ?></td>
                    <td><?= h($endereco->complemento) ?></td>
                    <td><?= h($endereco->cidade) ?></td>
                    <td><?= h($endereco->estado) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $endereco->id_endereco]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $endereco->id_endereco]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $endereco->id_endereco], ['confirm' => __('Are you sure you want to delete # {0}?', $endereco->id_endereco)]) ?>
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
