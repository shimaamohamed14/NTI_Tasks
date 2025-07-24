<?php
include '../db/db.php';
if (isset($_GET['id'])) {
    $id = $_GET['id'];

    $q = "DELETE FROM enrollments WHERE id='$id'";
    if (mysqli_query($conn, $q)) {
        header('Location: enrollments.php');
    }
}
