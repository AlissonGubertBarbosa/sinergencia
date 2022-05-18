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
 * @property \App\Model\Table\RolesTable&\Cake\ORM\Association\BelongsTo $Roles
 * @property \App\Model\Table\EnderecoTable&\Cake\ORM\Association\BelongsTo $Endereco
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
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
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

        $this->addBehavior('Timestamp');

        $this->belongsTo('Roles', [
            'foreignKey' => 'roles_id',
            'joinType' => 'INNER',
        ]);
        $this->belongsTo('Endereco', [
            'foreignKey' => 'endereco_id',
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
            ->integer('id_moderador')
            ->allowEmptyString('id_moderador', null, 'create');

        $validator
            ->scalar('nome')
            ->maxLength('nome', 120)
            ->allowEmptyString('nome');

        $validator
            ->scalar('username')
            ->maxLength('username', 80)
            ->allowEmptyString('username');

        $validator
            ->scalar('password')
            ->maxLength('password', 50)
            ->allowEmptyString('password');

        $validator
        ->add(
            'confirm_password',
            'compareWith', [
                'rule' => ['compareWith', 'password'],
                'message' => 'Passwords not equal.'
            ]
            );

        $validator
            ->scalar('telefone')
            ->maxLength('telefone', 30)
            ->allowEmptyString('telefone');

        $validator
            ->scalar('sexo')
            ->maxLength('sexo', 11)
            ->allowEmptyString('sexo');

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
        $rules->add($rules->isUnique(['username']), ['errorField' => 'username']);
        $rules->add($rules->existsIn('roles_id', 'Roles'), ['errorField' => 'roles_id']);
        $rules->add($rules->existsIn('endereco_id', 'Endereco'), ['errorField' => 'endereco_id']);

        return $rules;
    }
}
