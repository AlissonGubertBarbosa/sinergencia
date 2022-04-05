<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Ocorrencium $ocorrencium
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
        <div class="ocorrencia form content">
            <?= $this->Form->create($ocorrencium) ?>
            <fieldset>
                <?php
                    echo $this->Form->control('descricao');
                    echo $this->Form->control('Estado');
                    echo $this->Form->control('data_Criacao', ['empty' => false]);
                    echo $this->Form->control('id_usuarioComum');
                    echo $this->Form->control('id_enderecoOcorrencia');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Enviar')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
