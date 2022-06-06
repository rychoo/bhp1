<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Transaction Entity
 *
 * @property int $user_id
 * @property int $video_id
 * @property string|null $status
 * @property string|null $hash_id
 *
 * @property \App\Model\Entity\User $user
 * @property \App\Model\Entity\Video $video
 * @property \App\Model\Entity\Hash $hash
 */
class Transaction extends Entity
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
        'status' => true,
        'hash_id' => true,
        'user' => true,
        'video' => true,
        'hash' => true,
    ];
}
