<section id="main">
    <div class="page-header">
        <ul>
            <li>
            <span class="dropdown">
                <span>
                    <i class="fa facaret-down"></i> <a href="#" class="dropdown-menu"><?= t('Actions') ?></a>
                    <ul>
                        <?= $this->render('project/dropdown', array('project' => $project)) ?>
                    </ul>
                </span>
            </span>
        </li>
            <li>
                <i class="fa fa-th fa-fw"></i>
                <?= $this->url->link(t('Back to the board'), 'board', 'show', array('project_id' => $project['id'])) ?>
            </li>
            <li>
                <i class="fa fa-calendar fa-fw"></i>
                <?= $this->url->link(t('Back to the calendar'), 'calendar', 'show', array('project_id' => $project['id'])) ?>
            </li>
            <li>
                <i class="fa fa-folder fa-fw"></i>
                <?= $this->url->link(t('All projects'), 'project', 'index') ?>
            </li>

             <li>
                <i class="fa fa-user fa-fw"></i>
                <?= $this->url->link(t('Project management'), 'project', 'index') ?>
            </li>
            <li>
                <i class="fa fa-life-ring fa-fw"></i>
                <?= $this->url->link('Resumen', 'app', 'index', array(), false, '', t('Dashboard')) ?>

            </li>
        </ul>
    </div>
    <section class="sidebar-container">

        <?= $this->render($sidebar_template, array('project' => $project)) ?>

        <div class="sidebar-content">
            <?= $project_content_for_layout ?>
        </div>
    </section>
</section>