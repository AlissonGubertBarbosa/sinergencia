<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\User $user
 * @var \Cake\Collection\CollectionInterface|string[] $roles
 */
?>
<div class="row">
    
    <div class="column-responsive column-80">
        <div class="users form content">
            <?= $this->Form->create() ?>
            <fieldset>
                <legend><?= __('Login') ?></legend>
                <?php
                    echo $this->Form->control('username');
                    echo $this->Form->control('password');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
            <aside class="column">
                <div class="side-nav">
                    <h4 class="heading"><?= __('Actions') ?></h4>
                    <?= $this->Html->link(__('Se cadastrar ao sistema'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
                </div>
            </aside>
        </div>
    </div>
</div>
