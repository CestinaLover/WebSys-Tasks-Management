<!DOCTYPE html>
<html>
<head>
    <title>Tasks for Today</title>
</head>
<body>

<h1>Tasks for Today</h1>

<nav>
    <a href="<?= base_url('/') ?>">Home</a> |
    <a href="<?= base_url('/tasks') ?>">Task List</a> |
    <a href="<?= base_url('/profile') ?>">Profile</a> |
    <a href="<?= base_url('/about') ?>">About</a>
</nav>

<h2>Today's Tasks</h2>

<?php foreach ($tasks as $task): ?>
    <p>
        <strong><?= esc($task['title']) ?></strong><br>
        Status: <?= esc($task['status']) ?><br>
        Date: <?= esc($task['task_date']) ?>
    </p>
<?php endforeach; ?>

</body>
</html>