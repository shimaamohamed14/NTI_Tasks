<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
<?php

if(session_status() !== PHP_SESSION_ACTIVE) {
    session_start();
}
$goto=(pathinfo(getcwd())['basename'] == 'training_system') ? "" : "../";
?>

<nav class="navbar navbar-expand-lg bg-body-tertiary bg-dark">
  <div class="container-fluid">
    <a class="navbar-brand text-light" href="<?=$goto?>index.php">Training System</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
      <div class="navbar-nav">
        <a class="nav-link active text-light" aria-current="page" href="<?=$goto?>students/students.php">Students</a>
        <a class="nav-link text-light" href="<?=$goto?>courses/courses.php">Courses</a>
        <a class="nav-link text-light" href="<?=$goto?>enrollments/enrollments.php">Enrollments</a>
        <a class="nav-link text-light" href="<?=$goto?>login.php">Logout</a>
      </div>
    </div>
  </div>
</nav>
