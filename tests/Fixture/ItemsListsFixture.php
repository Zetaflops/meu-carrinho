<?php
namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * ItemsListsFixture
 *
 */
class ItemsListsFixture extends TestFixture
{

    /**
     * Fields
     *
     * @var array
     */
    // @codingStandardsIgnoreStart
    public $fields = [
        'shopping_list_id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'item_id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'created' => ['type' => 'datetime', 'length' => null, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null],
        'modified' => ['type' => 'string', 'length' => 45, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null, 'fixed' => null],
        '_indexes' => [
            'fk_lists_has_items_items1_idx' => ['type' => 'index', 'columns' => ['item_id'], 'length' => []],
            'fk_lists_has_items_lists1_idx' => ['type' => 'index', 'columns' => ['shopping_list_id'], 'length' => []],
        ],
        '_constraints' => [
            'primary' => ['type' => 'primary', 'columns' => ['shopping_list_id', 'item_id'], 'length' => []],
            'fk_lists_has_items_lists1' => ['type' => 'foreign', 'columns' => ['shopping_list_id'], 'references' => ['shopping_lists', 'id'], 'update' => 'noAction', 'delete' => 'noAction', 'length' => []],
            'fk_lists_has_items_items1' => ['type' => 'foreign', 'columns' => ['item_id'], 'references' => ['items', 'id'], 'update' => 'noAction', 'delete' => 'noAction', 'length' => []],
        ],
        '_options' => [
            'engine' => 'InnoDB',
            'collation' => 'utf8_general_ci'
        ],
    ];
    // @codingStandardsIgnoreEnd

    /**
     * Records
     *
     * @var array
     */
    public $records = [
        [
            'shopping_list_id' => 1,
            'item_id' => 1,
            'created' => '2015-07-23 01:21:07',
            'modified' => 'Lorem ipsum dolor sit amet'
        ],
    ];
}
