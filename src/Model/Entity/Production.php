<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Production Entity
 *
 * @property int $id
 * @property string $name
 * @property int $chapter_numer
 * @property string $year
 * @property string $description
 * @property float $qualification
 * @property string $image
 * @property int $demography_id
 *
 * @property \App\Model\Entity\Demographic $demographic
 * @property \App\Model\Entity\Title[] $titles
 * @property \App\Model\Entity\Genre[] $genres
 */
class Production extends Entity
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
        'chapter_numer' => true,
        'year' => true,
        'description' => true,
        'qualification' => true,
        'image' => true,
        'demography_id' => true,
        'visible' => true,
        'demographic' => true,
        'titles' => true,
        'genres' => true,
        'rank' => true
    ];
}
