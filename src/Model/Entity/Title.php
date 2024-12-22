<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Title Entity
 *
 * @property int $id
 * @property string $name
 * @property int $production_id
 *
 * @property \App\Model\Entity\Production $production
 */
class Title extends Entity
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
        'name' => true,
        'production_id' => true,
        'production' => true
    ];
}
