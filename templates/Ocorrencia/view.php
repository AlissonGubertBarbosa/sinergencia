<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Ocorrencium $ocorrencium
 */
?>
<div class="row">
    <aside class="column-responsive column-20">
        <div class="side-nav">
            <h4 class="heading"><?= __('Ver') ?></h4>
            <?= $this->Html->link(__('Editar'), ['action' => 'edit', $ocorrencium->id_ocorrencia], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Excluir'), ['action' => 'delete', $ocorrencium->id_ocorrencia], ['confirm' => __('Are you sure you want to delete # {0}?', $ocorrencium->id_ocorrencia), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('Listar'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('Nova ocorrência'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-60">
        <div class="ocorrencia view content">
            <h3><?= h($ocorrencium->id_ocorrencia) ?></h3>
            <table>
                <tr>
                    <th><?= __('Estado') ?></th>
                    <td><?= h($ocorrencium->status) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id Ocorrencia') ?></th>
                    <td><?= $this->Number->format($ocorrencium->id_ocorrencia) ?></td>
                </tr>
                <tr>
                    <th><?= __('Nome Usuario') ?></th>
                    <td><?= $this->Number->format($ocorrencium->id_usuarioComum) ?></td>
                </tr>
                <tr>
                    <th><?= __('Endereço') ?></th>
                    <td><?= $this->Number->format($ocorrencium->id_enderecoOcorrencia) ?></td>
                </tr>
                <tr>
                    <th><?= __('Data Criacao') ?></th>
                    <td><?= h($ocorrencium->data_Criacao) ?></td>
                </tr>
            </table>
            <div class="text">
                <strong><?= __('Descricao') ?></strong>
                <blockquote>
                    <?= $this->Text->autoParagraph(h($ocorrencium->descricao)); ?>
                </blockquote>
            </div>
        </div>
    </div>
</div>
