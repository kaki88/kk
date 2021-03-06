<?php
namespace App\Model\Table;

use App\Event\ProjectListener;
use Cake\Event\EventListenerInterface;
use Cake\Event\Event;
use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;
use Cake\Event\EventManager;

/**
 * Projects Model
 *
 * @property \Cake\ORM\Association\HasMany $Diaries
 * @property \Cake\ORM\Association\HasMany $FromToTasks
 * @property \Cake\ORM\Association\HasMany $Tasks
 * @property \Cake\ORM\Association\BelongsToMany $Users
 *
 * @method \App\Model\Entity\Project get($primaryKey, $options = [])
 * @method \App\Model\Entity\Project newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Project[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Project|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Project patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Project[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Project findOrCreate($search, callable $callback = null)
 */
class ProjectsTable extends Table
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

        $this->table('projects');
        $this->displayField('name');
        $this->primaryKey('id');

        $this->hasMany('Diaries', [
            'foreignKey' => 'project_id',
            'dependent' => true,
            'cascadeCallbacks' => true
        ]);
        $this->hasMany('FromToTasks', [
            'foreignKey' => 'project_id'
        ]);
        $this->hasMany('Tasks', [
            'foreignKey' => 'project_id'
        ]);
        $this->belongsToMany('Users', [
            'foreignKey' => 'project_id',
            'targetForeignKey' => 'user_id',
            'joinTable' => 'projects_users'
        ]);
        $this->hasOne('Forums', [
            'foreignKey' => 'forum_id'
        ]);
        $this->hasMany('Files', [
            'foreignKey' => 'project_id'
        ]);
        $this->hasOne('Creators', [
            'className' => 'Users',
            'foreignKey' => 'creator_id'
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
            ->integer('users_number');

        $validator
            ->boolean('finished')
            ->allowEmpty('finished');

        $validator
            ->date('start_date');

        $validator
            ->date('end_date');


        $validator
            ->allowEmpty('picture_url');

        $validator
            ->allowEmpty('url');

        $validator
            ->allowEmpty('start_date');


        $validator
            ->allowEmpty('end_date');

        $validator
            ->allowEmpty('users_number');


        return $validator;
    }

    public function afterSave($created, $event, $entity){

        if ($created) {

//            if INSERT
            //$event->isNew() va recupéré dans l'event la ligne " ['new'] " indiquant si l'on effectue un nouvelle enregistrement ou non
            if($event->isNew()){
                $project = new Event('Model.Project.add' ,$this,[
                    'event' =>$event,
                    'entity' =>$entity
                ]);
            }
//          if UPDATE
            else{
                $project = new Event('Model.Project.edit', $this,[
                    'event' =>$event
                ]);
            }
            $this->eventManager()->dispatch($project);
            return true;
        }
        return false;
    }
}
