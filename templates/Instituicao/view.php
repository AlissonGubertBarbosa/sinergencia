<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Instituicao $instituicao
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Instituicao'), ['action' => 'edit', $instituicao->id_instituicao], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Instituicao'), ['action' => 'delete', $instituicao->id_instituicao], ['confirm' => __('Are you sure you want to delete # {0}?', $instituicao->id_instituicao), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Instituicao'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Instituicao'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="instituicao view content">
            <h3><?= h($instituicao->id_instituicao) ?></h3>
            <table>
                <tr>
                    <th><?= __('Nome') ?></th>
                    <td><?= h($instituicao->nome) ?></td>
                </tr>
                <tr>
                    <th><?= __('Username') ?></th>
                    <td><?= h($instituicao->username) ?></td>
                </tr>
                <tr>
                    <th><?= __('Telefone') ?></th>
                    <td><?= h($instituicao->telefone) ?></td>
                </tr>
                <tr>
                    <th><?= __('Email') ?></th>
                    <td><?= h($instituicao->email) ?></td>
                </tr>
                <tr>
                    <th><?= __('Role') ?></th>
                    <td><?= $instituicao->has('role') ? $this->Html->link($instituicao->role->role, ['controller' => 'Roles', 'action' => 'view', $instituicao->role->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Id Instituicao') ?></th>
                    <td><?= $this->Number->format($instituicao->id_instituicao) ?></td>
                </tr>
                <tr>
                    <th><?= __('Endereco Id') ?></th>
                    <td><?= $this->Number->format($instituicao->endereco_id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Created') ?></th>
                    <td><?= h($instituicao->created) ?></td>
                </tr>
                <tr>
                    <th><?= __('Modified') ?></th>
                    <td><?= h($instituicao->modified) ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>
