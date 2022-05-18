<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Usuariocomum Entity
 *
 * @property int $id
 * @property string|null $nome
 * @property string|null $telefone
 * @property string|null $sexo
 * @property string|null $email
 *
 * @property \App\Model\Entity\Classificaco[] $classificacoes
 * @property \App\Model\Entity\Feedback[] $feedback
 * @property \App\Model\Entity\Ocorrencia[] $ocorrencias
 */
class Usuariocomum extends Entity
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
        'telefone' => true,
        'sexo' => true,
        'email' => true,
        'classificacoes' => true,
        'feedback' => true,
        'ocorrencias' => true,
    ];
}
