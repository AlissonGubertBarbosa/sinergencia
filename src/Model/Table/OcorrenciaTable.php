<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Ocorrencia Model
 *
 * @method \App\Model\Entity\Ocorrencium newEmptyEntity()
 * @method \App\Model\Entity\Ocorrencium newEntity(array $data, array $options = [])
 * @method \App\Model\Entity\Ocorrencium[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Ocorrencium get($primaryKey, $options = [])
 * @method \App\Model\Entity\Ocorrencium findOrCreate($search, ?callable $callback = null, $options = [])
 * @method \App\Model\Entity\Ocorrencium patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Ocorrencium[] patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\Ocorrencium|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Ocorrencium saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Ocorrencium[]|\Cake\Datasource\ResultSetInterface|false saveMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Ocorrencium[]|\Cake\Datasource\ResultSetInterface saveManyOrFail(iterable $entities, $options = [])
 * @method \App\Model\Entity\Ocorrencium[]|\Cake\Datasource\ResultSetInterface|false deleteMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Ocorrencium[]|\Cake\Datasource\ResultSetInterface deleteManyOrFail(iterable $entities, $options = [])
 */
class OcorrenciaTable extends Table
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

        $this->setTable('ocorrencia');
        $this->setDisplayField('id_ocorrencia');
        $this->setPrimaryKey('id_ocorrencia');
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
            ->integer('id_ocorrencia')
            ->allowEmptyString('id_ocorrencia', null, 'create');

        $validator
            ->scalar('descricao')
            ->requirePresence('descricao', 'create')
            ->notEmptyString('descricao');

        $validator
            ->scalar('status')
            ->requirePresence('status', 'create')
            ->notEmptyString('status');

        $validator
            ->dateTime('data_Criacao')
            ->allowEmptyDateTime('data_Criacao');

        $validator
            ->integer('id_usuarioComum')
            ->allowEmptyString('id_usuarioComum');

        $validator
            ->integer('id_enderecoOcorrencia')
            ->allowEmptyString('id_enderecoOcorrencia');

        return $validator;
    }
}
