<section id="main">
    <div class="page-header page-header-mobile">
        <ul>
            <?php if ($this->user->hasAccess('project', 'create')): ?>
            <li>
                    <i class="fa fa-plus fa-fw"></i>
                    <?= $this->url->link(t('New project'), 'project', 'create') ?>
            </li>
            <?php endif ?>
            <li>
                <i class="fa fa-lock fa-fw"></i>
                <?= $this->url->link(t('New private project'), 'project', 'createPrivate') ?>
            </li>
            <li>
                <i class="fa fa-search fa-fw"></i>
                <?= $this->url->link(t('Search'), 'search', 'index') ?>
            </li>
            <li>
                <i class="fa fa-folder fa-fw"></i>
                <?= $this->url->link(t('Project management'), 'project', 'index') ?>
            </li>
            
                <li>
                    <i class="fa fa-user fa-fw"></i>
                    <?= $this->url->link(t('User management'), 'user', 'index') ?>
                </li>

                <li>
                    <i class="fa fa-cog fa-fw"></i>
                    <?= $this->url->link (t('Settings'), 'config', 'index') ?>
                </li>
            

            <?php if ($this->user->hasAccess('user', 'index')): ?>
            

            <?php endif ?>
        </ul>
    </div>
    <section class="sidebar-container" id="dashboard">

        <?= $this->render('app/sidebar', array('user' => $user)) ?>
        <div class="sidebar-content">
            <?= $content_for_sublayout ?>
        </div>
    </section>
</section>