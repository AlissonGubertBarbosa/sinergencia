<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Usuariocomum $usuariocomum
 */
?>
<div class="row">
    <aside class="column-responsive column-20">
        <div class="side-nav">
            <h4 class="heading"><?= __('Adicionar') ?></h4>
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
