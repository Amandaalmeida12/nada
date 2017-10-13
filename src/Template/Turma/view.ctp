<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Turma $turma
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Turma'), ['action' => 'edit', $turma->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Turma'), ['action' => 'delete', $turma->id], ['confirm' => __('Are you sure you want to delete # {0}?', $turma->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Turma'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Turma'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Professor'), ['controller' => 'Professor', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Professor'), ['controller' => 'Professor', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Disciplina'), ['controller' => 'Disciplina', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Disciplina'), ['controller' => 'Disciplina', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="turma view large-9 medium-8 columns content">
    <h3><?= h($turma->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Semestre') ?></th>
            <td><?= h($turma->semestre) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Professor') ?></th>
            <td><?= $turma->has('professor') ? $this->Html->link($turma->professor->name, ['controller' => 'Professor', 'action' => 'view', $turma->professor->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Disciplina') ?></th>
            <td><?= $turma->has('disciplina') ? $this->Html->link($turma->disciplina->title, ['controller' => 'Disciplina', 'action' => 'view', $turma->disciplina->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($turma->id) ?></td>
        </tr>
    </table>
</div>
