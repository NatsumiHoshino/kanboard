<hr/>
Kanboard

<?php if (isset($application_url) && ! empty($application_url)): ?>
    - <?= $this->url->absoluteLink(t('view the task on Kanboard'), 'TaskViewController', 'show', array('task_id' => $task['id'], 'project_id' => $task['project_id'])) ?>
    - <?= $this->url->absoluteLink(t('view the board on Kanboard'), 'BoardViewController', 'show', array('project_id' => $task['project_id'])) ?>
<?php endif ?>
