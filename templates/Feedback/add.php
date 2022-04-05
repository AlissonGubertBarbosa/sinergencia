<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Feedback $feedback
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
        <div class="feedback form content">
            <?= $this->Form->create($feedback) ?>
            <fieldset>
                <?php
                    echo $this->Form->control('devolutiva');
                    echo $this->Form->control('id_ocorrencia');
                    echo $this->Form->control('id_usuarioComum');
                    echo $this->Form->control('id_instituicao');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Enviar')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
