<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Usuariocomum $usuariocomum
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Usuariocomum'), ['action' => 'edit', $usuariocomum->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Usuariocomum'), ['action' => 'delete', $usuariocomum->id], ['confirm' => __('Are you sure you want to delete # {0}?', $usuariocomum->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Usuariocomums'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Usuariocomum'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="usuariocomums view content">
            <h3><?= h($usuariocomum->id) ?></h3>
            <table>
                <tr>
                    <th><?= __('Nome') ?></th>
                    <td><?= h($usuariocomum->nome) ?></td>
                </tr>
                <tr>
                    <th><?= __('Telefone') ?></th>
                    <td><?= h($usuariocomum->telefone) ?></td>
                </tr>
                <tr>
                    <th><?= __('Sexo') ?></th>
                    <td><?= h($usuariocomum->sexo) ?></td>
                </tr>
                <tr>
                    <th><?= __('Email') ?></th>
                    <td><?= h($usuariocomum->email) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($usuariocomum->id) ?></td>
                </tr>
            </table>
            <div class="related">
                <h4><?= __('Related Classificacoes') ?></h4>
                <?php if (!empty($usuariocomum->classificacoes)) : ?>
                <div class="table-responsive">
                    <table>
                        <tr>
                            <th><?= __('Id') ?></th>
                            <th><?= __('Nota') ?></th>
                            <th><?= __('Feedback Id') ?></th>
                            <th><?= __('Usuariocomum Id') ?></th>
                            <th class="actions"><?= __('Actions') ?></th>
                        </tr>
                        <?php foreach ($usuariocomum->classificacoes as $classificacoes) : ?>
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
            <div class="related">
                <h4><?= __('Related Feedback') ?></h4>
                <?php if (!empty($usuariocomum->feedback)) : ?>
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
                        <?php foreach ($usuariocomum->feedback as $feedback) : ?>
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
            <div class="related">
                <h4><?= __('Related Ocorrencias') ?></h4>
                <?php if (!empty($usuariocomum->ocorrencias)) : ?>
                <div class="table-responsive">
                    <table>
                        <tr>
                            <th><?= __('Id') ?></th>
                            <th><?= __('Descricao') ?></th>
                            <th><?= __('Status') ?></th>
                            <th><?= __('Data Criacao') ?></th>
                            <th><?= __('Usuariocomum Id') ?></th>
                            <th><?= __('Endereco Id') ?></th>
                            <th class="actions"><?= __('Actions') ?></th>
                        </tr>
                        <?php foreach ($usuariocomum->ocorrencias as $ocorrencias) : ?>
                        <tr>
                            <td><?= h($ocorrencias->id) ?></td>
                            <td><?= h($ocorrencias->descricao) ?></td>
                            <td><?= h($ocorrencias->status) ?></td>
                            <td><?= h($ocorrencias->data_Criacao) ?></td>
                            <td><?= h($ocorrencias->usuariocomum_id) ?></td>
                            <td><?= h($ocorrencias->endereco_id) ?></td>
                            <td class="actions">
                                <?= $this->Html->link(__('View'), ['controller' => 'Ocorrencias', 'action' => 'view', $ocorrencias->id]) ?>
                                <?= $this->Html->link(__('Edit'), ['controller' => 'Ocorrencias', 'action' => 'edit', $ocorrencias->id]) ?>
                                <?= $this->Form->postLink(__('Delete'), ['controller' => 'Ocorrencias', 'action' => 'delete', $ocorrencias->id], ['confirm' => __('Are you sure you want to delete # {0}?', $ocorrencias->id)]) ?>
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
