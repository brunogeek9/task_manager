<?php

/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Task $task
 */
?>

<!-- <div class="tasks view large-9 medium-8 columns content"> -->

<div class="card bg-light mb-3 text-left mx-auto " style="width: 25rem;">
    <div class="card-body">
        <h5 class="card-title">
            <?= h($task->name) ?>
        </h5>

    </div>
    <!-- <ul class="list-group list-group-flush"> -->
    <!-- <li class="list-group-item"> -->
    <div class="card-body">
        <?= h($task->description) ?>

    </div>
    <!-- </li> -->

    <!-- <li class="list-group-item"> -->
    <div class="card-body">
        <?= h($task->created) ?>
    </div>
    <!-- </li> -->

    <li class="list-group-item">
        <?= $task->done ? __('Completed') : __('inclomplete'); ?>
    </li>
    <!-- </ul> -->
    <div class="card-footer">
        <li class="list-group-item">
            <a class="card-link text-left">
                <?= $this->Html->link(__('List Tasks'), ['action' => 'index']) ?>
            </a>

            <a class="card-link text-right">
                <?= $this->Html->link(__('New Task'), ['action' => 'add']) ?>
            </a>
        </li>
        <li class="list-group-item">
            <a class="card-link">
                <?= $this->Html->link(__('Edit Task'), ['action' => 'edit', $task->id]) ?>
            </a>
            <a class="card-link">
                <?= $this->Form->postLink(__('Delete Task'), ['action' => 'delete', $task->id], ['confirm' => __('Are you sure you want to delete # {0}?', $task->id)]) ?>
            </a>
        </li>
    </div>

</div>


<!-- </div> -->