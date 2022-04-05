<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Moderador $moderador
 */
?>
<div class="row">
    <aside class="column-responsive column-20">
        <div class="side-nav">
            <h4 class="heading"><?= __('Editar') ?></h4>
            <?= $this->Form->postLink(
                __('Excluir'),
                ['action' => 'delete', $moderador->id_moderador],
                ['confirm' => __('Are you sure you want to delete # {0}?', $moderador->id_moderador), 'class' => 'side-nav-item']
            ) ?>
            <?= $this->Html->link(__('Listar'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-60">
        <div class="moderador form content">
            <?= $this->Form->create($moderador) ?>
            <fieldset>
                <?php
                    echo $this->Form->control('nomeModerador');
                    echo $this->Form->control('nomeUsuario');
                    echo $this->Form->control('senha');
                    echo $this->Form->control('telefone');
                    echo $this->Form->control('sexo');
                    echo $this->Form->control('id_endereco');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Enviar')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
