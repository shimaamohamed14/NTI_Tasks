<?php
include '../db/db.php';

$id = $_GET['id'];
$q = "DELETE FROM courses WHERE id='$id'";
if (mysqli_query($conn, $q)) {
    header('Location: courses.php');
}
