<?php
$message = '';
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name     = $_POST['name'] ?? '';
    $email    = $_POST['email'] ?? '';
    $password = $_POST['password'] ?? '';
    $gender   = $_POST['gender'] ?? '';
    $job      = $_POST['job'] ?? '';
    $image    = $_FILES['image']['name'] ?? '';




    $message = "<div class='alert alert-success'>successfully register you can login now  </div>";
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Register</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body class="bg-dark text-light">
    <div class="container w-50 mt-5">
        <h2 class="mb-4"> Register</h2>
        <?= $message ?>
        <form method="POST" enctype="multipart/form-data" class="bg-light p-4 rounded text-dark">
            <div class="mb-3">
                <label>name</label>
                <input type="text" name="name" class="form-control" required>
            </div>
            <div class="mb-3">
                <label>email</label>
                <input type="email" name="email" class="form-control" required>
            </div>
            <div class="mb-3">
                <label>password </label>
                <input type="password" name="password" class="form-control" required>
            </div>
            <div class="mb-3">
                <select name="gender" class="form-select">
                    <option value="male">male</option>
                    <option value="female">female</option>
                </select>
            </div>
            <div class="mb-3">
                <select name="job" class="form-select">
                    <option value="developer">developer</option>
                    <option value="designer">designer</option>
                    <option value="accountant">accountant</option>
                </select>
            </div>
            <div class="mb-3">
                <input type="file" name="image" class="form-control">
            </div>
            <button type="submit" class="btn btn-primary w-100">register</button>
        </form>
    </div>
</body>

</html>