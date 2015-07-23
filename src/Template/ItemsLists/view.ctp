<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('Edit Items List'), ['action' => 'edit', $itemsList->shopping_list_id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Items List'), ['action' => 'delete', $itemsList->shopping_list_id], ['confirm' => __('Are you sure you want to delete # {0}?', $itemsList->shopping_list_id)]) ?> </li>
        <li><?= $this->Html->link(__('List Items Lists'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Items List'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Shopping Lists'), ['controller' => 'ShoppingLists', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Shopping List'), ['controller' => 'ShoppingLists', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Items'), ['controller' => 'Items', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Item'), ['controller' => 'Items', 'action' => 'add']) ?> </li>
    </ul>
</div>
<div class="itemsLists view large-10 medium-9 columns">
    <h2><?= h($itemsList->shopping_list_id) ?></h2>
    <div class="row">
        <div class="large-5 columns strings">
            <h6 class="subheader"><?= __('Shopping List') ?></h6>
            <p><?= $itemsList->has('shopping_list') ? $this->Html->link($itemsList->shopping_list->name, ['controller' => 'ShoppingLists', 'action' => 'view', $itemsList->shopping_list->id]) : '' ?></p>
            <h6 class="subheader"><?= __('Item') ?></h6>
            <p><?= $itemsList->has('item') ? $this->Html->link($itemsList->item->name, ['controller' => 'Items', 'action' => 'view', $itemsList->item->id]) : '' ?></p>
            <h6 class="subheader"><?= __('Modified') ?></h6>
            <p><?= h($itemsList->modified) ?></p>
        </div>
        <div class="large-2 columns dates end">
            <h6 class="subheader"><?= __('Created') ?></h6>
            <p><?= h($itemsList->created) ?></p>
        </div>
    </div>
</div>
