<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Forums Model
 *
 * @property \Cake\ORM\Association\BelongsTo $Categories
 * @property \Cake\ORM\Association\HasMany $Threads
 *
 * @method \App\Model\Entity\Forum get($primaryKey, $options = [])
 * @method \App\Model\Entity\Forum newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Forum[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Forum|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Forum patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Forum[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Forum findOrCreate($search, callable $callback = null)
 */
class ForumsTable extends Table
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

        $this->table('forum_forums');
        $this->displayField('name');
        $this->primaryKey('id');

        $this->belongsTo('Categories', [
            'foreignKey' => 'category_id',
            'joinType' => 'INNER'
        ]);
        $this->belongsTo('Users', [
            'foreignKey' => 'lastuser',
            'joinType' => 'INNER'
        ]);

        $this->belongsTo('Lasttopicuser', [
            'className' => 'Posts',
            'foreignKey' => 'lasttopic',
        ]);
        $this->hasMany('Threads', [
            'foreignKey' => 'forum_id',
            'dependent' => true,
            'cascadeCallbacks' => true
        ]);

        $this->belongsTo('Projects', [
            'foreignKey' => 'forum_id'
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
            ->requirePresence('name', 'create')
            ->notEmpty('name');

        $validator
            ->requirePresence('description', 'create')
            ->notEmpty('description');

        $validator
            ->integer('lasttopic')
            ->allowEmpty('lasttopic');

        $validator
            ->integer('lastuser')
            ->allowEmpty('lastuser');

        $validator
            ->integer('countthread')
            ->allowEmpty('countthread');

        $validator
            ->integer('countpost')
            ->allowEmpty('countpost');



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
        $rules->add($rules->existsIn(['category_id'], 'Categories'));

        return $rules;
    }
}
