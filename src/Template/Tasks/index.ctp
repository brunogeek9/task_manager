<?php

/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Task[]|\Cake\Collection\CollectionInterface $tasks
 */
?>

<a href="tasks/add" class="btn btn-success btn-lg btn-block text-center">
    Create New
</a>
<div>

    <div class="card float-left mt-4 mytable">
        <h3><?= __('completed tasks') ?></h3>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col"><?= $this->Paginator->sort('name') ?></th>


                    <th scope="col" class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($tasks as $incp) : ?>
                    <tr>
                        <?php if ($incp->done == true) : ?>
                            <td><?= h($incp->name) ?></td>



                            <td class="actions">
                                <button class="btn btn-primary ">
                                    <?= $this->Html->link(__('Detail'), ['action' => 'view', $incp->id]) ?>
                                </button>
                                <button class="btn btn-warning">
                                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $incp->id]) ?>
                                </button>
                                <button class="btn btn-danger">
                                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $incp->id], ['confirm' => __('Are you sure you want to delete # {0}?', $incp->id)]) ?>
                                </button>
                            </td>
                        <?php endif; ?>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>

    <div class="card float-right mt-4 mytable">
        <h3><?= __('incompleted tasks') ?></h3>
        <table class="table table-striped float-right" style="width: 30rem;">
            <thead>
                <tr>
                    <th scope="col"><?= $this->Paginator->sort('name') ?></th>
                    <th scope="col" class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($incompleted as $incp) : ?>
                    <tr>
                        <td><?= h($incp->name) ?></td>
                        <td class="actions">
                            <button class="btn btn-primary">
                                <?= $this->Html->link(__('Detail'), ['action' => 'view', $incp->id]) ?>
                            </button>
                            <button class="btn btn-warning">
                                <?= $this->Html->link(__('Edit'), ['action' => 'edit', $incp->id]) ?>
                            </button>
                            <button class="btn btn-danger">
                                <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $incp->id], ['confirm' => __('Are you sure you want to delete # {0}?', $incp->id)]) ?>
                            </button>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>

</div>
<style>
    strong {
        color: black;
    }

    a {
        text-decoration: none;
        color: black;
    }

    a:hover {
        text-decoration: none;
        color: red;
    }

    button a {
        text-decoration: none;
        color: white;
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

    button a:hover {
        text-decoration: none;
        color: white;
    }

    /* limitando o tamanho das colunas da tabela */
    td {
        max-width: 10em;
        overflow: hidden;
        text-overflow: ellipsis;
        white-space: nowrap;
        font-size: 1em;
    }

    .mytable {
        width: 33rem;
    }

    h3 {
        background-color: #343a40;
        font-weight: bold;
        color: white;
    }
</style>