<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Classificacao $classificacao
 */
?>
<div class="row">
    <aside class="column-responsive column-20">
        <div class="side-nav">
            <h4 class="heading"><?= __('Adicionar') ?></h4>
            <?= $this->Html->link(__('Listar'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-60">
        <div class="classificacao form content">
            <?= $this->Form->create($classificacao) ?>
            <fieldset>
                <?php
                    echo $this->Form->control('nota');
                    echo $this->Form->control('id_feedback');
                    echo $this->Form->control('Nome usuario');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Enviar')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
