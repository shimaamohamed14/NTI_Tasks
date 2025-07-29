<?php

$conn = new mysqli("localhost", "root", "", "training_system");
$email = "shimaa@gmail.com ";
$sql = "SELECT * from students where email =?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("s", $email);
$stmt->execute();
$result = $stmt->get_result();
while ($row = $result->fetch_assoc()) {
    echo $row['name'];
}
