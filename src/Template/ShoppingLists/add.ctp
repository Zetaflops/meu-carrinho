<div class="shoppingLists form large-10 medium-9 columns">
    <?= $this->Form->create($shoppingList) ?>
    <fieldset>
        <legend><?= __('Add Shopping List') ?></legend>
        <?php
            echo $this->Form->input('user_id', ['options' => $users]);
            echo $this->Form->input('name');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
