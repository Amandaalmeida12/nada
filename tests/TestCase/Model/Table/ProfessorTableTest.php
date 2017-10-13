<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\ProfessorTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\ProfessorTable Test Case
 */
class ProfessorTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\ProfessorTable
     */
    public $Professor;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.professor',
        'app.turma'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('Professor') ? [] : ['className' => ProfessorTable::class];
        $this->Professor = TableRegistry::get('Professor', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Professor);

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
