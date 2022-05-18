<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Usuariocomums Model
 *
 * @property \App\Model\Table\ClassificacoesTable&\Cake\ORM\Association\HasMany $Classificacoes
 * @property \App\Model\Table\FeedbackTable&\Cake\ORM\Association\HasMany $Feedback
 * @property \App\Model\Table\OcorrenciasTable&\Cake\ORM\Association\HasMany $Ocorrencias
 *
 * @method \App\Model\Entity\Usuariocomum newEmptyEntity()
 * @method \App\Model\Entity\Usuariocomum newEntity(array $data, array $options = [])
 * @method \App\Model\Entity\Usuariocomum[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Usuariocomum get($primaryKey, $options = [])
 * @method \App\Model\Entity\Usuariocomum findOrCreate($search, ?callable $callback = null, $options = [])
 * @method \App\Model\Entity\Usuariocomum patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Usuariocomum[] patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\Usuariocomum|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Usuariocomum saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Usuariocomum[]|\Cake\Datasource\ResultSetInterface|false saveMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Usuariocomum[]|\Cake\Datasource\ResultSetInterface saveManyOrFail(iterable $entities, $options = [])
 * @method \App\Model\Entity\Usuariocomum[]|\Cake\Datasource\ResultSetInterface|false deleteMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Usuariocomum[]|\Cake\Datasource\ResultSetInterface deleteManyOrFail(iterable $entities, $options = [])
 */
class UsuariocomumsTable extends Table
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

        $this->setTable('usuariocomums');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->hasMany('Classificacoes', [
            'foreignKey' => 'usuariocomum_id',
        ]);
        $this->hasMany('Feedback', [
            'foreignKey' => 'usuariocomum_id',
        ]);
        $this->hasMany('Ocorrencias', [
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
            ->integer('id')
            ->allowEmptyString('id', null, 'create');

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

        $validator
            ->email('email')
            ->allowEmptyString('email');

        return $validator;
    }
}
