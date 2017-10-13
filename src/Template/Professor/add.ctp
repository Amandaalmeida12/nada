<?php
/**
 * @var \App\View\AppView $this
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Professor'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Turma'), ['controller' => 'Turma', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Turma'), ['controller' => 'Turma', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="professor form large-9 medium-8 columns content">
    <?= $this->Form->create($professor) ?>
    <fieldset>
        <legend><?= __('Add Professor') ?></legend>
        <?php
            echo $this->Form->control('name');
            echo $this->Form->control('siape');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
