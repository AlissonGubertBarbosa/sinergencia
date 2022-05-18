<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\UsuarioComum $usuarioComum
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Usuario Comum'), ['action' => 'edit', $usuarioComum->id_usuarioComum], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Usuario Comum'), ['action' => 'delete', $usuarioComum->id_usuarioComum], ['confirm' => __('Are you sure you want to delete # {0}?', $usuarioComum->id_usuarioComum), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Usuario Comum'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Usuario Comum'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="usuarioComum view content">
            <h3><?= h($usuarioComum->id_usuarioComum) ?></h3>
            <table>
                <tr>
                    <th><?= __('Nome') ?></th>
                    <td><?= h($usuarioComum->nome) ?></td>
                </tr>
                <tr>
                    <th><?= __('Telefone') ?></th>
                    <td><?= h($usuarioComum->telefone) ?></td>
                </tr>
                <tr>
                    <th><?= __('Sexo') ?></th>
                    <td><?= h($usuarioComum->sexo) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id UsuarioComum') ?></th>
                    <td><?= $this->Number->format($usuarioComum->id_usuarioComum) ?></td>
                </tr>
            </table>
            <div class="related">
                <h4><?= __('Related Classificacao') ?></h4>
                <?php if (!empty($usuarioComum->classificacao)) : ?>
                <div class="table-responsive">
                    <table>
                        <tr>
                            <th><?= __('Id') ?></th>
                            <th><?= __('Nota') ?></th>
                            <th><?= __('Feedback Id') ?></th>
                            <th><?= __('Usuariocomum Id') ?></th>
                            <th class="actions"><?= __('Actions') ?></th>
                        </tr>
                        <?php foreach ($usuarioComum->classificacao as $classificacao) : ?>
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
            <div class="related">
                <h4><?= __('Related Feedback') ?></h4>
                <?php if (!empty($usuarioComum->feedback)) : ?>
                <div class="table-responsive">
                    <table>
                        <tr>
                            <th><?= __('Id Feedback') ?></th>
                            <th><?= __('Devolutiva') ?></th>
                            <th><?= __('Ocorrencia Id') ?></th>
                            <th><?= __('Usuariocomum Id') ?></th>
                            <th><?= __('Instituicao Id') ?></th>
                            <th class="actions"><?= __('Actions') ?></th>
                        </tr>
                        <?php foreach ($usuarioComum->feedback as $feedback) : ?>
                        <tr>
                            <td><?= h($feedback->id_feedback) ?></td>
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
                <h4><?= __('Related Ocorrencia') ?></h4>
                <?php if (!empty($usuarioComum->ocorrencia)) : ?>
                <div class="table-responsive">
                    <table>
                        <tr>
                            <th><?= __('Id Ocorrencia') ?></th>
                            <th><?= __('Descricao') ?></th>
                            <th><?= __('Status') ?></th>
                            <th><?= __('Data Criacao') ?></th>
                            <th><?= __('Usuariocomum Id') ?></th>
                            <th><?= __('Endereco Id') ?></th>
                            <th class="actions"><?= __('Actions') ?></th>
                        </tr>
                        <?php foreach ($usuarioComum->ocorrencia as $ocorrencia) : ?>
                        <tr>
                            <td><?= h($ocorrencia->id_ocorrencia) ?></td>
                            <td><?= h($ocorrencia->descricao) ?></td>
                            <td><?= h($ocorrencia->status) ?></td>
                            <td><?= h($ocorrencia->data_Criacao) ?></td>
                            <td><?= h($ocorrencia->usuariocomum_id) ?></td>
                            <td><?= h($ocorrencia->endereco_id) ?></td>
                            <td class="actions">
                                <?= $this->Html->link(__('View'), ['controller' => 'Ocorrencia', 'action' => 'view', $ocorrencia->id_ocorrencia]) ?>
                                <?= $this->Html->link(__('Edit'), ['controller' => 'Ocorrencia', 'action' => 'edit', $ocorrencia->id_ocorrencia]) ?>
                                <?= $this->Form->postLink(__('Delete'), ['controller' => 'Ocorrencia', 'action' => 'delete', $ocorrencia->id_ocorrencia], ['confirm' => __('Are you sure you want to delete # {0}?', $ocorrencia->id_ocorrencia)]) ?>
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
