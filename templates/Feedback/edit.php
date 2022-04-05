<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Feedback $feedback
 */
?>
<div class="row">
    <aside class="column-responsive column-20">
        <div class="side-nav">
            <h4 class="heading"><?= __('Editar') ?></h4>
            <?= $this->Form->postLink(
                __('Excluir'),
                ['action' => 'delete', $feedback->id_feedback],
                ['confirm' => __('Are you sure you want to delete # {0}?', $feedback->id_feedback), 'class' => 'side-nav-item']
            ) ?>
            <?= $this->Html->link(__('Listar'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-60">
        <div class="feedback form content">
            <?= $this->Form->create($feedback) ?>
            <fieldset>
                <?php
                    echo $this->Form->control('devolutiva');
                    echo $this->Form->control('Numero ocorrencia');
                    echo $this->Form->control('nome usuarioComum');
                    echo $this->Form->control('nome instituicao');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Enviar')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
