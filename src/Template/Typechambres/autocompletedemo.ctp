<?php
$urlToTypechambresAutocompletedemoJson = $this->Url->build([
    "controller" => "Typechambres",
    "action" => "findType",
    "_ext" => "json"
        ]);
echo $this->Html->scriptBlock('var urlToAutocompleteAction = "' . $urlToTypechambresAutocompletedemoJson . '";', ['block' => true]);
echo $this->Html->script('Typechambres/autocompletedemo', ['block' => 'scriptBottom']);
?>


<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Type'), ['action' => 'add']) ?></li>
    </ul>
</nav>

<?= $this->Form->create('Typechambres') ?>
<fieldset>
    <legend><?= __('Search Type') ?></legend>
    <?php
    echo $this->Form->input('name', ['id' => 'autocomplete']);
    ?>
</fieldset>
<?= $this->Form->end() ?>