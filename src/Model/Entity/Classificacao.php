<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Classificaco Entity
 *
 * @property int $id
 * @property int $nota
 * @property int $feedback_id
 * @property int $usuariocomum_id
 *
 * @property \App\Model\Entity\Feedback $feedback
 * @property \App\Model\Entity\Usuariocomum $usuariocomum
 */
class Classificaco extends Entity
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
        'feedback_id' => true,
        'usuariocomum_id' => true,
        'feedback' => true,
        'usuariocomum' => true,
    ];
}
