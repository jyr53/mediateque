<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * GenderFixture
 */
class GenderFixture extends TestFixture
{
    /**
     * Table name
     *
     * @var string
     */
    public $table = 'gender';
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
                'nom_de_genre' => 'Lorem ipsum dolor sit amet',
            ],
        ];
        parent::init();
    }
}
