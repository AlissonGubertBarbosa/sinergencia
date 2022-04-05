<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Moderador Model
 *
 * @method \App\Model\Entity\Moderador newEmptyEntity()
 * @method \App\Model\Entity\Moderador newEntity(array $data, array $options = [])
 * @method \App\Model\Entity\Moderador[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Moderador get($primaryKey, $options = [])
 * @method \App\Model\Entity\Moderador findOrCreate($search, ?callable $callback = null, $options = [])
 * @method \App\Model\Entity\Moderador patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Moderador[] patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\Moderador|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Moderador saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Moderador[]|\Cake\Datasource\ResultSetInterface|false saveMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Moderador[]|\Cake\Datasource\ResultSetInterface saveManyOrFail(iterable $entities, $options = [])
 * @method \App\Model\Entity\Moderador[]|\Cake\Datasource\ResultSetInterface|false deleteMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Moderador[]|\Cake\Datasource\ResultSetInterface deleteManyOrFail(iterable $entities, $options = [])
 */
class ModeradorTable extends Table
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

        $this->setTable('moderador');
        $this->setDisplayField('id_moderador');
        $this->setPrimaryKey('id_moderador');
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
            ->integer('id_moderador')
            ->allowEmptyString('id_moderador', null, 'create');

        $validator
            ->scalar('nomeModerador')
            ->maxLength('nomeModerador', 120)
            ->allowEmptyString('nomeModerador');

        $validator
            ->scalar('nomeUsuario')
            ->maxLength('nomeUsuario', 80)
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
            ->scalar('sexo')
            ->maxLength('sexo', 11)
            ->allowEmptyString('sexo');

        $validator
            ->integer('id_endereco')
            ->allowEmptyString('id_endereco');

        return $validator;
    }
}
