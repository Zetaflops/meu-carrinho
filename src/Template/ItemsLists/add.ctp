<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('List Items Lists'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Shopping Lists'), ['controller' => 'ShoppingLists', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Shopping List'), ['controller' => 'ShoppingLists', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Items'), ['controller' => 'Items', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Item'), ['controller' => 'Items', 'action' => 'add']) ?></li>
    </ul>
</div>
<div class="itemsLists form large-10 medium-9 columns">
    <?= $this->Form->create($itemsList) ?>
    <fieldset>
        <legend><?= __('Add Items List') ?></legend>
        <?php
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
