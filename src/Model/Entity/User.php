<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;
use Cake\Auth\DefaultPasswordHasher;

/**
 * User Entity
 *
 * @property int $id
 * @property string $promotion
 * @property string $username
 * @property string $password
 * @property string $email
 * @property string $address
 * @property string $zipcode
 * @property string $city
 * @property string $phone
 * @property string $cellphone
 * @property string $emergency_phone
 * @property string $firstname
 * @property string $lastname
 * @property \Cake\I18n\Time $birthday
 * @property string $github_username
 * @property \Cake\I18n\Time $created
 * @property \Cake\I18n\Time $modified
 * @property int $role_id
 * @property string $picture_url
 *
 * @property \App\Model\Entity\Role $role
 * @property \App\Model\Entity\Diary[] $diaries
 * @property \App\Model\Entity\Project[] $projects
 * @property \App\Model\Entity\Task[] $tasks
 */
class User extends Entity
{

    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * Note that when '*' is set to true, this allows all unspecified fields to
     * be mass assigned. For security purposes, it is advised to set '*' to false
     * (or remove it), and explicitly make individual fields accessible as needed.
     *
     * @var array
     */
    protected $_accessible = [
        '*' => true,
        'id' => false
    ];

    /**
     * Fields that are excluded from JSON versions of the entity.
     *
     * @var array
     */
    protected $_hidden = [
        'password'
    ];

    protected function _setPassword($password)
    {
        return (new DefaultPasswordHasher)->hash($password);
    }

}
