<?php
include '../db/db.php';

    $grade = $_POST['grade'];
    $student_id = $_POST['student_id'];
    $course_id = $_POST['course_id'];   
    $enrollment_date = date('Y-m-d H:i:s');
    
    $q = "INSERT INTO enrollments (student_id, course_id, grade, enrollment_date) VALUES ('$student_id', '$course_id', '$grade', '$enrollment_date')";
    if (mysqli_query($conn, $q)) {
        header('Location: enrollments.php');
    }
