<!DOCTYPE html>
<html>
<head>
    <title>New Task</title>
</head>
<body>

<h1>Add New Task</h1>

<nav>
    <a href="<?= base_url('/') ?>">Home</a> |
    <a href="<?= base_url('/tasks') ?>">Task List</a> |
    <a href="<?= base_url('/profile') ?>">Profile</a> |
    <a href="<?= base_url('/about') ?>">About</a> |
    <a href="<?= base_url('/logout') ?>">Logout</a>
</nav>

<?php if (session()->has('errors')): ?>
    <?php foreach (session('errors') as $error): ?>
        <p><?= esc($error) ?></p>
    <?php endforeach; ?>
<?php endif; ?>

<form action="<?= base_url('/tasks/create') ?>" method="post">

    <?= csrf_field() ?>

    <p>
        <label>Task Title</label><br>
        <input type="text" name="title" value="<?= old('title') ?>">
    </p>

    <p>
        <label>Task Date</label><br>
        <input type="date" name="task_date" value="<?= old('task_date') ?>">
    </p>

    <button type="submit">Add Task</button>

</form>

</body>
</html>