<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Instituicao Entity
 *
 * @property int $id_instituicao
 * @property string|null $nome
 * @property string|null $username
 * @property string|null $password
 * @property string|null $telefone
 * @property string|null $email
 * @property int $roles_id
 * @property \Cake\I18n\FrozenTime $created
 * @property \Cake\I18n\FrozenTime $modified
 * @property int $endereco_id
 *
 * @property \App\Model\Entity\Role $role
 */
class Instituicao extends Entity
{
    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * Note that when '*' is set to true, this allows all unspecified fields to
     * be mass assigned. For security purposes, it is advised to set '*' to false
     * (or remove it), and explicitly make individual fields accessible as needed.
     *
     * @var array
     */
    protected $_accessible = [
        'nome' => true,
        'username' => true,
        'password' => true,
        'telefone' => true,
        'email' => true,
        'roles_id' => true,
        'created' => true,
        'modified' => true,
        'id_endereco' => true,
        'role' => true,
    ];

    /**
     * Fields that are excluded from JSON versions of the entity.
     *
     * @var array
     */
    protected $_hidden = [
        'password',
    ];
}
