<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Classificacoes Model
 *
 * @property \App\Model\Table\FeedbackTable&\Cake\ORM\Association\BelongsTo $Feedback
 * @property \App\Model\Table\UsuariocomumsTable&\Cake\ORM\Association\BelongsTo $Usuariocomums
 *
 * @method \App\Model\Entity\Classificaco newEmptyEntity()
 * @method \App\Model\Entity\Classificaco newEntity(array $data, array $options = [])
 * @method \App\Model\Entity\Classificaco[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Classificaco get($primaryKey, $options = [])
 * @method \App\Model\Entity\Classificaco findOrCreate($search, ?callable $callback = null, $options = [])
 * @method \App\Model\Entity\Classificaco patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Classificaco[] patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\Classificaco|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Classificaco saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Classificaco[]|\Cake\Datasource\ResultSetInterface|false saveMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Classificaco[]|\Cake\Datasource\ResultSetInterface saveManyOrFail(iterable $entities, $options = [])
 * @method \App\Model\Entity\Classificaco[]|\Cake\Datasource\ResultSetInterface|false deleteMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Classificaco[]|\Cake\Datasource\ResultSetInterface deleteManyOrFail(iterable $entities, $options = [])
 */
class ClassificacoesTable extends Table
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

        $this->setTable('classificacoes');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

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
