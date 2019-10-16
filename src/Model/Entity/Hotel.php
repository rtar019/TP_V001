<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Hotel Entity
 *
 * @property int $id
 * @property string $country_code
 * @property int $stars
 * @property string $name
 *
 * @property \App\Model\Entity\Room[] $rooms
 */
class Hotel extends Entity
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
        'country_code' => true,
        'stars' => true,
        'name' => true,
        'rooms' => true
    ];
}
