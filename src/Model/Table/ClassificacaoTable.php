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

        $this->belongsTo('Feedback', [
            'foreignKey' => 'feedback_id',
            'joinType' => 'INNER',
        ]);
        $this->belongsTo('Usuariocomums', [
            'foreignKey' => 'usuariocomum_id',
            'joinType' => 'INNER',
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
            ->integer('nota')
            ->requirePresence('nota', 'create')
            ->notEmptyString('nota');

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
        $rules->add($rules->existsIn('feedback_id', 'Feedback'), ['errorField' => 'feedback_id']);
        $rules->add($rules->existsIn('usuariocomum_id', 'Usuariocomums'), ['errorField' => 'usuariocomum_id']);

        return $rules;
    }
}
