<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * UtilisateurFixture
 */
class UtilisateurFixture extends TestFixture
{
    /**
     * Table name
     *
     * @var string
     */
    public $table = 'utilisateur';
    /**
     * Init method
     *
     * @return void
     */
    public function init(): void
    {
        $this->records = [
            [
                'id' => 1,
                'carte' => 1,
                'nom' => 'Lorem ipsum dolor sit amet',
                'prenom' => 'Lorem ipsum dolor sit amet',
                'mail' => 'Lorem ipsum dolor sit amet',
                'tel' => 1,
                'id_role' => 1,
            ],
        ];
        parent::init();
    }
}
