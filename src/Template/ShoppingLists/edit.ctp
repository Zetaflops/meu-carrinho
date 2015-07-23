<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $shoppingList->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $shoppingList->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Shopping Lists'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Items Lists'), ['controller' => 'ItemsLists', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Items List'), ['controller' => 'ItemsLists', 'action' => 'add']) ?></li>
    </ul>
</div>
<div class="shoppingLists form large-10 medium-9 columns">
    <?= $this->Form->create($shoppingList) ?>
    <fieldset>
        <legend><?= __('Edit Shopping List') ?></legend>
        <?php
            echo $this->Form->input('user_id', ['options' => $users]);
            echo $this->Form->input('name');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
