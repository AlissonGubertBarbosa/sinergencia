<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * UsuarioComum Entity
 *
 * @property int $id_usuarioComum
 * @property string|null $nome
 * @property string|null $telefone
 * @property string|null $sexo
 *
 * @property \App\Model\Entity\Classificacao[] $classificacao
 * @property \App\Model\Entity\Feedback[] $feedback
 * @property \App\Model\Entity\Ocorrencium[] $ocorrencia
 */
class UsuarioComum extends Entity
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
        'classificacao' => true,
        'feedback' => true,
        'ocorrencia' => true,
    ];
}
