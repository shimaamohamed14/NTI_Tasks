<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css">

<?php
include 'db.php';
session_start();

$message = ''; 

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $email = $_POST['email'];
    $password = $_POST['password'];

    $select = "SELECT * FROM admin WHERE email = '$email'";
    $result = mysqli_query($conn, $select);
    
    if ( mysqli_num_rows($result) > 0) {
        $fetch = mysqli_fetch_assoc($result);
        
        if (password_verify($password, $fetch['password'])) {
            $_SESSION['login'] = true;
            header("Location: login.php"); 
            exit();
        } else {
            $message = '<div class="alert alert-danger">
                          <i class="bi bi-exclamation-triangle-fill"></i> Wrong password or Email <a href="account.php"  ms-2">Create Account</a>
                        </div>';
            $_SESSION['login'] = false;
        }
    }
    else{
       $message = '<div class="alert alert-danger">
                          <i class="bi bi-exclamation-triangle-fill"></i> Wrong password or Email <a href="account.php"  ms-2">Create Account</a>
                        </div>';
      $_SESSION['login'] = false;
    }
   
}
?>

<body class="bg-dark">
  <div class="container m-5 p-5 ">
    <div class="row d-flex justify-content-center">
      <form method="POST" class="was-validated w-50 bg-secondary p-4 rounded text-white">
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
      </form>
    </div>
  </div>
</body>