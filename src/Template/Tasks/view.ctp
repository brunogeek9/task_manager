<?php

/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Task $task
 */
?>

<!-- <div class="tasks view large-9 medium-8 columns content"> -->

<div class="card text-left mx-auto " style="width: 25rem;">
    <div class="card-body">
        <h5 class="card-title">
            <?= h($task->name) ?>
        </h5>
    </div>
    <div class="card-body">
        <?= h($task->description) ?>
    </div>

    <div class="card-body">
        <?= h($task->created) ?>
    </div>
    <div class="card-body">
        <?= $task->done ? __('Completed') : __('inclomplete'); ?>
    </div>

    <div class="card-footer">
        <div class="card-body">
            <div class="float-left">
                <button class="btn btn-dark">
                    <?= $this->Html->link(__('List Tasks'), ['action' => 'index']) ?>
                </button>
            </div>
            <div class="float-right">
                <button class="btn btn-dark">
                    <?= $this->Html->link(__('New Task'), ['action' => 'add']) ?>
                </button>
            </div>
        </div>

        <div class="card-body">
            <div class="float-left">
                <button class="btn btn-dark mt-3">
                    <?= $this->Html->link(__('Edit Task'), ['action' => 'edit', $task->id]) ?>
                </button>
            </div>
            <div class="float-right">
                <button type="button" class="btn btn-dark mt-3">
                    <?= $this->Form->postLink(__('Delete Task'), ['action' => 'delete', $task->id], ['confirm' => __('Are you sure you want to delete # {0}?', $task->id)]) ?>

                </button>
            </div>
        </div>
    </div>

</div>

<style>
    a {
        text-decoration: none;
        color: white;
        font-weight: bold;
    }

    a:hover {
        text-decoration: none;
        color: white;
    }
</style>