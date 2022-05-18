<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Enderecos Model
 *
 * @property \App\Model\Table\OcorrenciaTable&\Cake\ORM\Association\HasMany $Ocorrencia
 * @property \App\Model\Table\UsersTable&\Cake\ORM\Association\HasMany $Users
 *
 * @method \App\Model\Entity\Endereco newEmptyEntity()
 * @method \App\Model\Entity\Endereco newEntity(array $data, array $options = [])
 * @method \App\Model\Entity\Endereco[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Endereco get($primaryKey, $options = [])
 * @method \App\Model\Entity\Endereco findOrCreate($search, ?callable $callback = null, $options = [])
 * @method \App\Model\Entity\Endereco patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Endereco[] patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\Endereco|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Endereco saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Endereco[]|\Cake\Datasource\ResultSetInterface|false saveMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Endereco[]|\Cake\Datasource\ResultSetInterface saveManyOrFail(iterable $entities, $options = [])
 * @method \App\Model\Entity\Endereco[]|\Cake\Datasource\ResultSetInterface|false deleteMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Endereco[]|\Cake\Datasource\ResultSetInterface deleteManyOrFail(iterable $entities, $options = [])
 */
class EnderecosTable extends Table
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

        $this->setTable('enderecos');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->hasMany('Ocorrencia', [
            'foreignKey' => 'endereco_id',
        ]);
        $this->hasMany('Users', [
            'foreignKey' => 'endereco_id',
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
            ->scalar('logradouro')
            ->maxLength('logradouro', 200)
            ->requirePresence('logradouro', 'create')
            ->notEmptyString('logradouro');

        $validator
            ->scalar('numero')
            ->maxLength('numero', 10)
            ->allowEmptyString('numero');

        $validator
            ->scalar('bairro')
            ->maxLength('bairro', 50)
            ->requirePresence('bairro', 'create')
            ->notEmptyString('bairro');

        $validator
            ->scalar('complemento')
            ->maxLength('complemento', 50)
            ->requirePresence('complemento', 'create')
            ->notEmptyString('complemento');

        $validator
            ->scalar('cidade')
            ->maxLength('cidade', 100)
            ->requirePresence('cidade', 'create')
            ->notEmptyString('cidade');

        $validator
            ->scalar('estado')
            ->maxLength('estado', 100)
            ->requirePresence('estado', 'create')
            ->notEmptyString('estado');

        return $validator;
    }
}
