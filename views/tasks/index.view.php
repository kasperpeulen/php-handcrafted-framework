<?php
/**
 * Show all tasks.
 *
 * @var Task[] $tasks
 */
?>

<?= view('partials/head') ?>

<ul>
    <?php foreach ($tasks as $task): ?>
        <?php if ($task->completed): ?>
            <li>
                <del>
                    <?= $task->description; ?>
                </del>
            </li>
        <?php else: ?>
            <li><?= $task->description; ?></li>
        <?php endif; ?>

    <?php endforeach; ?>
</ul>

<?= view('partials/footer') ?>