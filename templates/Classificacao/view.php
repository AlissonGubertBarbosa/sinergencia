<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Classificacao $classificacao
 */
?>
<div class="row">
    <aside class="column-responsive column-20">
        <div class="side-nav">
            <h4 class="heading"><?= __('Ver') ?></h4>
            <?= $this->Html->link(__('Editar'), ['action' => 'edit', $classificacao->id_classificacao], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Excluir'), ['action' => 'delete', $classificacao->id_classificacao], ['confirm' => __('Are you sure you want to delete # {0}?', $classificacao->id_classificacao), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('Listar'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-60">
        <div class="classificacao view content">
            <h3><?= h($classificacao->id_classificacao) ?></h3>
            <table>
                <tr>
                    <th><?= __('Nota') ?></th>
                    <td><?= $this->Number->format($classificacao->nota) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id Feedback') ?></th>
                    <td><?= $this->Number->format($classificacao->id_feedback) ?></td>
                </tr>
                <tr>
                    <th><?= __('Nome Usuario') ?></th>
                    <td><?= $this->Number->format($classificacao->id_usuarioComum) ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>
