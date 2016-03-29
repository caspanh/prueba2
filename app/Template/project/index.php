<section id="main">
    <div class="page-header">
        <ul>
            <?php if ($this->user->hasAccess('project', 'create')): ?>
                <li><i class="fa fa-plus fa-fw"></i><?= $this->url->link(t('New project'), 'project', 'create') ?></li>
            <?php endif ?>
            <li><i class="fa fa-lock fa-fw"></i><?= $this->url->link(t('New private project'), 'project', 'createPrivate') ?></li>
            <?php if ($this->user->hasAccess('projectuser', 'managers')): ?>
                <li><i class="fa fa-user fa-fw"></i><?= $this->url->link(t('Users overview'), 'projectuser', 'managers') ?></li>
            <?php endif ?>
            <?php if ($this->user->hasAccess('gantt', 'projects')): ?>
                <li><i class="fa fa-sliders fa-fw"></i><?= $this->url->link(t('Projects Gantt chart'), 'gantt', 'projects') ?></li>
            <?php endif ?>
        </ul>
    </div>
    <?php if ($paginator->isEmpty()): ?>
        <p class="alert"><?= t('No project') ?></p>
    <?php else: ?>
        <table class="table-stripped table-small">
            <tr>
                <th class="column-3"><?= $paginator->order(t('Id'), 'id') ?></th>
                <th class="column-5"><?= $paginator->order(t('Status'), 'is_active') ?></th>
                <th class="column-15"><?= $paginator->order(t('Project'), 'name') ?></th>
                <th class="column-8"><?= $paginator->order(t('Start date'), 'start_date') ?></th>
                <th class="column-8"><?= $paginator->order(t('End date'), 'end_date') ?></th>
                <?php if ($this->user->hasAccess('projectuser', 'managers')): ?>
                    <th class="column-12"><?= t('Managers') ?></th>
                    <th class="column-12"><?= t('Members') ?></th>
                <?php endif ?>
                <th><?= t('Columns') ?></th>
            </tr>
            <?php foreach ($paginator->getCollection() as $project): ?>
            <tr>
                <td>
                    <?= $this->url->link('#'.$project['id'], 'board', 'show', array('project_id' => $project['id']), false, 'dashboard-table-link') ?>
                </td>
                <td>
                    <?php if ($project['is_active']): ?>
                        <?= t('Active') ?>
                    <?php else: ?>
                        <?= t('Inactive') ?>
                    <?php endif ?>
                </td>
                <td>
                 <span class="cambiocolor">
                    <?= $this->url->link('<i class="fa fa-th"></i>', 'board', 'show', array('project_id' => $project['id']), false, 'dashboard-table-link', t('Board')) ?>
                    <?= $this->url->link('<i class="fa fasliders fa-fw"></i>', 'gantt', 'project', array('project_id' => $project['id']), false, 'dashboard-table-link', t('Gantt chart')) ?>

                    <?php if ($project['is_public']): ?>
                        <i class="fa fa-share-alt fa-fw" title="<?= t('Shared project') ?>"></i>
                    <?php endif ?>
                    <?php if ($project['is_private']): ?>
                        <i class="fa falock fa-fw" title="<?= t('Private project') ?>"></i>
                    <?php endif ?>

                    <?php if (! empty($project['description'])): ?>
                        <span class="tooltip" title='<?= $this->e($this->text->markdown($project['description'])) ?>'>
                            <i class="fa fa-info-circle"></i>
                        </span>
                    <?php endif ?>

                    <?= $this->url->link($this->e($project['name']), 'project', 'show', array('project_id' => $project['id'])) ?>
                </span>
                </td>
                <td>
                 <div class="cambiocolor">
                    <?= $project['start_date'] ?>
                </div>
                </td>
                <td>
                 <div class="cambiocolor">
                    <?= $project['end_date'] ?>
                </div>
                </td>
                <?php if ($this->user->hasAccess('projectuser', 'managers')): ?>
                    <td>
                     <div class="cambiocolor">
                        <?= $this->render('project/roles', array('roles' => $project, 'role' => \Kanboard\Core\Security\Role::PROJECT_MANAGER)) ?>
                    </div>
                    </td>
                    <td>
                     <div class="cambiocolor">
                        <?php if ($project['is_everybody_allowed'] == 1): ?>
                            <?= t('Everybody') ?>
                        <?php else: ?>
                            <?= $this->render('project/roles', array('roles' => $project, 'role' => \Kanboard\Core\Security\Role::PROJECT_MEMBER)) ?>
                        <?php endif ?>
                    </div>
                    </td>
                <?php endif ?>
                <td class="dashboard-project-stats">
                    <?php foreach ($project['columns'] as $column): ?>
                        <strong title="<?= t('Task count') ?>"><?= $column['nb_tasks'] ?></strong>
                        <span><?= $this->e($column['title']) ?></span>
                    <?php endforeach ?>
                </td>
            </tr>
            <?php endforeach ?>
        </table>

        <?= $paginator ?>
    <?php endif ?>
</section>
