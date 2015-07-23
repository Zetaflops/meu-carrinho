<!--<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('New Items List'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Shopping Lists'), ['controller' => 'ShoppingLists', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Shopping List'), ['controller' => 'ShoppingLists', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Items'), ['controller' => 'Items', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Item'), ['controller' => 'Items', 'action' => 'add']) ?></li>
    </ul>
</div>-->
<div class="itemsLists index large-10 medium-9 columns">
    <table cellpadding="0" cellspacing="0">
    <thead>
        <tr>
            <th><?= $this->Paginator->sort('shopping_list_id') ?></th>
            <th><?= $this->Paginator->sort('item_id') ?></th>
            <th><?= $this->Paginator->sort('created') ?></th>
            <th><?= $this->Paginator->sort('modified') ?></th>
            <th class="actions"><?= __('Actions') ?></th>
        </tr>
    </thead>
    <tbody>
    <?php foreach ($itemsLists as $itemsList): ?>
        <tr>
            <td>
                <?= $itemsList->has('shopping_list') ? $this->Html->link($itemsList->shopping_list->name, ['controller' => 'ShoppingLists', 'action' => 'view', $itemsList->shopping_list->id]) : '' ?>
            </td>
            <td>
                <?= $itemsList->has('item') ? $this->Html->link($itemsList->item->name, ['controller' => 'Items', 'action' => 'view', $itemsList->item->id]) : '' ?>
            </td>
            <td><?= h($itemsList->created) ?></td>
            <td><?= h($itemsList->modified) ?></td>
            <td class="actions">
                <?= $this->Html->link(__('View'), ['action' => 'view', $itemsList->shopping_list_id]) ?>
                <?= $this->Html->link(__('Edit'), ['action' => 'edit', $itemsList->shopping_list_id]) ?>
                <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $itemsList->shopping_list_id], ['confirm' => __('Are you sure you want to delete # {0}?', $itemsList->shopping_list_id)]) ?>
            </td>
        </tr>

    <?php endforeach; ?>
    </tbody>
    </table>
    
    <?= $this->Html->link(__('Novo item da lista'), ['action' => 'add']) ?>
    
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
        </ul>
        <p><?= $this->Paginator->counter() ?></p>
    </div>
</div>
