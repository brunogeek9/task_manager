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
                    
                    <td class="actions">
                        <button class="btn btn-outline-dark linkbtn">
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

</div>
<style>

    strong {
        color: black;
    }

    a {
        text-decoration: none;
        color: black;
        font-weight: bold;
    }

    a:link,
    a:visited {
        text-decoration: none
    }

    a:active {
        text-decoration: none;
        color: red;
    }

    a:hover {
        text-decoration: none;
        color: black;
    }
</style>