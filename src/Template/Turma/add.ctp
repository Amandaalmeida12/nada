<?php
/**
 * @var \App\View\AppView $this
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Turma'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Professor'), ['controller' => 'Professor', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Professor'), ['controller' => 'Professor', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Disciplina'), ['controller' => 'Disciplina', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Disciplina'), ['controller' => 'Disciplina', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="turma form large-9 medium-8 columns content">
    <?= $this->Form->create($turma) ?>
    <fieldset>
        <legend><?= __('Add Turma') ?></legend>
        <?php
            echo $this->Form->control('semestre');
            echo $this->Form->control('professor_id', ['options' => $professor]);
            echo $this->Form->control('disciplina_id', ['options' => $disciplina]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
