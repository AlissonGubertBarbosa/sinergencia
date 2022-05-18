<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Feedback Model
 *
 * @property \App\Model\Table\OcorrenciasTable&\Cake\ORM\Association\BelongsTo $Ocorrencias
 * @property \App\Model\Table\UsuariocomumsTable&\Cake\ORM\Association\BelongsTo $Usuariocomums
 * @property \App\Model\Table\InstituicaosTable&\Cake\ORM\Association\BelongsTo $Instituicaos
 * @property \App\Model\Table\ClassificacaoTable&\Cake\ORM\Association\HasMany $Classificacao
 *
 * @method \App\Model\Entity\Feedback newEmptyEntity()
 * @method \App\Model\Entity\Feedback newEntity(array $data, array $options = [])
 * @method \App\Model\Entity\Feedback[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Feedback get($primaryKey, $options = [])
 * @method \App\Model\Entity\Feedback findOrCreate($search, ?callable $callback = null, $options = [])
 * @method \App\Model\Entity\Feedback patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Feedback[] patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\Feedback|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Feedback saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Feedback[]|\Cake\Datasource\ResultSetInterface|false saveMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Feedback[]|\Cake\Datasource\ResultSetInterface saveManyOrFail(iterable $entities, $options = [])
 * @method \App\Model\Entity\Feedback[]|\Cake\Datasource\ResultSetInterface|false deleteMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Feedback[]|\Cake\Datasource\ResultSetInterface deleteManyOrFail(iterable $entities, $options = [])
 */
class FeedbackTable extends Table
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

        $this->setTable('feedback');
        $this->setDisplayField('id_feedback');
        $this->setPrimaryKey('id_feedback');

        $this->belongsTo('Ocorrencias', [
            'foreignKey' => 'ocorrencia_id',
            'joinType' => 'INNER',
        ]);
        $this->belongsTo('Usuariocomums', [
            'foreignKey' => 'usuariocomum_id',
            'joinType' => 'INNER',
        ]);
        $this->belongsTo('Instituicaos', [
            'foreignKey' => 'instituicao_id',
            'joinType' => 'INNER',
        ]);
        $this->hasMany('Classificacao', [
            'foreignKey' => 'feedback_id',
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
            ->integer('id_feedback')
            ->allowEmptyString('id_feedback', null, 'create');

        $validator
            ->scalar('devolutiva')
            ->maxLength('devolutiva', 300)
            ->requirePresence('devolutiva', 'create')
            ->notEmptyString('devolutiva');

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
        $rules->add($rules->existsIn('ocorrencia_id', 'Ocorrencias'), ['errorField' => 'ocorrencia_id']);
        $rules->add($rules->existsIn('usuariocomum_id', 'Usuariocomums'), ['errorField' => 'usuariocomum_id']);
        $rules->add($rules->existsIn('instituicao_id', 'Instituicaos'), ['errorField' => 'instituicao_id']);

        return $rules;
    }
}
