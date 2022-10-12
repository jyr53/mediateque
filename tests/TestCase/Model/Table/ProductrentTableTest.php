<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\ProductrentTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\ProductrentTable Test Case
 */
class ProductrentTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\ProductrentTable
     */
    protected $Productrent;

    /**
     * Fixtures
     *
     * @var array<string>
     */
    protected $fixtures = [
        'app.Productrent',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    protected function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('Productrent') ? [] : ['className' => ProductrentTable::class];
        $this->Productrent = $this->getTableLocator()->get('Productrent', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    protected function tearDown(): void
    {
        unset($this->Productrent);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @uses \App\Model\Table\ProductrentTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
