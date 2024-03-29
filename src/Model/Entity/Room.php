<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Room Entity
 *
 * @property int $id
 * @property int $hotel_id
 * @property string $room_type
 *
 * @property \App\Model\Entity\Hotel $hotel
 * @property \App\Model\Entity\Booking[] $bookings
 */
class Room extends Entity
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
        'hotel_id' => true,
        'room_type' => true,
        'hotel' => true,
        'bookings' => true
    ];
}
