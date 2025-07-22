<?php
include '../db/db.php';

    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $dob = $_POST['dob'];

    $q = "INSERT INTO students ( name , email, phone, date_of_birth) VALUES ('$name', '$email', '$phone', '$dob')";
    if (mysqli_query($conn, $q)) {
        header('Location: students.php');
    }
