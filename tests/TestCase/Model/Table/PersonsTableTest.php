<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\PersonsTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\PersonsTable Test Case
 */
class PersonsTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\PersonsTable
     */
    public $Persons;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.Persons',
        'app.Guests',
        'app.Instructors',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('Persons') ? [] : ['className' => PersonsTable::class];
        $this->Persons = TableRegistry::getTableLocator()->get('Persons', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Persons);

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
