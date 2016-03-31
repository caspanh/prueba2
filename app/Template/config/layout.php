<section id="main">
	<div class="page-header">
        <ul>
           <li>
                <i class="fa fa-folder fa-fw"></i>

                <?= $this->url->link(t('Project management'), 'project', 'index') ?>
            </li>
        	<li>
                <i class="fa fa-user fa-fw"></i>
             	<?= $this->url->link(t('User management'), 'user', 'index') ?>
            </li>
            <li>
                <i class="fa fa-user fa-fw"></i>
                <?= $this->url->link(t('Users overview'), 'projectuser', 'managers') ?>

            </li>
            
            <li>
                <i class="fa fa-life-ring fa-fw"></i>
                <?= $this->url->link('Resumen', 'app', 'index', array(), false, '', t('Dashboard')) ?>


            </li>

             <li>
                <i class="fa fa-life-ring fa-fw"></i>

                <?= $this->url->link(t('Gantt chart'), 'gantt', 'projects') ?>

            </li>
        </div>
        </ul>
    

    <section class="sidebar-container" id="config-section">

        <?= $this->render('config/sidebar') ?>

        <div class="sidebar-content">
            <?= $config_content_for_layout ?>
        </div>
    </section>
</section>