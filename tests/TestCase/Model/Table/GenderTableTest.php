<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\GenderTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\GenderTable Test Case
 */
class GenderTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\GenderTable
     */
    protected $Gender;

    /**
     * Fixtures
     *
     * @var array<string>
     */
    protected $fixtures = [
        'app.Gender',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    protected function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('Gender') ? [] : ['className' => GenderTable::class];
        $this->Gender = $this->getTableLocator()->get('Gender', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    protected function tearDown(): void
    {
        unset($this->Gender);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @uses \App\Model\Table\GenderTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
