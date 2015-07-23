<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('Edit Shopping List'), ['action' => 'edit', $shoppingList->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Shopping List'), ['action' => 'delete', $shoppingList->id], ['confirm' => __('Are you sure you want to delete # {0}?', $shoppingList->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Shopping Lists'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Shopping List'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Items Lists'), ['controller' => 'ItemsLists', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Items List'), ['controller' => 'ItemsLists', 'action' => 'add']) ?> </li>
    </ul>
</div>
<div class="shoppingLists view large-10 medium-9 columns">
    <h2><?= h($shoppingList->name) ?></h2>
    <div class="row">
        <div class="large-5 columns strings">
            <h6 class="subheader"><?= __('User') ?></h6>
            <p><?= $shoppingList->has('user') ? $this->Html->link($shoppingList->user->name, ['controller' => 'Users', 'action' => 'view', $shoppingList->user->id]) : '' ?></p>
            <h6 class="subheader"><?= __('Name') ?></h6>
            <p><?= h($shoppingList->name) ?></p>
        </div>
        <div class="large-2 columns numbers end">
            <h6 class="subheader"><?= __('Id') ?></h6>
            <p><?= $this->Number->format($shoppingList->id) ?></p>
        </div>
        <div class="large-2 columns dates end">
            <h6 class="subheader"><?= __('Created') ?></h6>
            <p><?= h($shoppingList->created) ?></p>
            <h6 class="subheader"><?= __('Modified') ?></h6>
            <p><?= h($shoppingList->modified) ?></p>
        </div>
    </div>
</div>
<div class="related row">
    <div class="column large-12">
    <h4 class="subheader"><?= __('Related Items Lists') ?></h4>
    <?php if (!empty($shoppingList->items_lists)): ?>
    <table cellpadding="0" cellspacing="0">
        <tr>
            <th><?= __('Shopping List Id') ?></th>
            <th><?= __('Item Id') ?></th>
            <th><?= __('Created') ?></th>
            <th><?= __('Modified') ?></th>
            <th class="actions"><?= __('Actions') ?></th>
        </tr>
        <?php foreach ($shoppingList->items_lists as $itemsLists): ?>
        <tr>
            <td><?= h($itemsLists->shopping_list_id) ?></td>
            <td><?= h($itemsLists->item_id) ?></td>
            <td><?= h($itemsLists->created) ?></td>
            <td><?= h($itemsLists->modified) ?></td>

            <td class="actions">
                <?= $this->Html->link(__('View'), ['controller' => 'ItemsLists', 'action' => 'view', $itemsLists->shopping_list_id]) ?>

                <?= $this->Html->link(__('Edit'), ['controller' => 'ItemsLists', 'action' => 'edit', $itemsLists->shopping_list_id]) ?>

                <?= $this->Form->postLink(__('Delete'), ['controller' => 'ItemsLists', 'action' => 'delete', $itemsLists->shopping_list_id], ['confirm' => __('Are you sure you want to delete # {0}?', $itemsLists->shopping_list_id)]) ?>

            </td>
        </tr>

        <?php endforeach; ?>
    </table>
    <?php endif; ?>
    </div>
</div>
