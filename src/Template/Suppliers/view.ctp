<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('Edit Supplier'), ['action' => 'edit', $supplier->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Supplier'), ['action' => 'delete', $supplier->id], ['confirm' => __('Are you sure you want to delete # {0}?', $supplier->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Suppliers'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Supplier'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Prices'), ['controller' => 'Prices', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Price'), ['controller' => 'Prices', 'action' => 'add']) ?> </li>
    </ul>
</div>
<div class="suppliers view large-10 medium-9 columns">
    <h2><?= h($supplier->name) ?></h2>
    <div class="row">
        <div class="large-5 columns strings">
            <h6 class="subheader"><?= __('Name') ?></h6>
            <p><?= h($supplier->name) ?></p>
        </div>
        <div class="large-2 columns numbers end">
            <h6 class="subheader"><?= __('Id') ?></h6>
            <p><?= $this->Number->format($supplier->id) ?></p>
        </div>
        <div class="large-2 columns dates end">
            <h6 class="subheader"><?= __('Created') ?></h6>
            <p><?= h($supplier->created) ?></p>
            <h6 class="subheader"><?= __('Modified') ?></h6>
            <p><?= h($supplier->modified) ?></p>
        </div>
    </div>
</div>
<div class="related row">
    <div class="column large-12">
    <h4 class="subheader"><?= __('Related Prices') ?></h4>
    <?php if (!empty($supplier->prices)): ?>
    <table cellpadding="0" cellspacing="0">
        <tr>
            <th><?= __('Supplier Id') ?></th>
            <th><?= __('Item Id') ?></th>
            <th><?= __('Lower Price') ?></th>
            <th><?= __('Higher Price') ?></th>
            <th><?= __('Id') ?></th>
            <th><?= __('Created') ?></th>
            <th><?= __('Modified') ?></th>
            <th class="actions"><?= __('Actions') ?></th>
        </tr>
        <?php foreach ($supplier->prices as $prices): ?>
        <tr>
            <td><?= h($prices->supplier_id) ?></td>
            <td><?= h($prices->item_id) ?></td>
            <td><?= h($prices->lower_price) ?></td>
            <td><?= h($prices->higher_price) ?></td>
            <td><?= h($prices->id) ?></td>
            <td><?= h($prices->created) ?></td>
            <td><?= h($prices->modified) ?></td>

            <td class="actions">
                <?= $this->Html->link(__('View'), ['controller' => 'Prices', 'action' => 'view', $prices->id]) ?>

                <?= $this->Html->link(__('Edit'), ['controller' => 'Prices', 'action' => 'edit', $prices->id]) ?>

                <?= $this->Form->postLink(__('Delete'), ['controller' => 'Prices', 'action' => 'delete', $prices->id], ['confirm' => __('Are you sure you want to delete # {0}?', $prices->id)]) ?>

            </td>
        </tr>

        <?php endforeach; ?>
    </table>
    <?php endif; ?>
    </div>
</div>
