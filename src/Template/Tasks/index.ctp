<?php

/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Task[]|\Cake\Collection\CollectionInterface $tasks
 */
?>
<!-- <nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li></li>
    </ul>
</nav> -->
<button type="button" class="btn btn-outline-dark float-left">
    <?= $this->Html->link(__('Novo'), ['action' => 'add']) ?>
</button>
<div>
    <h3><?= __('Tasks') ?></h3>
    <table class="table table-striped">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('name') ?></th>
                <th scope="col"><?= $this->Paginator->sort('description') ?></th>
                <th scope="col"><?= $this->Paginator->sort('done') ?></th>
                <th scope="col"><?= $this->Paginator->sort('created') ?></th>
                <th scope="col"><?= $this->Paginator->sort('modified') ?></th>
                <!-- <th scope="col"><?= $this->Paginator->sort('id') ?></th> -->
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($tasks as $task) : ?>
                <tr>
                    <td><?= h($task->name) ?></td>
                    <td><?= h($task->description) ?></td>
                    <td><?= $task->done ? __('Yes') : __('No'); ?></td>
                    <td><?= h($task->created) ?></td>
                    <td><?= h($task->modified) ?></td>

                    <td class="actions">
                        <button type="button" class="btn btn-outline-dark linkbtn">
                            <?= $this->Html->link(__('Detail'), ['action' => 'view', $task->id]) ?>
                        </button>
                        <button type="button" class="btn btn-outline-secondary">
                            <?= $this->Html->link(__('Edit'), ['action' => 'edit', $task->id]) ?>
                        </button>
                        <button type="button" class="btn btn-outline-danger">
                            <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $task->id], ['confirm' => __('Are you sure you want to delete # {0}?', $task->id)]) ?>
                        </button>
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
<style>
    a.linkbtn:link {
        color: red;
        text-decoration: none;
    }
</style>