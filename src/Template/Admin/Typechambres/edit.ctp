<?php
/**
 * @var \App\View\AppView $this
 */
?>
<?php
$this->extend('/Layout/TwitterBootstrap/dashboard');

$this->start('tb_actions');
?>
    <li><?=
    $this->Form->postLink(
        __('Delete'),
        ['action' => 'delete', $typechambre->id],
        ['confirm' => __('Are you sure you want to delete # {0}?', $typechambre->id)]
    )
    ?>
    </li>
    <li><?= $this->Html->link(__('List Cocktails'), ['action' => 'index']) ?></li>
<?php
$this->end();

$this->start('tb_sidebar');
?>
<ul class="nav nav-sidebar">
    <li><?=
    $this->Form->postLink(
        __('Delete'),
        ['action' => 'delete', $typechambre->id],
        ['confirm' => __('Are you sure you want to delete # {0}?', $typechambre->id)]
    )
    ?>
    </li>
    <li><?= $this->Html->link(__('List Typechambres'), ['action' => 'index']) ?></li>
</ul>
<?php
$this->end();
?>
<?= $this->Form->create($typechambre); ?>
<fieldset>
    <legend><?= __('Edit {0}', ['Typechambre']) ?></legend>
    <?php
    echo $this->Form->control('name');
    echo $this->Form->control('description');
    ?>
</fieldset>
<?= $this->Form->button(__("Save")); ?>
<?= $this->Form->end() ?>
