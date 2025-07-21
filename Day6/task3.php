<?php
session_start();

if ($_SERVER['REQUEST_METHOD'] === 'GET' && isset($_GET['email'], $_GET['password'])) {
    $_SESSION['users'][] = [
        'email' => $_GET['email'],
        'password' => $_GET['password']
    ];
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>task 3</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <div class="container mt-5">
        <form method="GET">
            <input type="email" name="email" class="form-control mb-3" >
            <input type="password" name="password" class="form-control mb-3">
            <button type="submit" class="btn btn-success w-100 mb-3">Login</button>
        </form>

        <a href="task3.php?act=clear" class="btn btn-warning w-100 mb-3">Clear Session</a>
        <a href="task3.php?act=remove" class="btn btn-danger w-100 mb-3">Remove Last</a>

        <?php if (isset($_SESSION['users'])): ?>
            <table class="table table-bordered mt-4">
                <thead>
                    <tr>
                        <th>Email</th>
                        <th>Password</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($_SESSION['users'] as $user): ?>
                        <tr>
                            <td><?= $user['email'] ?></td>
                            <td><?= $user['password'] ?></td>
                        </tr>
                    <?php endforeach ?>
                </tbody>
            </table>
        <?php endif ?>
    </div>
</body>

</html>
<?php

if (isset($_GET['act'])) {
    $action = $_GET['act'];

    if ($action === "clear") {
        session_unset();
        session_destroy();

        session_start();

        header("Location: task3.php");
        exit;
    } elseif ($action === "remove") {
        if (!empty($_SESSION['users'])) {
            array_pop($_SESSION['users']);
        }
        header("Location: task3.php");
        exit;
    }
}
?>