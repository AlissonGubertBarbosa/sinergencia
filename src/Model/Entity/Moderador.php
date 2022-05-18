<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Moderador Entity
 *
 * @property int $id_moderador
 * @property string|null $nome
 * @property string|null $username
 * @property string|null $password
 * @property string|null $telefone
 * @property string|null $sexo
 * @property int $roles_id
 * @property \Cake\I18n\FrozenTime $created
 * @property \Cake\I18n\FrozenTime $modified
 * @property int $endereco_id
 *
 * @property \App\Model\Entity\Role $role
 */
class Moderador extends Entity
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
        'sexo' => true,
        'roles_id' => true,
        'created' => true,
        'modified' => true,
        'endereco_id' => true,
        'role' => true,
        'logradouro' => true,
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
