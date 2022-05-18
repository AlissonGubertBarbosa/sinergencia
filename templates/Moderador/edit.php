<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Moderador $moderador
 * @var string[]|\Cake\Collection\CollectionInterface $roles
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $moderador->id_moderador],
                ['confirm' => __('Are you sure you want to delete # {0}?', $moderador->id_moderador), 'class' => 'side-nav-item']
            ) ?>
            <?= $this->Html->link(__('List Moderador'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="moderador form content">
            <?= $this->Form->create($moderador) ?>
            <fieldset>
                <legend><?= __('Edit Moderador') ?></legend>
                <?php
                    echo $this->Form->control('nome');
                    echo $this->Form->control('username');
                    echo $this->Form->control('password');
                    echo $this->Form->control('telefone');
                    echo $this->Form->control('sexo');
                    echo $this->Form->control('roles_id', ['options' => $roles]);
                    echo $this->Form->control('id_endereco', ['options' => $endereco]);
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
