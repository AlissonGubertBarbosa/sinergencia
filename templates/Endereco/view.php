<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Endereco $endereco
 */
?>
<div class="row">
    <aside class="column-responsive column-20">
        <div class="side-nav">
            <h4 class="heading"><?= __('Ver') ?></h4>
            <?= $this->Html->link(__('Editar'), ['action' => 'edit', $endereco->id_endereco], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Excluir'), ['action' => 'delete', $endereco->id_endereco], ['confirm' => __('Are you sure you want to delete # {0}?', $endereco->id_endereco), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('Listar'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('Novo endereço'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-60">
        <div class="endereco view content">
            <h3><?= h($endereco->id_endereco) ?></h3>
            <table>
                <tr>
                    <th><?= __('Logradouro') ?></th>
                    <td><?= h($endereco->logradouro) ?></td>
                </tr>
                <tr>
                    <th><?= __('Numero') ?></th>
                    <td><?= $this->Number->format($endereco->numero) ?></td>
                </tr>
                <tr>
                    <th><?= __('Bairro') ?></th>
                    <td><?= h($endereco->bairro) ?></td>
                </tr>
                <tr>
                    <th><?= __('Complemento') ?></th>
                    <td><?= h($endereco->complemento) ?></td>
                </tr>
                <tr>
                    <th><?= __('cidade') ?></th>
                    <td><?= h($endereco->cidade) ?></td>
                </tr>
                <tr>
                    <th><?= __('Estado') ?></th>
                    <td><?= h($endereco->estado) ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>
