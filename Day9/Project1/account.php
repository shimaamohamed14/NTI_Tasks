<?php
include 'db.php';
session_start();

$message = '';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $Name = $_POST['Name'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    $select = "SELECT * FROM admin WHERE email = '$email'";
    $result = mysqli_query($conn, $select);

    if (mysqli_num_rows($result) == 0) {
        $logpass = password_hash($password, PASSWORD_DEFAULT);
        $insert = "INSERT INTO admin (username, email, password) VALUES ('$Name', '$email', '$logpass')";

        if (mysqli_query($conn, $insert)) {
            $message = '<div class="alert alert-success"><i class="bi bi-check-circle-fill"></i> Registered successfully. 
            You can now <a href="form.php">login</a>.</div>';
        }
    }
}
?>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css">

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

<body class="p-5 bg-dark">


    <div class="d-flex justify-content-center">

        <div class="container m-5 p-5 w-100">
            <div class="row ">
                <form method="POST" class='' enctype="multipart/form-data" class="">
                    <?= $message ?>
                    <div class="">
                        <label class="form-label text-light">Name</label>
                        <input type="text" class="form-control mb-3" name="Name" required>
                    </div>
                    <div class="">
                        <label class="form-label text-light">Email address</label>
                        <input type="text" class="form-control mb-3" name="email" required>
                    </div>
                    <div class="">
                        <label class="form-label text-light">Password</label>
                        <input type="password" class="form-control mb-3" name="password" required>
                    </div>

                    <button type="submit" class="btn btn-success w-100 ">Sign UP</button>

                </form>
            </div>
        </div>
    </div>
</body>