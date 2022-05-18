<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Usuariocomum $usuariocomum
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $usuariocomum->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $usuariocomum->id), 'class' => 'side-nav-item']
            ) ?>
            <?= $this->Html->link(__('List Usuariocomums'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="usuariocomums form content">
            <?= $this->Form->create($usuariocomum) ?>
            <fieldset>
                <legend><?= __('Edit Usuariocomum') ?></legend>
                <?php
                    echo $this->Form->control('nome');
                    echo $this->Form->control('telefone');
                    echo $this->Form->control('sexo');
                    echo $this->Form->control('email');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
