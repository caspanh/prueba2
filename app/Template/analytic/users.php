<div class="page-header">
    <h2><?= t('User repartition') ?></h2>
</div>

<?php if (empty($metrics)): ?>
    <p class="alert"><?= t('Not enough data to show the graph.') ?></p>
<?php else: ?>
    <section id="analytic-user-repartition">

    <div id="chart" data-metrics='<?= json_encode($metrics, JSON_HEX_APOS) ?>'></div>

    <table>
        <tr>
            <th><?= t('User') ?></th>
            <th><?= t('Number of tasks') ?></th>
            <th><?= t('Percentage') ?></th>
        </tr>
        <?php foreach ($metrics as $metric): ?>
        <tr>
            <td>
            <div class="cambiocolor">
                <?= $this->e($metric['user']) ?>
            </div>
            </td>
            <td>
            <div class="cambiocolor">
                <?= $metric['nb_tasks'] ?>
            </div>
            </td>
            <td>
            <div class="cambiocolor">
                <?= n($metric['percentage']) ?>%
            </div>
            </td>
        </tr>
        <?php endforeach ?>
    </table>

    </section>
<?php endif ?>
