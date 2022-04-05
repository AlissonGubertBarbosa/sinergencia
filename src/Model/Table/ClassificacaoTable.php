<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Classificacao Model
 *
 * @method \App\Model\Entity\Classificacao newEmptyEntity()
 * @method \App\Model\Entity\Classificacao newEntity(array $data, array $options = [])
 * @method \App\Model\Entity\Classificacao[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Classificacao get($primaryKey, $options = [])
 * @method \App\Model\Entity\Classificacao findOrCreate($search, ?callable $callback = null, $options = [])
 * @method \App\Model\Entity\Classificacao patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Classificacao[] patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\Classificacao|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Classificacao saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Classificacao[]|\Cake\Datasource\ResultSetInterface|false saveMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Classificacao[]|\Cake\Datasource\ResultSetInterface saveManyOrFail(iterable $entities, $options = [])
 * @method \App\Model\Entity\Classificacao[]|\Cake\Datasource\ResultSetInterface|false deleteMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Classificacao[]|\Cake\Datasource\ResultSetInterface deleteManyOrFail(iterable $entities, $options = [])
 */
class ClassificacaoTable extends Table
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

        $this->setTable('classificacao');
        $this->setDisplayField('id_classificacao');
        $this->setPrimaryKey('id_classificacao');
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
            ->integer('id_classificacao')
            ->allowEmptyString('id_classificacao', null, 'create');

        $validator
            ->integer('nota')
            ->requirePresence('nota', 'create')
            ->notEmptyString('nota');

        $validator
            ->integer('id_feedback')
            ->requirePresence('id_feedback', 'create')
            ->notEmptyString('id_feedback')
            ->add('id_feedback', 'unique', ['rule' => 'validateUnique', 'provider' => 'table']);

        $validator
            ->integer('id_usuarioComum')
            ->requirePresence('id_usuarioComum', 'create')
            ->notEmptyString('id_usuarioComum')
            ->add('id_usuarioComum', 'unique', ['rule' => 'validateUnique', 'provider' => 'table']);

        return $validator;
    }

    /**
     * Returns a rules checker object that will be used for validating
     * application integrity.
     *
     * @param \Cake\ORM\RulesChecker $rules The rules object to be modified.
     * @return \Cake\ORM\RulesChecker
     */
    public function buildRules(RulesChecker $rules): RulesChecker
    {
        $rules->add($rules->isUnique(['id_feedback']), ['errorField' => 'id_feedback']);
        $rules->add($rules->isUnique(['id_usuarioComum']), ['errorField' => 'id_usuarioComum']);

        return $rules;
    }
}
