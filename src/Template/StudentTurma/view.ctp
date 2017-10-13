<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\StudentTurma $studentTurma
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Student Turma'), ['action' => 'edit', $studentTurma->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Student Turma'), ['action' => 'delete', $studentTurma->id], ['confirm' => __('Are you sure you want to delete # {0}?', $studentTurma->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Student Turma'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Student Turma'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Aluno'), ['controller' => 'Aluno', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Aluno'), ['controller' => 'Aluno', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Turma'), ['controller' => 'Turma', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Turma'), ['controller' => 'Turma', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="studentTurma view large-9 medium-8 columns content">
    <h3><?= h($studentTurma->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Aluno') ?></th>
            <td><?= $studentTurma->has('aluno') ? $this->Html->link($studentTurma->aluno->name, ['controller' => 'Aluno', 'action' => 'view', $studentTurma->aluno->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Turma') ?></th>
            <td><?= $studentTurma->has('turma') ? $this->Html->link($studentTurma->turma->id, ['controller' => 'Turma', 'action' => 'view', $studentTurma->turma->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($studentTurma->id) ?></td>
        </tr>
    </table>
</div>
