<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Typechambre $typechambre
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Typechambre'), ['action' => 'edit', $typechambre->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Typechambre'), ['action' => 'delete', $typechambre->id], ['confirm' => __('Are you sure you want to delete # {0}?', $typechambre->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Typechambres'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Typechambre'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="typechambres view large-9 medium-8 columns content">
    <h3><?= h($typechambre->name) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Name') ?></th>
            <td><?= h($typechambre->name) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($typechambre->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($typechambre->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($typechambre->modified) ?></td>
        </tr>
    </table>
</div>
