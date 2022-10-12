<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * User Entity
 *
 * @property int $id
 * @property int|null $carte
 * @property string|null $nom
 * @property string|null $prenom
 * @property string|null $mail
 * @property int|null $tel
 * @property int|null $id_rule
 *
 * @property \App\Model\Entity\ProductUser[] $product_user
 */
class User extends Entity
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
        'carte' => true,
        'nom' => true,
        'prenom' => true,
        'mail' => true,
        'tel' => true,
        'id_rule' => true,
        'product_user' => true,
    ];
}
