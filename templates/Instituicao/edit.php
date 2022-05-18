<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Instituicao $instituicao
 * @var string[]|\Cake\Collection\CollectionInterface $roles
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $instituicao->id_instituicao],
                ['confirm' => __('Are you sure you want to delete # {0}?', $instituicao->id_instituicao), 'class' => 'side-nav-item']
            ) ?>
            <?= $this->Html->link(__('List Instituicao'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="instituicao form content">
            <?= $this->Form->create($instituicao) ?>
            <fieldset>
                <legend><?= __('Edit Instituicao') ?></legend>
                <?php
                    echo $this->Form->control('nome');
                    echo $this->Form->control('username');
                    echo $this->Form->control('password');
                    echo $this->Form->control('telefone');
                    echo $this->Form->control('email');
                    echo $this->Form->control('roles_id', ['options' => $roles]);
                    echo $this->Form->control('endereco_id');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
