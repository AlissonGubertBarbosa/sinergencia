<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Moderador $moderador
 */
?>
<div class="row">
    <aside class="column-responsive column-20">
        <div class="side-nav">
            <h4 class="heading"><?= __('Ver') ?></h4>
            <?= $this->Html->link(__('Editar'), ['action' => 'edit', $moderador->id_moderador], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Excluir'), ['action' => 'delete', $moderador->id_moderador], ['confirm' => __('Are you sure you want to delete # {0}?', $moderador->id_moderador), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('Listar'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('Nova Moderador'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-60">
        <div class="moderador view content">
            <h3><?= h($moderador->nomeModerador) ?></h3>
            <table>
                <tr>
                    <th><?= __('Nome Usuario') ?></th>
                    <td><?= h($moderador->nomeUsuario) ?></td>
                </tr>
                <tr>
                    <th><?= __('Senha') ?></th>
                    <td><?= h($moderador->senha) ?></td>
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
                    <th><?= __('Identificador') ?></th>
                    <td><?= $this->Number->format($moderador->id_moderador) ?></td>
                </tr>
                <tr>
                    <th><?= __('Endereco') ?></th>
                    <td><?= $this->Number->format($moderador->id_endereco) ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>
