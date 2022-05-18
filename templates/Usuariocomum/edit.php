<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\UsuarioComum $usuarioComum
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $usuarioComum->id_usuarioComum],
                ['confirm' => __('Are you sure you want to delete # {0}?', $usuarioComum->id_usuarioComum), 'class' => 'side-nav-item']
            ) ?>
            <?= $this->Html->link(__('List Usuario Comum'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="usuarioComum form content">
            <?= $this->Form->create($usuarioComum) ?>
            <fieldset>
                <legend><?= __('Edit Usuario Comum') ?></legend>
                <?php
                    echo $this->Form->control('nome');
                    echo $this->Form->control('telefone');
                    echo $this->Form->control('sexo');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
