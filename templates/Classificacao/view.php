<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Classificacao $classificacao
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Classificacao'), ['action' => 'edit', $classificacao->id_classificacao], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Classificacao'), ['action' => 'delete', $classificacao->id_classificacao], ['confirm' => __('Are you sure you want to delete # {0}?', $classificacao->id_classificacao), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Classificacao'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Classificacao'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="classificacao view content">
            <h3><?= h($classificacao->id_classificacao) ?></h3>
            <table>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($classificacao->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Nota') ?></th>
                    <td><?= $this->Number->format($classificacao->nota) ?></td>
                </tr>
                <tr>
                    <th><?= __('Feedback Id') ?></th>
                    <td><?= $this->Number->format($classificacao->feedback_id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Usuariocomum Id') ?></th>
                    <td><?= $this->Number->format($classificacao->usuariocomum_id) ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>
