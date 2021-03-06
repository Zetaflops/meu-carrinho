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
