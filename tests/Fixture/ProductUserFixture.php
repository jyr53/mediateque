<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * ProductUserFixture
 */
class ProductUserFixture extends TestFixture
{
    /**
     * Table name
     *
     * @var string
     */
    public $table = 'product_user';
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
                'id_1' => 1,
                'user_id' => 1,
                'product_id' => 1,
                'date_dep' => '2022-10-10',
                'date_ret' => '2022-10-10',
            ],
        ];
        parent::init();
    }
}
