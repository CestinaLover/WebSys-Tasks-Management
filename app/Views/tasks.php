<!DOCTYPE html>
<html>
<head>
    <title>Task List</title>
</head>
<body>

<h1>Task List</h1>

<nav>
    <a href="<?= base_url('/') ?>">Home</a> |
    <a href="<?= base_url('/tasks') ?>">Task List</a> |
    <a href="<?= base_url('/profile') ?>">Profile</a> |
    <a href="<?= base_url('/about') ?>">About</a>
</nav>

<?php if (session()->get('isLoggedIn')): ?>
    <p>
        <a href="<?= base_url('/tasks/new') ?>">Add New Task</a> |
        <a href="<?= base_url('/logout') ?>">Logout</a>
    </p>
<?php else: ?>
    <p>
        <a href="<?= base_url('/login') ?>">Login</a>
    </p>
<?php endif; ?>

<h2>All Tasks</h2>

<table border="1">
    <tr>
        <th>Title</th>
        <th>Status</th>
        <th>Task Date</th>
        <th>Created At</th>

        <?php if (session()->get('isLoggedIn')): ?>
            <th>Action</th>
        <?php endif; ?>
    </tr>

    <?php foreach ($tasks as $task): ?>
        <tr>
            <td><?= esc($task['title']) ?></td>
            <td><?= esc($task['status']) ?></td>
            <td><?= esc($task['task_date']) ?></td>
            <td><?= esc($task['created_at']) ?></td>

            <?php if (session()->get('isLoggedIn')): ?>
                <td>
                    <a href="<?= base_url('/tasks/edit/' . $task['id']) ?>">Edit</a> |
                    <a href="<?= base_url('/tasks/delete/' . $task['id']) ?>">Delete</a>
                </td>
            <?php endif; ?>
        </tr>
    <?php endforeach; ?>

</table>

</body>
</html>