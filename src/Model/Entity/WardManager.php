<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * WardManager Entity
 *
 * @property int $id
 * @property int $user_id
 * @property string $ward_code
 * @property int $creator_id
 * @property \Cake\I18n\FrozenTime $created_at
 * @property \Cake\I18n\FrozenTime $updated_at
 *
 * @property \App\Model\Entity\User $user
 */
class WardManager extends Entity
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
        'id' => true,
        'user_id' => true,
        'ward_code' => true,
        'creator_id' => true,
        'created_at' => true,
        'updated_at' => true,
        'user' => true,
    ];
}
