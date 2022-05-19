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
            <?= $this->Html->link(__('Edit Feedback'), ['action' => 'edit', $feedback->id_feedback], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Feedback'), ['action' => 'delete', $feedback->id_feedback], ['confirm' => __('Are you sure you want to delete # {0}?', $feedback->id_feedback), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Feedback'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Feedback'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="feedback view content">
            <h3><?= h($feedback->id_feedback) ?></h3>
            <table>
                <tr>
                    <th><?= __('Devolutiva') ?></th>
                    <td><?= h($feedback->devolutiva) ?></td>
                </tr>
                <tr>
                    <th><?= __('Ocorrencia') ?></th>
                    <td><?= $feedback->has('ocorrencia') ? $this->Html->link($feedback->ocorrencia->id, ['controller' => 'Ocorrencias', 'action' => 'view', $feedback->ocorrencia->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Usuariocomum') ?></th>
                    <td><?= $feedback->has('usuariocomum') ? $this->Html->link($feedback->usuariocomum->id, ['controller' => 'Usuariocomums', 'action' => 'view', $feedback->usuariocomum->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($feedback->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Users Id') ?></th>
                    <td><?= $this->Number->format($feedback->users_id) ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>
