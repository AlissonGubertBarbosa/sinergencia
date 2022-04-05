<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Instituicao Entity
 *
 * @property int $id_instituicao
 * @property string|null $nomeInstituição
 * @property string|null $nomeUsuario
 * @property string|null $senha
 * @property string|null $telefone
 * @property string|null $email
 * @property int|null $id_endereco
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
        'nomeInstituição' => true,
        'nomeUsuario' => true,
        'senha' => true,
        'telefone' => true,
        'email' => true,
        'id_endereco' => true,
    ];
}
