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
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($feedback->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Ocorrencia Id') ?></th>
                    <td><?= $this->Number->format($feedback->ocorrencia_id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Usuariocomum Id') ?></th>
                    <td><?= $this->Number->format($feedback->usuariocomum_id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Instituicao Id') ?></th>
                    <td><?= $this->Number->format($feedback->instituicao_id) ?></td>
                </tr>
            </table>
            <div class="related">
                <h4><?= __('Related Classificacao') ?></h4>
                <?php if (!empty($feedback->classificacao)) : ?>
                <div class="table-responsive">
                    <table>
                        <tr>
                            <th><?= __('Id') ?></th>
                            <th><?= __('Nota') ?></th>
                            <th><?= __('Feedback Id') ?></th>
                            <th><?= __('Usuariocomum Id') ?></th>
                            <th class="actions"><?= __('Actions') ?></th>
                        </tr>
                        <?php foreach ($feedback->classificacao as $classificacao) : ?>
                        <tr>
                            <td><?= h($classificacao->id) ?></td>
                            <td><?= h($classificacao->nota) ?></td>
                            <td><?= h($classificacao->feedback_id) ?></td>
                            <td><?= h($classificacao->usuariocomum_id) ?></td>
                            <td class="actions">
                                <?= $this->Html->link(__('View'), ['controller' => 'Classificacao', 'action' => 'view', $classificacao->id_classificacao]) ?>
                                <?= $this->Html->link(__('Edit'), ['controller' => 'Classificacao', 'action' => 'edit', $classificacao->id_classificacao]) ?>
                                <?= $this->Form->postLink(__('Delete'), ['controller' => 'Classificacao', 'action' => 'delete', $classificacao->id_classificacao], ['confirm' => __('Are you sure you want to delete # {0}?', $classificacao->id_classificacao)]) ?>
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
