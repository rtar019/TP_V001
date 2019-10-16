<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Payment Entity
 *
 * @property int $id
 * @property int $booking_id
 * @property \Cake\I18n\FrozenDate $payment_date
 * @property float $payment_amount
 *
 * @property \App\Model\Entity\Booking[] $bookings
 */
class Payment extends Entity
{
    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * Note that when '*' is set to true, this allows all unspecified fields to
     * be mass assigned. For security purposes, it is advised to set '*' to false
     * (or remove it), and explicitly make individual fields accessible as needed.
     *
     * @var array
     */
    protected $_accessible = [
        'booking_id' => true,
        'payment_date' => true,
        'payment_amount' => true,
        'bookings' => true
    ];
}
