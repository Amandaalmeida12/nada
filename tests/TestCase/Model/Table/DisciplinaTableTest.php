<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\DisciplinaTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\DisciplinaTable Test Case
 */
class DisciplinaTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\DisciplinaTable
     */
    public $Disciplina;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.disciplina',
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
        $config = TableRegistry::exists('Disciplina') ? [] : ['className' => DisciplinaTable::class];
        $this->Disciplina = TableRegistry::get('Disciplina', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Disciplina);

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
