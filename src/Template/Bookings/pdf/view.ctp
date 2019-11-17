<div class="bookings view large-9 medium-8 columns content">
    <h3><?= h($booking->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('User') ?></th>
            <td><?= $booking->has('user') ? $this->Html->link($booking->user->id, ['controller' => 'Users', 'action' => 'view', $booking->user->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Room') ?></th>
            <td><?= $booking->has('room') ? $this->Html->link($booking->room->id, ['controller' => 'Rooms', 'action' => 'view', $booking->room->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Guest') ?></th>
            <td><?= $booking->has('guest') ? $this->Html->link($booking->guest->id, ['controller' => 'Guests', 'action' => 'view', $booking->guest->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Date From') ?></th>
            <td><?= h($booking->date_from) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Date To') ?></th>
            <td><?= h($booking->date_to) ?></td>
        </tr>
    </table>
    <div class="related">
        <h4><?= __('Related Payments') ?></h4>
        <?php if (!empty($booking->payments)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Payment Date') ?></th>
                <th scope="col"><?= __('Payment Amount') ?></th>
            </tr>
            <?php foreach ($booking->payments as $payments): ?>
            <tr>
                <td><?= h($payments->id) ?></td>
                <td><?= h($payments->booking_id) ?></td>
                <td><?= h($payments->payment_date) ?></td>
                <td><?= h($payments->payment_amount) ?></td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
</div>
