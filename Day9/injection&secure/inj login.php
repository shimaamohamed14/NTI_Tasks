<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css">

<?php
include 'db.php';

$message = '';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  $email = $_POST['email'];
  $password = $_POST['password'];

  $select = " SELECT * FROM admin WHERE email = '$email' AND password = '$password'";
  $result = mysqli_query($conn, $select);

  if (mysqli_num_rows($result) > 0) {
    $_SESSION['login'] = true;
    header("Location: index.php");
    exit();
  } else {
    $message = '<div class="alert alert-danger">
                          <i class="bi bi-exclamation-triangle-fill"></i> Wrong password or Email
                        </div>';
    $_SESSION['login'] = false;
  }
}
?>

<body class="bg-secondary">
  <div class="container m-5 p-5 bg">
    <div class="row d-flex justify-content-center">
      <form method="POST" class="was-validated w-50 bg-light p-4 rounded ">
        <?= $message ?>

        <div class="mb-3 mt-3">
          <label for="validationServer01" class="form-label">Email address</label>
          <input type="email" class="form-control mb-3" id="validationServer01" required name="email">
        </div>
        <div class="mb-3">
          <label for="validationServer02" class="form-label">Password</label>
          <input type="password" class="form-control mb-3" id="validationServer02" required name="password">
        </div>

        <button type="submit" class="btn btn-primary w-100 mt-3">Login</button>
        <div class="mt-3 d-flex justify-content-center">
        </div>
      </form>
    </div>
  </div>
</body>