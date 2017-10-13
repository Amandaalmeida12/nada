<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Turma Entity
 *
 * @property int $id
 * @property string $semestre
 * @property int $professor_id
 * @property int $disciplina_id
 *
 * @property \App\Model\Entity\Professor $professor
 * @property \App\Model\Entity\Disciplina $disciplina
 */
class Turma extends Entity
{

    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * Note that when '*' is set to true, this allows all unspecified fields to
     * be mass assigned. For security purposes, it is advised to set '*' to false
     * (or remove it), and explicitly make individual fields accessible as needed.
     *
     * @var array
     */
    protected $_accessible = [
        'semestre' => true,
        'professor_id' => true,
        'disciplina_id' => true,
        'professor' => true,
        'disciplina' => true
    ];
}
