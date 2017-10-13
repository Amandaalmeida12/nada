<?php
/**
 * @var \App\View\AppView $this
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $studentTurma->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $studentTurma->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Student Turma'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Aluno'), ['controller' => 'Aluno', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Aluno'), ['controller' => 'Aluno', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Turma'), ['controller' => 'Turma', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Turma'), ['controller' => 'Turma', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="studentTurma form large-9 medium-8 columns content">
    <?= $this->Form->create($studentTurma) ?>
    <fieldset>
        <legend><?= __('Edit Student Turma') ?></legend>
        <?php
            echo $this->Form->control('student_id', ['options' => $aluno]);
            echo $this->Form->control('turma_id', ['options' => $turma]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
