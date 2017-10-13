<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Professor $professor
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Professor'), ['action' => 'edit', $professor->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Professor'), ['action' => 'delete', $professor->id], ['confirm' => __('Are you sure you want to delete # {0}?', $professor->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Professor'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Professor'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Turma'), ['controller' => 'Turma', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Turma'), ['controller' => 'Turma', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="professor view large-9 medium-8 columns content">
    <h3><?= h($professor->name) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Name') ?></th>
            <td><?= h($professor->name) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Siape') ?></th>
            <td><?= h($professor->siape) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($professor->id) ?></td>
        </tr>
    </table>
    <div class="related">
        <h4><?= __('Related Turma') ?></h4>
        <?php if (!empty($professor->turma)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Semestre') ?></th>
                <th scope="col"><?= __('Professor Id') ?></th>
                <th scope="col"><?= __('Disciplina Id') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($professor->turma as $turma): ?>
            <tr>
                <td><?= h($turma->id) ?></td>
                <td><?= h($turma->semestre) ?></td>
                <td><?= h($turma->professor_id) ?></td>
                <td><?= h($turma->disciplina_id) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Turma', 'action' => 'view', $turma->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Turma', 'action' => 'edit', $turma->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Turma', 'action' => 'delete', $turma->id], ['confirm' => __('Are you sure you want to delete # {0}?', $turma->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
</div>
