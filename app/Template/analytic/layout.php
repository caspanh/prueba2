<section id="main">
    <div class="page-header">
        
        <ul>
        <span class="cambio">
            <span class="dropdown">
              <span>
                    <i class="fa fafacaret-down"></i> <a href="#" class="dropdown-menu"><?= t('Actions') ?></a>

                    <ul>
                        <?= $this->render('project/dropdown', array('project' => $project)) ?>
                    </ul>
                </span>
            </span>
            </span>

            
            <li>
                <i class="fa fa-th fa-fw"></i>
                <?= $this->url->link(t('Back to the board'), 'board', 'show', array('project_id' => $project['id'])) ?>
            </li>
            <li>
                <i class="fa fa-calendar fa-fw"></i>
                <?= $this->url->link(t('Back to the calendar'), 'calendar', 'show', array('project_id' => $project['id'])) ?>
            </li>
            <?php if ($this->user->hasProjectAccess('project', 'edit', $project['id'])): ?>
            <li>
                <i class="fa fa-cog fa-fw"></i>
                <?= $this->url->link(t('Project settings'), 'project', 'show', array('project_id' => $project['id'])) ?>
            </li>
            <?php endif ?>
            <li>
                <i class="fa fa-folder fa-fw"></i>
                <?= $this->url->link(t('All projects'), 'project', 'index') ?>
            </li>
            <li>
<<<<<<< HEAD
                <i class="fa fa-th fa-fw"></i>
                <?= $this->url->link('Resumen', 'app', 'index', array(), false, '', t('Dashboard')) ?>
=======
                <i class="fa fa-life-ring fa-fw"></i>
                <a href="/kanboard.2/?controller=app&amp;action=index" class="" title="">Resumen</a>
>>>>>>> abced81603aa8533e144f9ec611d15b58df2f921
            </li>

            </div>
        </ul>
    <section class="sidebar-container" id="analytic-section">

        <?= $this->render('analytic/sidebar', array('project' => $project)) ?>

        <div class="sidebar-content">
            <?= $content_for_sublayout ?>
        </div>
    </section>
</section>

<?= $this->asset->js('assets/js/vendor/d3.v3.min.js') ?>
<?= $this->asset->js('assets/js/vendor/c3.min.js') ?>