<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Instituicao Model
 *
 * @method \App\Model\Entity\Instituicao newEmptyEntity()
 * @method \App\Model\Entity\Instituicao newEntity(array $data, array $options = [])
 * @method \App\Model\Entity\Instituicao[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Instituicao get($primaryKey, $options = [])
 * @method \App\Model\Entity\Instituicao findOrCreate($search, ?callable $callback = null, $options = [])
 * @method \App\Model\Entity\Instituicao patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Instituicao[] patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\Instituicao|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Instituicao saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Instituicao[]|\Cake\Datasource\ResultSetInterface|false saveMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Instituicao[]|\Cake\Datasource\ResultSetInterface saveManyOrFail(iterable $entities, $options = [])
 * @method \App\Model\Entity\Instituicao[]|\Cake\Datasource\ResultSetInterface|false deleteMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Instituicao[]|\Cake\Datasource\ResultSetInterface deleteManyOrFail(iterable $entities, $options = [])
 */
class InstituicaoTable extends Table
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

        $this->setTable('instituicao');
        $this->setDisplayField('id_instituicao');
        $this->setPrimaryKey('id_instituicao');
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
            ->integer('id_instituicao')
            ->allowEmptyString('id_instituicao', null, 'create');

        $validator
            ->scalar('nomeInstituição')
            ->maxLength('nomeInstituição', 120)
            ->allowEmptyString('nomeInstituição');

        $validator
            ->scalar('nomeUsuario')
            ->maxLength('nomeUsuario', 100)
            ->allowEmptyString('nomeUsuario');

        $validator
            ->scalar('senha')
            ->maxLength('senha', 50)
            ->allowEmptyString('senha');

        $validator
            ->scalar('telefone')
            ->maxLength('telefone', 30)
            ->allowEmptyString('telefone');

        $validator
            ->email('email')
            ->allowEmptyString('email');

        $validator
            ->integer('id_endereco')
            ->allowEmptyString('id_endereco');

        return $validator;
    }
}
