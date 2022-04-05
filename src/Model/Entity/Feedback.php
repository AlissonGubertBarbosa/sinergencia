<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Feedback Entity
 *
 * @property int $id_feedback
 * @property string $devolutiva
 * @property int $id_ocorrencia
 * @property int $id_usuarioComum
 * @property int $id_instituicao
 */
class Feedback extends Entity
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
        'devolutiva' => true,
        'id_ocorrencia' => true,
        'id_usuarioComum' => true,
        'id_instituicao' => true,
    ];
}
