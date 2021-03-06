<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Forum Entity
 *
 * @property int $id
 * @property string $name
 * @property string $description
 * @property bool $active
 * @property int $category_id
 * @property int $lasttopic
 * @property int $lastuser
 * @property int $countthread
 * @property int $countpost
 * @property string $icon
 *
 * @property \App\Model\Entity\Category $category
 * @property \App\Model\Entity\User $user
 * @property \App\Model\Entity\Post $post
 * @property \App\Model\Entity\Thread[] $threads
 */
class Forum extends Entity
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
}
