<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Video Entity
 *
 * @property int $id
 * @property string $title
 * @property string $slug
 * @property string|null $body
 * @property string|null $filename
 * @property string|null $picturename
 * @property bool|null $published
 * @property \Cake\I18n\FrozenTime|null $created
 * @property \Cake\I18n\FrozenTime|null $modified
 *
 * @property \App\Model\Entity\Transaction[] $transactions
 */
class Video extends Entity
{
    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * Note that when '*' is set to true, this allows all unspecified fields to
     * be mass assigned. For security purposes, it is advised to set '*' to false
     * (or remove it), and explicitly make individual fields accessible as needed.
     *
     * @var array<string, bool>
     */
    protected $_accessible = [
        'title' => true,
        'slug' => true,
        'body' => true,
        'filename' => true,
        'picturename' => true,
        'published' => true,
        'created' => true,
        'modified' => true,
        'transactions' => true,
    ];
}
