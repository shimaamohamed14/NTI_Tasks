<?php
session_start();

$name = "shimaa";
$password = "123456";
$message = '';

$logFile = 'logs/login_status.csv';

if (!file_exists($logFile)) {
    file_put_contents($logFile, "Date,User,Status\n");
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $userInput = $_POST['name'];
    $passInput = $_POST['password'];

    $dateNow = date("Y-m-d H:i:s");

    if ($userInput == $name && $passInput == $password) {
        $_SESSION['name'] = $userInput;

        file_put_contents($logFile, "$dateNow,$userInput,success\n", FILE_APPEND);

        header("Location: dashboard.php");
        exit;
    } else {
        file_put_contents($logFile, "$dateNow,$userInput,fail\n", FILE_APPEND);

        $message = '<div class="alert alert-danger" >
            <i class="bi bi-exclamation-triangle-fill text-warning-emphasis"></i>
            login failed
        </div>';
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css">
</head>

<body class="bg-dark">
    <div class="container m-5 p-5">
        <div class="row d-flex justify-content-center">
            <form method="POST" class="was-validated w-50 bg-light p-4 rounded shadow">
                <?= $message ?>

                <div class="mb-3 mt-3">
                    <label class="form-label">User Name</label>
                    <input type="text" class="form-control" required name="name">
                </div>
                <div class="mb-3">
                    <label class="form-label">Password</label>
                    <input type="password" class="form-control" required name="password">
                </div>

                <button type="submit" class="btn btn-primary w-100 mt-3">Login</button>
            </form>
        </div>
    </div>
</body>

</html>