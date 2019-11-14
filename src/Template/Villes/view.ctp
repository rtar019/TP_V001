<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Ville $ville
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Ville'), ['action' => 'edit', $ville->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Ville'), ['action' => 'delete', $ville->id], ['confirm' => __('Are you sure you want to delete # {0}?', $ville->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Villes'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Ville'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Pays'), ['controller' => 'Pays', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Pay'), ['controller' => 'Pays', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="villes view large-9 medium-8 columns content">
    <h3><?= h($ville->name) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Name') ?></th>
            <td><?= h($ville->name) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Pay') ?></th>
            <td><?= $ville->has('pay') ? $this->Html->link($ville->pay->name, ['controller' => 'Pays', 'action' => 'view', $ville->pay->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($ville->id) ?></td>
        </tr>
    </table>
</div>
