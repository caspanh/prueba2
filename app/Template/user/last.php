<div class="page-header">
    <h2><?= t('Last logins') ?></h2>
</div>

<?php if (empty($last_logins)): ?>
    <p class="alert"><?= t('Never connected.') ?></p>
<?php else: ?>
    <table class="table-small table-fixed">
    <tr>
        <th class="column-20"><?= t('Login date') ?></th>
        <th class="column-15"><?= t('Authentication method') ?></th>
        <th class="column-15"><?= t('IP address') ?></th>
        <th><?= t('User agent') ?></th>
    </tr>
    <?php foreach ($last_logins as $login): ?>
    <tr>
        <td><div class="cambiocolor"><?= dt('%B %e, %Y at %k:%M %p', $login['date_creation']) ?></div></td>
        <td><div class="cambiocolor"><?= $this->e($login['auth_type']) ?></div></td>
        <td><div class="cambiocolor"><?= $this->e($login['ip']) ?></div></td>
        <td><div class="cambiocolor"><?= $this->e($login['user_agent']) ?></div></td>
    </tr>
    <?php endforeach ?>
    </table>
<?php endif ?>