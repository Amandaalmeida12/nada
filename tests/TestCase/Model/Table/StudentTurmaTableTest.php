<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\StudentTurmaTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\StudentTurmaTable Test Case
 */
class StudentTurmaTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\StudentTurmaTable
     */
    public $StudentTurma;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.student_turma',
        'app.aluno',
        'app.turma',
        'app.professor',
        'app.disciplina'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('StudentTurma') ? [] : ['className' => StudentTurmaTable::class];
        $this->StudentTurma = TableRegistry::get('StudentTurma', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->StudentTurma);

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

    /**
     * Test buildRules method
     *
     * @return void
     */
    public function testBuildRules()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
