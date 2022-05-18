<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Endereco $endereco
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Endereco'), ['action' => 'edit', $endereco->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Endereco'), ['action' => 'delete', $endereco->id], ['confirm' => __('Are you sure you want to delete # {0}?', $endereco->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Enderecos'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Endereco'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="enderecos view content">
            <h3><?= h($endereco->id) ?></h3>
            <table>
                <tr>
                    <th><?= __('Logradouro') ?></th>
                    <td><?= h($endereco->logradouro) ?></td>
                </tr>
                <tr>
                    <th><?= __('Numero') ?></th>
                    <td><?= h($endereco->numero) ?></td>
                </tr>
                <tr>
                    <th><?= __('Bairro') ?></th>
                    <td><?= h($endereco->bairro) ?></td>
                </tr>
                <tr>
                    <th><?= __('Complemento') ?></th>
                    <td><?= h($endereco->complemento) ?></td>
                </tr>
                <tr>
                    <th><?= __('Cidade') ?></th>
                    <td><?= h($endereco->cidade) ?></td>
                </tr>
                <tr>
                    <th><?= __('Estado') ?></th>
                    <td><?= h($endereco->estado) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($endereco->id) ?></td>
                </tr>
            </table>
            <div class="related">
                <h4><?= __('Related Ocorrencia') ?></h4>
                <?php if (!empty($endereco->ocorrencia)) : ?>
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
                        <?php foreach ($endereco->ocorrencia as $ocorrencia) : ?>
                        <tr>
                            <td><?= h($ocorrencia->id) ?></td>
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
            <div class="related">
                <h4><?= __('Related Users') ?></h4>
                <?php if (!empty($endereco->users)) : ?>
                <div class="table-responsive">
                    <table>
                        <tr>
                            <th><?= __('Id') ?></th>
                            <th><?= __('Nome') ?></th>
                            <th><?= __('Username') ?></th>
                            <th><?= __('Password') ?></th>
                            <th><?= __('Telefone') ?></th>
                            <th><?= __('Email') ?></th>
                            <th><?= __('Roles Id') ?></th>
                            <th><?= __('Created') ?></th>
                            <th><?= __('Modified') ?></th>
                            <th><?= __('Endereco Id') ?></th>
                            <th class="actions"><?= __('Actions') ?></th>
                        </tr>
                        <?php foreach ($endereco->users as $users) : ?>
                        <tr>
                            <td><?= h($users->id) ?></td>
                            <td><?= h($users->nome) ?></td>
                            <td><?= h($users->username) ?></td>
                            <td><?= h($users->password) ?></td>
                            <td><?= h($users->telefone) ?></td>
                            <td><?= h($users->email) ?></td>
                            <td><?= h($users->roles_id) ?></td>
                            <td><?= h($users->created) ?></td>
                            <td><?= h($users->modified) ?></td>
                            <td><?= h($users->endereco_id) ?></td>
                            <td class="actions">
                                <?= $this->Html->link(__('View'), ['controller' => 'Users', 'action' => 'view', $users->id]) ?>
                                <?= $this->Html->link(__('Edit'), ['controller' => 'Users', 'action' => 'edit', $users->id]) ?>
                                <?= $this->Form->postLink(__('Delete'), ['controller' => 'Users', 'action' => 'delete', $users->id], ['confirm' => __('Are you sure you want to delete # {0}?', $users->id)]) ?>
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
