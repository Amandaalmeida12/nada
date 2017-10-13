<?php
namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * StudentTurmaFixture
 *
 */
class StudentTurmaFixture extends TestFixture
{

    /**
     * Table name
     *
     * @var string
     */
    public $table = 'student_turma';

    /**
     * Fields
     *
     * @var array
     */
    // @codingStandardsIgnoreStart
    public $fields = [
        'id' => ['type' => 'integer', 'length' => 10, 'unsigned' => true, 'null' => false, 'default' => null, 'comment' => '', 'autoIncrement' => true, 'precision' => null],
        'student_id' => ['type' => 'integer', 'length' => 10, 'unsigned' => true, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'turma_id' => ['type' => 'integer', 'length' => 10, 'unsigned' => true, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        '_indexes' => [
            'fk_student_turma_aluno' => ['type' => 'index', 'columns' => ['student_id'], 'length' => []],
            'fk_student_turma_turma' => ['type' => 'index', 'columns' => ['turma_id'], 'length' => []],
        ],
        '_constraints' => [
            'primary' => ['type' => 'primary', 'columns' => ['id'], 'length' => []],
            'fk_student_turma_aluno' => ['type' => 'foreign', 'columns' => ['student_id'], 'references' => ['aluno', 'id'], 'update' => 'restrict', 'delete' => 'restrict', 'length' => []],
            'fk_student_turma_turma' => ['type' => 'foreign', 'columns' => ['turma_id'], 'references' => ['turma', 'id'], 'update' => 'restrict', 'delete' => 'restrict', 'length' => []],
        ],
        '_options' => [
            'engine' => 'InnoDB',
            'collation' => 'latin1_swedish_ci'
        ],
    ];
    // @codingStandardsIgnoreEnd

    /**
     * Records
     *
     * @var array
     */
    public $records = [
        [
            'id' => 1,
            'student_id' => 1,
            'turma_id' => 1
        ],
    ];
}
