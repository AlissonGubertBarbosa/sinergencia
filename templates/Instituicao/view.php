<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Instituicao $instituicao
 */
?>
<div class="row">
    <aside class="column-responsive column-20">
        <div class="side-nav">
            <h4 class="heading"><?= __('Ver') ?></h4>
            <?= $this->Html->link(__('Editar'), ['action' => 'edit', $instituicao->id_instituicao], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Excluir'), ['action' => 'delete', $instituicao->id_instituicao], ['confirm' => __('Are you sure you want to delete # {0}?', $instituicao->id_instituicao), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('Listar'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('Novo cadastro'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-60">
        <div class="instituicao view content">
            <h3><?= h($instituicao->nomeInstituição) ?></h3>
            <table>
                <tr>
                    <th><?= __('Nome Usuario') ?></th>
                    <td><?= h($instituicao->nomeUsuario) ?></td>
                </tr>
                <tr>
                    <th><?= __('Senha') ?></th>
                    <td><?= h($instituicao->senha) ?></td>
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
                    <th><?= __('Identificador') ?></th>
                    <td><?= $this->Number->format($instituicao->id_instituicao) ?></td>
                </tr>
                <tr>
                    <th><?= __('Endereco') ?></th>
                    <td><?= $this->Number->format($instituicao->id_endereco) ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>
