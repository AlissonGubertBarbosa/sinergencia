<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Classificaco $classificaco
 * @var \Cake\Collection\CollectionInterface|string[] $feedback
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('List Classificacoes'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="classificacoes form content">
            <?= $this->Form->create($classificaco) ?>
            <fieldset>
                <legend><?= __('Add Classificaco') ?></legend>
                <?php
                    echo $this->Form->control('nota');
                    echo $this->Form->control('feedback_id', ['options' => $feedback]);
                    echo $this->Form->control('usuariocomum_id');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
