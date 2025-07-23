<?php
include '../db/db.php';

    $title = $_POST['title'];
    $description = $_POST['description'];
    $hours = $_POST['hours'];
    $price = $_POST['price'];

    $q = "INSERT INTO courses (title, description, hours, price) VALUES ('$title', '$description', '$hours', '$price')";
    if (mysqli_query($conn, $q)) {
        header('Location: courses.php');
    }
