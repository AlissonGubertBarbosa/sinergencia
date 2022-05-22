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
                    <th><?= __('User') ?></th>
                    <td><?= $feedback->has('user') ? $this->Html->link($feedback->user->id, ['controller' => 'Users', 'action' => 'view', $feedback->user->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($feedback->id) ?></td>
                </tr>
            </table>
            <div class="related">
                <h4><?= __('Related Classificacoes') ?></h4>
                <?php if (!empty($feedback->classificacoes)) : ?>
                <div class="table-responsive">
                    <table>
                        <tr>
                            <th><?= __('Id') ?></th>
                            <th><?= __('Nota') ?></th>
                            <th><?= __('Feedback Id') ?></th>
                            <th><?= __('Usuariocomum Id') ?></th>
                            <th class="actions"><?= __('Actions') ?></th>
                        </tr>
                        <?php foreach ($feedback->classificacoes as $classificacoes) : ?>
                        <tr>
                            <td><?= h($classificacoes->id) ?></td>
                            <td><?= h($classificacoes->nota) ?></td>
                            <td><?= h($classificacoes->feedback_id) ?></td>
                            <td><?= h($classificacoes->usuariocomum_id) ?></td>
                            <td class="actions">
                                <?= $this->Html->link(__('View'), ['controller' => 'Classificacoes', 'action' => 'view', $classificacoes->id]) ?>
                                <?= $this->Html->link(__('Edit'), ['controller' => 'Classificacoes', 'action' => 'edit', $classificacoes->id]) ?>
                                <?= $this->Form->postLink(__('Delete'), ['controller' => 'Classificacoes', 'action' => 'delete', $classificacoes->id], ['confirm' => __('Are you sure you want to delete # {0}?', $classificacoes->id)]) ?>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                    </table>
                </div>
                <?php endif; ?>
            </div>
        </div>
    </div>
</div>
