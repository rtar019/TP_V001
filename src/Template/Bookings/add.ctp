<?php
$urlToLinkedListFilter = $this->Url->build([
    "controller" => "Villes",
    "action" => "getByCategory",
    "_ext" => "json"
        ]);
echo $this->Html->scriptBlock('var urlToLinkedListFilter = "' . $urlToLinkedListFilter . '";', ['block' => true]);
echo $this->Html->script('Bookings/add', ['block' => 'scriptBottom']);
?>
<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Booking $booking
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Bookings'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Rooms'), ['controller' => 'Rooms', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Room'), ['controller' => 'Rooms', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Guests'), ['controller' => 'Guests', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Guest'), ['controller' => 'Guests', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Payments'), ['controller' => 'Payments', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Payment'), ['controller' => 'Payments', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Villes'), ['controller' => 'Villes', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Ville'), ['controller' => 'Villes', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="bookings form large-9 medium-8 columns content">
    <?= $this->Form->create($booking) ?>
    <fieldset>
        <legend><?= __('Add Booking') ?></legend>
        <?php
            echo $this->Form->control('pays_id', ['options' => $pays]);
            echo $this->Form->control('ville_id', ['options' => $villes]);
            echo $this->Form->control('user_id', ['options' => $users]);
            echo $this->Form->control('room_id', ['options' => $rooms]);
            echo $this->Form->control('payment_id');
            echo $this->Form->control('guest_id', ['options' => $guests]);
            echo $this->Form->control('date_from');
            echo $this->Form->control('date_to');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
