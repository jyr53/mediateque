<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * TypeFixture
 */
class TypeFixture extends TestFixture
{
    /**
     * Table name
     *
     * @var string
     */
    public $table = 'type';
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
                'nom_du_type' => 'Lorem ipsum dolor sit amet',
            ],
        ];
        parent::init();
    }
}
