<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Usuariocomum Model
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
class UsuariocomumTable extends Table
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

        $this->setTable('usuariocomum');
        $this->setDisplayField('id_usuarioComum');
        $this->setPrimaryKey('id_usuarioComum');
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
            ->scalar('nomeUsuario')
            ->maxLength('nomeUsuario', 120)
            ->allowEmptyString('nomeUsuario');

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
