<?php
include '../db/db.php';

    $id = $_GET['id'];
    $title = $_POST['title'];
    $description = $_POST['description'];
    $hours = $_POST['hours'];
    $price = $_POST['price'];

    $q = "UPDATE courses SET title='$title', description='$description', hours='$hours', price='$price' WHERE id='$id'";
    if (mysqli_query($conn, $q)) {
        header('Location: courses.php');
    }
