<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\AlunoTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\AlunoTable Test Case
 */
class AlunoTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\AlunoTable
     */
    public $Aluno;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.aluno'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('Aluno') ? [] : ['className' => AlunoTable::class];
        $this->Aluno = TableRegistry::get('Aluno', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Aluno);

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
