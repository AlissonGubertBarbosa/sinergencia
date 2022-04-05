<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Usuariocomum $usuariocomum
 */
?>
<div class="row">
    <aside class="column-responsive column-20">
        <div class="side-nav">
            <h4 class="heading"><?= __('Ver') ?></h4>
            <?= $this->Html->link(__('Editar'), ['action' => 'edit', $usuariocomum->id_usuarioComum], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Excluir'), ['action' => 'delete', $usuariocomum->id_usuarioComum], ['confirm' => __('Are you sure you want to delete # {0}?', $usuariocomum->id_usuarioComum), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('Listar'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('Novo cadastro'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-60">
        <div class="usuariocomum view content">
            <h3><?= h($usuariocomum->nomeUsuario) ?></h3>
            <table>
                <tr>
                    <th><?= __('Telefone') ?></th>
                    <td><?= h($usuariocomum->telefone) ?></td>
                </tr>
                <tr>
                    <th><?= __('Sexo') ?></th>
                    <td><?= h($usuariocomum->sexo) ?></td>
                </tr>
                <tr>
                    <th><?= __('Identificador') ?></th>
                    <td><?= $this->Number->format($usuariocomum->id_usuarioComum) ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>
