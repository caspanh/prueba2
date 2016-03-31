<div class="page-header">
    <h2><?= t('Duplicate a task') ?></h2>
</div>

<div class="confirm">
    <p class="alert alert-info">
        <?= t('Do you really want to duplicate this task?') ?>
    </p>

    <div class="form-actions">
        <?= $this->url->link(t('Yes'), 'taskduplication', 'duplicate', array('task_id' => $task['id'], 'project_id' => $task['project_id'], 'confirmation' => 'yes'), true, 'btn btn-red') ?>
    <div class="botoncancel">
        <?= $this->url->link(t('cancel'), 'task', 'show', array('task_id' => $task['id'], 'project_id' => $task['project_id'])) ?>
    </div>
    </div>
</div>