<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * UsuarioComum Model
 *
 * @property \App\Model\Table\ClassificacaoTable&\Cake\ORM\Association\HasMany $Classificacao
 * @property \App\Model\Table\FeedbackTable&\Cake\ORM\Association\HasMany $Feedback
 * @property \App\Model\Table\OcorrenciaTable&\Cake\ORM\Association\HasMany $Ocorrencia
 *
 * @method \App\Model\Entity\UsuarioComum newEmptyEntity()
 * @method \App\Model\Entity\UsuarioComum newEntity(array $data, array $options = [])
 * @method \App\Model\Entity\UsuarioComum[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\UsuarioComum get($primaryKey, $options = [])
 * @method \App\Model\Entity\UsuarioComum findOrCreate($search, ?callable $callback = null, $options = [])
 * @method \App\Model\Entity\UsuarioComum patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\UsuarioComum[] patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\UsuarioComum|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\UsuarioComum saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\UsuarioComum[]|\Cake\Datasource\ResultSetInterface|false saveMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\UsuarioComum[]|\Cake\Datasource\ResultSetInterface saveManyOrFail(iterable $entities, $options = [])
 * @method \App\Model\Entity\UsuarioComum[]|\Cake\Datasource\ResultSetInterface|false deleteMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\UsuarioComum[]|\Cake\Datasource\ResultSetInterface deleteManyOrFail(iterable $entities, $options = [])
 */
class UsuarioComumTable extends Table
{
    /**
     * Initialize method
     *
     * @param array $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config): void
    {
        parent::initialize($config);

        $this->setTable('usuario_comum');
        $this->setDisplayField('id_usuarioComum');
        $this->setPrimaryKey('id_usuarioComum');

        $this->hasMany('Classificacao', [
            'foreignKey' => 'usuariocomum_id',
        ]);
        $this->hasMany('Feedback', [
            'foreignKey' => 'usuariocomum_id',
        ]);
        $this->hasMany('Ocorrencia', [
            'foreignKey' => 'usuariocomum_id',
        ]);
    }

    /**
     * Default validation rules.
     *
     * @param \Cake\Validation\Validator $validator Validator instance.
     * @return \Cake\Validation\Validator
     */
    public function validationDefault(Validator $validator): Validator
    {
        $validator
            ->integer('id_usuarioComum')
            ->allowEmptyString('id_usuarioComum', null, 'create');

        $validator
            ->scalar('nome')
            ->maxLength('nome', 120)
            ->allowEmptyString('nome');

        $validator
            ->scalar('telefone')
            ->maxLength('telefone', 30)
            ->allowEmptyString('telefone');

        $validator
            ->scalar('sexo')
            ->maxLength('sexo', 10)
            ->allowEmptyString('sexo');

        return $validator;
    }
}
