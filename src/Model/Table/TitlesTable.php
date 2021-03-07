<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Titles Model
 *
 * @property \App\Model\Table\ProductionsTable|\Cake\ORM\Association\BelongsTo $Productions
 *
 * @method \App\Model\Entity\Title get($primaryKey, $options = [])
 * @method \App\Model\Entity\Title newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Title[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Title|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Title patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Title[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Title findOrCreate($search, callable $callback = null, $options = [])
 */
class TitlesTable extends Table
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

        $this->setTable('titles');
        $this->setDisplayField('name');
        $this->setPrimaryKey('id');

        $this->belongsTo('Productions', [
            'foreignKey' => 'production_id',
            'joinType' => 'INNER'
        ]);
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

    /**
     * Returns a rules checker object that will be used for validating
     * application integrity.
     *
     * @param \Cake\ORM\RulesChecker $rules The rules object to be modified.
     * @return \Cake\ORM\RulesChecker
     */
    public function buildRules(RulesChecker $rules)
    {
        $rules->add($rules->existsIn(['production_id'], 'Productions'));

        return $rules;
    }
}
