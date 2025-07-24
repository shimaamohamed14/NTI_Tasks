<?php
include '../db/db.php';

    $id = $_GET['id'];
    $grade = $_POST['grade'];

    $sql = "UPDATE enrollments SET grade='$grade' WHERE id=$id";
    if (mysqli_query($conn, $sql)) {
        header('Location: enrollments.php');
    }
