<div class="shoppingLists index large-10 medium-9 columns">
    <table cellpadding="0" cellspacing="0">
    <thead>
        <tr>
            <th><?= $this->Paginator->sort('id') ?></th>
            <th><?= $this->Paginator->sort('user_id') ?></th>
            <th><?= $this->Paginator->sort('name') ?></th>
            <th><?= $this->Paginator->sort('created') ?></th>
            <th><?= $this->Paginator->sort('modified') ?></th>
            <th class="actions"><?= __('Actions') ?></th>
        </tr>
    </thead>
    <tbody>
    <?php foreach ($shoppingLists as $shoppingList): ?>
        <tr>
            <td><?= $this->Number->format($shoppingList->id) ?></td>
            <td>
                <?= $shoppingList->has('user') ? $this->Html->link($shoppingList->user->name, ['controller' => 'Users', 'action' => 'view', $shoppingList->user->id]) : '' ?>
            </td>
            <td><?= h($shoppingList->name) ?></td>
            <td><?= h($shoppingList->created) ?></td>
            <td><?= h($shoppingList->modified) ?></td>
            <td class="actions">
                <?= $this->Html->link(__('View'), ['action' => 'view', $shoppingList->id]) ?>
                <?= $this->Html->link(__('Edit'), ['action' => 'edit', $shoppingList->id]) ?>
                <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $shoppingList->id], ['confirm' => __('Are you sure you want to delete # {0}?', $shoppingList->id)]) ?>
            </td>
        </tr>

    <?php endforeach; ?>
    </tbody>
    </table>
    
    <?= $this->Html->link(__('Nova lista de compras'), ['action' => 'add']) ?>
    
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
        </ul>
        <p><?= $this->Paginator->counter() ?></p>
    </div>
</div>
