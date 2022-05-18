<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Moderador $moderador
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Moderador'), ['action' => 'edit', $moderador->id_moderador], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Moderador'), ['action' => 'delete', $moderador->id_moderador], ['confirm' => __('Are you sure you want to delete # {0}?', $moderador->id_moderador), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Moderador'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Moderador'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="moderador view content">
            <h3><?= h($moderador->id_moderador) ?></h3>
            <table>
                <tr>
                    <th><?= __('Nome') ?></th>
                    <td><?= h($moderador->nome) ?></td>
                </tr>
                <tr>
                    <th><?= __('Username') ?></th>
                    <td><?= h($moderador->username) ?></td>
                </tr>
                <tr>
                    <th><?= __('Telefone') ?></th>
                    <td><?= h($moderador->telefone) ?></td>
                </tr>
                <tr>
                    <th><?= __('Sexo') ?></th>
                    <td><?= h($moderador->sexo) ?></td>
                </tr>
                <tr>
                    <th><?= __('Role') ?></th>
                    <td><?= $moderador->has('role') ? $this->Html->link($moderador->role->role, ['controller' => 'Roles', 'action' => 'view', $moderador->role->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Id Moderador') ?></th>
                    <td><?= $this->Number->format($moderador->id_moderador) ?></td>
                </tr>
                <tr>
                    <th><?= __('Endereco') ?></th>
                    <td><?= $moderador->has('endereco') ? $this->html->linl($moderador->endereco->logradouro, ['controller' => 'Endereco', 'action' => 'view', $moderador->endereco->id]) : '' ?></td>
                    <td><?= $moderador->has('endereco') ? $this->html->linl($moderador->endereco->numero, ['controller' => 'Endereco', 'action' => 'view', $moderador->endereco->id]) : '' ?></td>
                    <td><?= $moderador->has('endereco') ? $this->html->linl($moderador->endereco->bairro, ['controller' => 'Endereco', 'action' => 'view', $moderador->endereco->id]) : '' ?></td>
                    <td><?= $moderador->has('endereco') ? $this->html->linl($moderador->endereco->cidade, ['controller' => 'Endereco', 'action' => 'view', $moderador->endereco->id]) : '' ?></td>
                    <td><?= $moderador->has('endereco') ? $this->html->linl($moderador->endereco->estado, ['controller' => 'Endereco', 'action' => 'view', $moderador->endereco->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Created') ?></th>
                    <td><?= h($moderador->created) ?></td>
                </tr>
                <tr>
                    <th><?= __('Modified') ?></th>
                    <td><?= h($moderador->modified) ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>
