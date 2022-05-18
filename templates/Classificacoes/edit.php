<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Classificaco $classificaco
 * @var string[]|\Cake\Collection\CollectionInterface $feedback
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $classificaco->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $classificaco->id), 'class' => 'side-nav-item']
            ) ?>
            <?= $this->Html->link(__('List Classificacoes'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="classificacoes form content">
            <?= $this->Form->create($classificaco) ?>
            <fieldset>
                <legend><?= __('Edit Classificaco') ?></legend>
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
