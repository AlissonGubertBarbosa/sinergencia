<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Ocorrencia Entity
 *
 * @property int $id
 * @property string $descricao
 * @property string $status
 * @property \Cake\I18n\FrozenTime|null $data_Criacao
 * @property int $usuariocomum_id
 * @property int $endereco_id
 *
 * @property \App\Model\Entity\Usuariocomum $usuariocomum
 * @property \App\Model\Entity\Endereco $endereco
 * @property \App\Model\Entity\Feedback[] $feedback
 */
class Ocorrencia extends Entity
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
        'descricao' => true,
        'status' => true,
        'data_Criacao' => true,
        'usuariocomum_id' => true,
        'endereco_id' => true,
        'usuariocomum' => true,
        'endereco' => true,
        'feedback' => true,
    ];
}
