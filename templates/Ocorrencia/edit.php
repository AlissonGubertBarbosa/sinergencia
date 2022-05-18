<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Ocorrencia $ocorrencia
 * @var string[]|\Cake\Collection\CollectionInterface $usuariocomum
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $ocorrencia->id_ocorrencia],
                ['confirm' => __('Are you sure you want to delete # {0}?', $ocorrencia->id_ocorrencia), 'class' => 'side-nav-item']
            ) ?>
            <?= $this->Html->link(__('List Ocorrencia'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="ocorrencia form content">
            <?= $this->Form->create($ocorrencia) ?>
            <fieldset>
                <legend><?= __('Edit Ocorrencia') ?></legend>
                <?php
                    echo $this->Form->control('descricao');
                    echo $this->Form->control('status');
                    echo $this->Form->control('data_Criacao', ['empty' => true]);
                    echo $this->Form->control('usuariocomum_id', ['options' => $usuariocomum]);
                    echo $this->Form->control('endereco_id');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
