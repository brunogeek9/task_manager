<?php

/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Task $task
 */
?>
<div class="card text-center mx-auto " style="width: 35rem;">
    <div class="card-body">
        <legend class="card-title"><?= __('Editar Tarefa') ?></legend>

        <?= $this->BootsCakeForm->create($task) ?>

        <?php
        echo $this->BootsCakeForm->control('name', ['placeholder' => 'example: learn flutter']);
        echo $this->BootsCakeForm->control('description');
        echo $this->BootsCakeForm->control('done');

        ?>
        <?= $this->BootsCakeForm->control(__('Salvar'), ['type' => 'submit', 'color' => 'primary']); ?>
        <?= $this->BootsCakeForm->end() ?>
    </div>
</div>