<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Usuariocomum $usuariocomum
 */
?>
<div class="row">
    <aside class="column-responsive column-20">
        <div class="side-nav">
            <h4 class="heading"><?= __('Editar') ?></h4>
            <?= $this->Form->postLink(
                __('Excluir'),
                ['action' => 'delete', $usuariocomum->id_usuarioComum],
                ['confirm' => __('Are you sure you want to delete # {0}?', $usuariocomum->id_usuarioComum), 'class' => 'side-nav-item']
            ) ?>
            <?= $this->Html->link(__('Listar'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-60">
        <div class="usuariocomum form content">
            <?= $this->Form->create($usuariocomum) ?>
            <fieldset>
                <legend><?= __('') ?></legend>
                <?php
                    echo $this->Form->control('nomeUsuario');
                    echo $this->Form->control('telefone');
                    echo $this->Form->control('sexo');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Enviar')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
