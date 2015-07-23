<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * ShoppingList Entity.
 */
class ShoppingList extends Entity
{

    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * @var array
     */
    protected $_accessible = [
        'user_id' => true,
        'name' => true,
        'user' => true,
        'items_lists' => true,
    ];
}
