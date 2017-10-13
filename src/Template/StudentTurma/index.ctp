<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\StudentTurma[]|\Cake\Collection\CollectionInterface $studentTurma
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Student Turma'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Aluno'), ['controller' => 'Aluno', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Aluno'), ['controller' => 'Aluno', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Turma'), ['controller' => 'Turma', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Turma'), ['controller' => 'Turma', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="studentTurma index large-9 medium-8 columns content">
    <h3><?= __('Student Turma') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('student_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('turma_id') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($studentTurma as $studentTurma): ?>
            <tr>
                <td><?= $this->Number->format($studentTurma->id) ?></td>
                <td><?= $studentTurma->has('aluno') ? $this->Html->link($studentTurma->aluno->name, ['controller' => 'Aluno', 'action' => 'view', $studentTurma->aluno->id]) : '' ?></td>
                <td><?= $studentTurma->has('turma') ? $this->Html->link($studentTurma->turma->id, ['controller' => 'Turma', 'action' => 'view', $studentTurma->turma->id]) : '' ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $studentTurma->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $studentTurma->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $studentTurma->id], ['confirm' => __('Are you sure you want to delete # {0}?', $studentTurma->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->first('<< ' . __('first')) ?>
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
            <?= $this->Paginator->last(__('last') . ' >>') ?>
        </ul>
        <p><?= $this->Paginator->counter(['format' => __('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')]) ?></p>
    </div>
</div>
