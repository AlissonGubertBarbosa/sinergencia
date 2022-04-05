<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Ocorrencium $ocorrencium
 */
?>
<div class="row">
    <aside class="column-responsive column-20">
        <div class="side-nav">
            <h4 class="heading"><?= __('Editar') ?></h4>
            <?= $this->Form->postLink(
                __('Excluir'),
                ['action' => 'delete', $ocorrencium->id_ocorrencia],
                ['confirm' => __('Are you sure you want to delete # {0}?', $ocorrencium->id_ocorrencia), 'class' => 'side-nav-item']
            ) ?>
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
                    echo $this->Form->control('data Criacao', ['empty' => true]);
                    echo $this->Form->control('Nome Usuario');
                    echo $this->Form->control('Endereco');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Enviar')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
