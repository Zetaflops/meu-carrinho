<div class="prices view large-10 medium-9 columns">
    <h2><?= h($price->lower_price) ?></h2>
    <div class="row">
        <div class="large-5 columns strings">
            <h6 class="subheader"><?= __('Supplier') ?></h6>
            <p><?= $price->has('supplier') ? $this->Html->link($price->supplier->name, ['controller' => 'Suppliers', 'action' => 'view', $price->supplier->id]) : '' ?></p>
            <h6 class="subheader"><?= __('Item') ?></h6>
            <p><?= $price->has('item') ? $this->Html->link($price->item->name, ['controller' => 'Items', 'action' => 'view', $price->item->id]) : '' ?></p>
            <h6 class="subheader"><?= __('Higher Price') ?></h6>
            <p><?= h($price->higher_price) ?></p>
        </div>
        <div class="large-2 columns numbers end">
            <h6 class="subheader"><?= __('Lower Price') ?></h6>
            <p><?= $this->Number->format($price->lower_price) ?></p>
            <h6 class="subheader"><?= __('Id') ?></h6>
            <p><?= $this->Number->format($price->id) ?></p>
        </div>
        <div class="large-2 columns dates end">
            <h6 class="subheader"><?= __('Created') ?></h6>
            <p><?= h($price->created) ?></p>
            <h6 class="subheader"><?= __('Modified') ?></h6>
            <p><?= h($price->modified) ?></p>
        </div>
    </div>
</div>
