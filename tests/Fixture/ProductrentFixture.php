<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * ProductrentFixture
 */
class ProductrentFixture extends TestFixture
{
    /**
     * Table name
     *
     * @var string
     */
    public $table = 'productrent';
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
                'barcode' => 1,
                'genderid' => 1,
                'typeid' => 1,
                'title' => 'Lorem ipsum dolor sit amet',
                'author' => 'Lorem ipsum dolor sit amet',
                'abstract' => 'Lorem ipsum dolor sit amet',
                'id_1' => 1,
                'id_2' => 1,
            ],
        ];
        parent::init();
    }
}
