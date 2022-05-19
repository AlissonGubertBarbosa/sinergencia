<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Feedback Entity
 *
 * @property int $id
 * @property string $devolutiva
 * @property int $ocorrencia_id
 * @property int $usuariocomum_id
 * @property int $users_id
 *
 * @property \App\Model\Entity\Ocorrencia $ocorrencia
 * @property \App\Model\Entity\Usuariocomum $usuariocomum
 * @property \App\Model\Entity\Instituicao $instituicao
 * @property \App\Model\Entity\Classificacao[] $classificacao
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
        'ocorrencia_id' => true,
        'usuariocomum_id' => true,
        'users_id' => true,
        'ocorrencia' => true,
        'usuariocomum' => true,
        'instituicao' => true,
        'classificacao' => true,
    ];
}
