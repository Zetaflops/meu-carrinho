<?php
namespace App\Model\Table;

use App\Model\Entity\ItemsList;
use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * ItemsLists Model
 *
 * @property \Cake\ORM\Association\BelongsTo $ShoppingLists
 * @property \Cake\ORM\Association\BelongsTo $Items
 */
class ItemsListsTable extends Table
{

    /**
     * Initialize method
     *
     * @param array $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config)
    {
        $this->table('items_lists');
        $this->displayField('shopping_list_id');
        $this->primaryKey(['shopping_list_id', 'item_id']);
        $this->addBehavior('Timestamp');
        $this->belongsTo('ShoppingLists', [
            'foreignKey' => 'shopping_list_id',
            'joinType' => 'INNER'
        ]);
        $this->belongsTo('Items', [
            'foreignKey' => 'item_id',
            'joinType' => 'INNER'
        ]);
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
        $rules->add($rules->existsIn(['shopping_list_id'], 'ShoppingLists'));
        $rules->add($rules->existsIn(['item_id'], 'Items'));
        return $rules;
    }
}
