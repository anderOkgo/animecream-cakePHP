<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Demographics Model
 *
 * @method \App\Model\Entity\Demographic get($primaryKey, $options = [])
 * @method \App\Model\Entity\Demographic newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Demographic[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Demographic|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Demographic patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Demographic[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Demographic findOrCreate($search, callable $callback = null, $options = [])
 */
class DemographicsTable extends Table
{

    /**
     * Initialize method
     *
     * @param array $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config)
    {
        parent::initialize($config);

        $this->setTable('demographics');
        $this->setDisplayField('name');
        $this->setPrimaryKey('id');
    }

    /**
     * Default validation rules.
     *
     * @param \Cake\Validation\Validator $validator Validator instance.
     * @return \Cake\Validation\Validator
     */
    public function validationDefault(Validator $validator)
    {
        $validator
            ->integer('id')
            ->allowEmpty('id', 'create');

        $validator
            ->scalar('name')
            ->maxLength('name', 255)
            ->requirePresence('name', 'create')
            ->notEmpty('name');

        return $validator;
    }
}
