<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Ocorrencia $ocorrencia
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Ocorrencia'), ['action' => 'edit', $ocorrencia->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Ocorrencia'), ['action' => 'delete', $ocorrencia->id], ['confirm' => __('Are you sure you want to delete # {0}?', $ocorrencia->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Ocorrencias'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Ocorrencia'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="ocorrencias view content">
            <h3><?= h($ocorrencia->id) ?></h3>
            <table>
                <tr>
                    <th><?= __('Descricao') ?></th>
                    <td><?= h($ocorrencia->descricao) ?></td>
                </tr>
                <tr>
                    <th><?= __('Status') ?></th>
                    <td><?= h($ocorrencia->status) ?></td>
                </tr>
                <tr>
                    <th><?= __('Usuariocomum') ?></th>
                    <td><?= $ocorrencia->has('usuariocomum') ? $this->Html->link($ocorrencia->usuariocomum->id, ['controller' => 'Usuariocomum', 'action' => 'view', $ocorrencia->usuariocomum->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Endereco') ?></th>
                    <td><?= $ocorrencia->has('endereco') ? $this->Html->link($ocorrencia->endereco->id, ['controller' => 'Enderecos', 'action' => 'view', $ocorrencia->endereco->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($ocorrencia->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Data Criacao') ?></th>
                    <td><?= h($ocorrencia->data_Criacao) ?></td>
                </tr>
            </table>
            <div class="related">
                <h4><?= __('Related Feedback') ?></h4>
                <?php if (!empty($ocorrencia->feedback)) : ?>
                <div class="table-responsive">
                    <table>
                        <tr>
                            <th><?= __('Id') ?></th>
                            <th><?= __('Devolutiva') ?></th>
                            <th><?= __('Ocorrencia Id') ?></th>
                            <th><?= __('Usuariocomum Id') ?></th>
                            <th><?= __('Instituicao Id') ?></th>
                            <th class="actions"><?= __('Actions') ?></th>
                        </tr>
                        <?php foreach ($ocorrencia->feedback as $feedback) : ?>
                        <tr>
                            <td><?= h($feedback->id) ?></td>
                            <td><?= h($feedback->devolutiva) ?></td>
                            <td><?= h($feedback->ocorrencia_id) ?></td>
                            <td><?= h($feedback->usuariocomum_id) ?></td>
                            <td><?= h($feedback->instituicao_id) ?></td>
                            <td class="actions">
                                <?= $this->Html->link(__('View'), ['controller' => 'Feedback', 'action' => 'view', $feedback->id_feedback]) ?>
                                <?= $this->Html->link(__('Edit'), ['controller' => 'Feedback', 'action' => 'edit', $feedback->id_feedback]) ?>
                                <?= $this->Form->postLink(__('Delete'), ['controller' => 'Feedback', 'action' => 'delete', $feedback->id_feedback], ['confirm' => __('Are you sure you want to delete # {0}?', $feedback->id_feedback)]) ?>
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
