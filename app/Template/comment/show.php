<div class="comment <?= isset($preview) ? 'comment-preview' : '' ?>" id="comment-<?= $comment['id'] ?>">

    <p class="comment-title">
        <?php if (! empty($comment['email'])): ?>
            <?= $this->user->avatar($comment['email'], $comment['name'] ?: $comment['username']) ?>
        <?php endif ?>

        <?php if (! empty($comment['username'])): ?>
            <span class="comment-username"><?= $this->e($comment['name'] ?: $comment['username']) ?></span> @
        <?php endif ?>

        <span class="comment-date"><?= dt('%B %e, %Y at %k:%M %p', $comment['date_creation']) ?></span>
    </p>
    <div class="comment-inner">

        <?php if (! isset($preview)): ?>
        <ul class="comment-actions">
            <li><span class="cambiocolor"><a href="#comment-<?= $comment['id'] ?>"><?= t('link') ?></a></li>
            <?php if ($editable && ($this->user->isAdmin() || $this->user->isCurrentUser($comment['user_id']))): ?></span>
                <li>
                    <span class="cambiocolor"><?= $this->url->link(t('remove'), 'comment', 'confirm', array('task_id' => $task['id'], 'project_id' => $task['project_id'], 'comment_id' => $comment['id'])) ?></span>
                </li>
                <li>
                   <span class="cambiocolor"> <?= $this->url->link(t('edit'), 'comment', 'edit', array('task_id' => $task['id'], 'project_id' => $task['project_id'], 'comment_id' => $comment['id'])) ?></span>
                </li>
            <?php endif ?>
        </ul>
        <?php endif ?>

        <div class="markdown">
            <?php if (isset($is_public) && $is_public): ?>
                <?= $this->text->markdown(
                    $comment['comment'],
                    array(
                        'controller' => 'task',
                        'action' => 'readonly',
                        'params' => array(
                            'token' => $project['token']
                        )
                    )
                ) ?>
            <?php else: ?>
                <?= $this->text->markdown(
                    $comment['comment'],
                    array(
                        'controller' => 'task',
                        'action' => 'show',
                        'params' => array(
                            'project_id' => $task['project_id']
                        )
                    )
                ) ?>
            <?php endif ?>
        </div>

    </div>
</div>