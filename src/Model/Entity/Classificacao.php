<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Classificacao Entity
 *
 * @property int $id_classificacao
 * @property int $nota
 * @property int $id_feedback
 * @property int $id_usuarioComum
 */
class Classificacao extends Entity
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
        'nota' => true,
        'id_feedback' => true,
        'id_usuarioComum' => true,
    ];
}
