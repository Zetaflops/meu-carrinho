<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $price->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $price->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Prices'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Suppliers'), ['controller' => 'Suppliers', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Supplier'), ['controller' => 'Suppliers', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Items'), ['controller' => 'Items', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Item'), ['controller' => 'Items', 'action' => 'add']) ?></li>
    </ul>
</div>
<div class="prices form large-10 medium-9 columns">
    <?= $this->Form->create($price) ?>
    <fieldset>
        <legend><?= __('Edit Price') ?></legend>
        <?php
            echo $this->Form->input('supplier_id', ['options' => $suppliers]);
            echo $this->Form->input('item_id', ['options' => $items]);
            echo $this->Form->input('lower_price');
            echo $this->Form->input('higher_price');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
