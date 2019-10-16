<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Booking Entity
 *
 * @property int $id
 * @property int $user_id
 * @property int $room_id
 * @property int $payment_id
 * @property int $guest_id
 * @property \Cake\I18n\FrozenDate $date_from
 * @property \Cake\I18n\FrozenDate $date_to
 *
 * @property \App\Model\Entity\User $user
 * @property \App\Model\Entity\Room $room
 * @property \App\Model\Entity\Payment[] $payments
 * @property \App\Model\Entity\Guest $guest
 */
class Booking extends Entity
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
        'user_id' => true,
        'room_id' => true,
        'payment_id' => true,
        'guest_id' => true,
        'date_from' => true,
        'date_to' => true,
        'user' => true,
        'room' => true,
        'payments' => true,
        'guest' => true
    ];
}
