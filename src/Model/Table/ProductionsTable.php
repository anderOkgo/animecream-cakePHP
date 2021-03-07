<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Productions Model
 *
 * @property \App\Model\Table\DemographicsTable|\Cake\ORM\Association\BelongsTo $Demographics
 * @property \App\Model\Table\TitlesTable|\Cake\ORM\Association\HasMany $Titles
 * @property \App\Model\Table\GenresTable|\Cake\ORM\Association\BelongsToMany $Genres
 *
 * @method \App\Model\Entity\Production get($primaryKey, $options = [])
 * @method \App\Model\Entity\Production newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Production[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Production|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Production patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Production[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Production findOrCreate($search, callable $callback = null, $options = [])
 */
class ProductionsTable extends Table
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

        $this->setTable('productions');
        $this->setDisplayField('name');
        $this->setPrimaryKey('id');

        $this->belongsTo('Demographics', [
            'foreignKey' => 'demography_id',
            'joinType' => 'INNER'
        ]);

         $this->belongsTo('Ranking', [
            'foreignKey' => 'id',
            'joinType' => 'INNER'
        ]);

        $this->hasMany('Titles', [
            'foreignKey' => 'production_id'
        ]);
        $this->belongsToMany('Genres', [
            'foreignKey' => 'production_id',
            'targetForeignKey' => 'genre_id',
            'joinTable' => 'productions_genres'
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

        $validator
            ->integer('chapter_numer')
            ->requirePresence('chapter_numer', 'create')
            ->notEmpty('chapter_numer');

        $validator
            ->scalar('year')
            ->requirePresence('year', 'create')
            ->notEmpty('year');

        $validator
            ->scalar('description')
            ->requirePresence('description', 'create')
            ->notEmpty('description');

        $validator
            ->decimal('qualification')
            ->requirePresence('qualification', 'create')
            ->notEmpty('qualification');

        $validator
            ->scalar('image')
            ->maxLength('image', 255)
            ->requirePresence('image', 'create')
            ->notEmpty('image');

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
        $rules->add($rules->existsIn(['demography_id'], 'Demographics'));

        return $rules;
    }
}
