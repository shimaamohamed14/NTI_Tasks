<?php
include 'db/db.php';
include 'navbar1.php';

$students_total = mysqli_fetch_assoc(mysqli_query($conn, "SELECT COUNT(*) AS total_students FROM students"))['total_students'];
$courses_total = mysqli_fetch_assoc(mysqli_query($conn, "SELECT COUNT(*) AS total_courses FROM courses"))['total_courses'];
$enrollments_total = mysqli_fetch_assoc(mysqli_query($conn, "SELECT COUNT(*) AS total_enrollments FROM enrollments"))['total_enrollments'];
?>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
<body class="bg-secondary">
    
<div class="container m-5 ">
    <div class="row ">
       
  <div class="col-lg-4">
    <div class="card p-3">
      <div class="card-body">
        <h5 class="card-title">Students</h5>
        <p class="card-text">Total Students: <?= $students_total ?></p>
        <a href="students/students.php" class="btn btn-primary">View Students</a>
      </div>
    </div>
  </div>

  <div class="col-lg-4">
    <div class="card p-3">
      <div class="card-body">
        <h5 class="card-title">Courses</h5>
        <p class="card-text">Total Courses: <?= $courses_total ?></p>
        <a href="courses/courses.php" class="btn btn-primary">View Courses</a>
      </div>
    </div>
  </div>

  <div class="col-lg-4">
    <div class="card p-3">
      <div class="card-body">
        <h5 class="card-title">Enrollments</h5>
        <p class="card-text">Total Enrollments: <?= $enrollments_total ?></p>
        <a href="enrollments/enrollments.php" class="btn btn-primary">View Enrollments</a>
      </div>
    </div>
  </div>

</div>
</div>
</body>