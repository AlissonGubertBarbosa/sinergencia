<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Endereco Entity
 *
 * @property int $id_endereco
 * @property string $logradouro
 * @property int|null $numero
 * @property string $bairro
 * @property string $complemento
 * @property string $cidade
 * @property string $estado
 */
class Endereco extends Entity
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
        'logradouro' => true,
        'numero' => true,
        'bairro' => true,
        'complemento' => true,
        'cidade' => true,
        'estado' => true,
    ];
}
