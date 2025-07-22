<?php
session_start();
$name = $_SESSION['name'];
?>

<!DOCTYPE html>
<html lang="ar">
<head>
    <meta charset="UTF-8">
    <title>Dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css">
    <style>
        a {
            display: inline;
            border-style: none;
        }
    </style>
</head>
<body>

    <?php include "nav.php"; ?>

    <div class="container mt-5">
        <div class='alert alert-success mb-5'>
            <i class='bi bi-check-square-fill mx-2 text-success'></i>
            <strong>Welcome to your dashboard, <?=$name?>!</strong>
        </div>
    </div>

</body>
</html>