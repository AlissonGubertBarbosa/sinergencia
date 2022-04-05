<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Endereco[]|\Cake\Collection\CollectionInterface $endereco
 */
?>
<div class="endereco index content">
    <?= $this->Html->link(__('Novo endereço'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Endereço') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id_endereco') ?></th>
                    <th><?= $this->Paginator->sort('Logradouro') ?></th>
                    <th><?= $this->Paginator->sort('numero') ?></th>
                    <th><?= $this->Paginator->sort('Bairro') ?></th>
                    <th><?= $this->Paginator->sort('Complemento') ?></th>
                    <th><?= $this->Paginator->sort('Cidade') ?></th>
                    <th><?= $this->Paginator->sort('Estado') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($endereco as $endereco): ?>
                <tr>
                    <td><?= $this->Number->format($endereco->id_endereco) ?></td>
                    <td><?= $this->Number->format($endereco->logradouro) ?></td>
                    <td><?= $this->Number->format($endereco->numero) ?></td>
                    <td><?= $this->Number->format($endereco->bairro) ?></td>
                    <td><?= $this->Number->format($endereco->complemento) ?></td>
                    <td><?= $this->Number->format($endereco->cidade) ?></td>
                    <td><?= $this->Number->format($endereco->estado) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('Ver'), ['action' => 'view', $endereco->id_endereco]) ?>
                        <?= $this->Html->link(__('Editar'), ['action' => 'edit', $endereco->id_endereco]) ?>
                        <?= $this->Form->postLink(__('Excluir'), ['action' => 'delete', $endereco->id_endereco], ['confirm' => __('Are you sure you want to delete # {0}?', $endereco->id_endereco)]) ?>
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
