<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Feedback $feedback
 */
?>
<div class="row">
    <aside class="column-responsive column-20">
        <div class="side-nav">
            <h4 class="heading"><?= __('Ver') ?></h4>
            <?= $this->Html->link(__('Editar'), ['action' => 'edit', $feedback->id_feedback], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Excluir'), ['action' => 'delete', $feedback->id_feedback], ['confirm' => __('Are you sure you want to delete # {0}?', $feedback->id_feedback), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('Listar'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('Novo feedback'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-60">
        <div class="feedback view content">
            <h3><?= h($feedback->id_feedback) ?></h3>
            <table>
                <tr>
                    <th><?= __('Id Ocorrencia') ?></th>
                    <td><?= $this->Number->format($feedback->id_ocorrencia) ?></td>
                </tr>
                <tr>
                    <th><?= __('Nome Usuario') ?></th>
                    <td><?= $this->Number->format($feedback->id_usuarioComum) ?></td>
                </tr>
                <tr>
                    <th><?= __('Nome Instituicao') ?></th>
                    <td><?= $this->Number->format($feedback->id_instituicao) ?></td>
                </tr>
            </table>
            <div class="text">
                <strong><?= __('Devolutiva') ?></strong>
                <blockquote>
                    <?= $this->Text->autoParagraph(h($feedback->devolutiva)); ?>
                </blockquote>
            </div>
        </div>
    </div>
</div>
