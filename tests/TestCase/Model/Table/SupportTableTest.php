<?php
namespace Support\Test\TestCase\Model\Table;

use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;
use Support\Model\Table\SupportTable;

/**
 * Support\Model\Table\SupportTable Test Case
 */
class SupportTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \Support\Model\Table\SupportTable
     */
    public $Support;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'plugin.support.support'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('Support') ? [] : ['className' => 'Support\Model\Table\SupportTable'];
        $this->Support = TableRegistry::get('Support', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Support);

        parent::tearDown();
    }

    /**
     * Test initialize method
     *
     * @return void
     */
    public function testInitialize()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test validationDefault method
     *
     * @return void
     */
    public function testValidationDefault()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
