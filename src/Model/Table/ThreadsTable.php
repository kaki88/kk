<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Threads Model
 *
 * @property \Cake\ORM\Association\BelongsTo $Users
 * @property \Cake\ORM\Association\BelongsTo $Forums
 * @property \Cake\ORM\Association\HasMany $Posts
 *
 * @method \App\Model\Entity\Thread get($primaryKey, $options = [])
 * @method \App\Model\Entity\Thread newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Thread[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Thread|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Thread patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Thread[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Thread findOrCreate($search, callable $callback = null)
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class ThreadsTable extends Table
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

        $this->table('threads');
        $this->displayField('id');
        $this->primaryKey('id');

        $this->addBehavior('Timestamp');

        $this->belongsTo('Forums', [
            'foreignKey' => 'forum_id',
            'joinType' => 'INNER'
        ]);
        $this->hasMany('Posts', [
        'foreignKey' => 'thread_id'
    ]);
        $this->belongsTo('Subscriptions', [
            'foreignKey' => 'thread_id',
            'joinType' => 'INNER'
        ]);
        $this->belongsTo('Users', [
            'foreignKey' => 'user_id',
            'joinType' => 'INNER'
        ]);

        $this->belongsTo('Lastuserthread', [
            'className' => 'Users',
            'foreignKey' => 'lastuser',
        ]);
        $this->belongsToMany('Files', [
            'foreignKey' => 'post_id',
            'targetForeignKey' => 'file_id',
            'joinTable' => 'posts_files'
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
            ->requirePresence('subject', 'create')
            ->notEmpty('subject');

        $validator
            ->requirePresence('text', 'create')
            ->notEmpty('text');

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
        $rules->add($rules->existsIn(['user_id'], 'Users'));
        $rules->add($rules->existsIn(['forum_id'], 'Forums'));

        return $rules;
    }
}
