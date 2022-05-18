<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Endereco $endereco
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('List Enderecos'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="enderecos form content">
            <?= $this->Form->create($endereco) ?>
            <fieldset>
                <legend><?= __('Add Endereco') ?></legend>
                <?php
                    echo $this->Form->control('logradouro');
                    echo $this->Form->control('numero');
                    echo $this->Form->control('bairro');
                    echo $this->Form->control('complemento');
                    echo $this->Form->control('cidade');
                    echo $this->Form->control('estado');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
