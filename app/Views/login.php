<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
</head>
<body>

<h1>Login</h1>

<?php if (session()->has('error')): ?>
    <p><?= esc(session('error')) ?></p>
<?php endif; ?>

<form action="<?= base_url('/login') ?>" method="post">

    <?= csrf_field() ?>

    <p>
        <label>Username</label><br>
        <input type="text" name="username" value="<?= old('username') ?>">
    </p>

    <p>
        <label>Password</label><br>
        <input type="password" name="password">
    </p>

    <button type="submit">Login</button>

</form>

</body>
</html>