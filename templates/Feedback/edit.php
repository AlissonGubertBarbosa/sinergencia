<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Feedback $feedback
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $feedback->id_feedback],
                ['confirm' => __('Are you sure you want to delete # {0}?', $feedback->id_feedback), 'class' => 'side-nav-item']
            ) ?>
            <?= $this->Html->link(__('List Feedback'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="feedback form content">
            <?= $this->Form->create($feedback) ?>
            <fieldset>
                <legend><?= __('Edit Feedback') ?></legend>
                <?php
                    echo $this->Form->control('devolutiva');
                    echo $this->Form->control('ocorrencia_id');
                    echo $this->Form->control('usuariocomum_id');
                    echo $this->Form->control('instituicao_id');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
