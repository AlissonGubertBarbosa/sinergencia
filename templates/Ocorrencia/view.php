<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Ocorrencia $ocorrencia
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Ocorrencia'), ['action' => 'edit', $ocorrencia->id_ocorrencia], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Ocorrencia'), ['action' => 'delete', $ocorrencia->id_ocorrencia], ['confirm' => __('Are you sure you want to delete # {0}?', $ocorrencia->id_ocorrencia), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Ocorrencia'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Ocorrencia'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="ocorrencia view content">
            <h3><?= h($ocorrencia->id_ocorrencia) ?></h3>
            <table>
                <tr>
                    <th><?= __('Descricao') ?></th>
                    <td><?= h($ocorrencia->descricao) ?></td>
                </tr>
                <tr>
                    <th><?= __('Status') ?></th>
                    <td><?= h($ocorrencia>status) ?></td>
                </tr>
                <tr>
                    <th><?= __('Usuariocomum') ?></th>
                    <td><?= $ocorrencia->has('usuariocomum') ? $this->Html->link($ocorrencia->usuariocomum->id_usuarioComum, ['controller' => 'Usuariocomum', 'action' => 'view', $ocorrencia->usuariocomum->id_usuarioComum]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Id Ocorrencia') ?></th>
                    <td><?= $this->Number->format($ocorrencia->id_ocorrencia) ?></td>
                </tr>
                <tr>
                    <th><?= __('Endereco Id') ?></th>
                    <td><?= $this->Number->format($ocorrencia->endereco_id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Data Criacao') ?></th>
                    <td><?= h($ocorrencia->data_Criacao) ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>
