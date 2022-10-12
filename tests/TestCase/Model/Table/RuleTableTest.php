<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\RuleTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\RuleTable Test Case
 */
class RuleTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\RuleTable
     */
    protected $Rule;

    /**
     * Fixtures
     *
     * @var array<string>
     */
    protected $fixtures = [
        'app.Rule',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    protected function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('Rule') ? [] : ['className' => RuleTable::class];
        $this->Rule = $this->getTableLocator()->get('Rule', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    protected function tearDown(): void
    {
        unset($this->Rule);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @uses \App\Model\Table\RuleTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
