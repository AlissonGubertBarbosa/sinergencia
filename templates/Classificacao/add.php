<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Classificacao $classificacao
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('List Classificacao'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="classificacao form content">
            <?= $this->Form->create($classificacao) ?>
            <fieldset>
                <legend><?= __('Add Classificacao') ?></legend>
                <?php
                    echo $this->Form->control('id');
                    echo $this->Form->control('nota');
                    echo $this->Form->control('feedback_id');
                    echo $this->Form->control('usuariocomum_id');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
