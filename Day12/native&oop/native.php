<?php
$conn = mysqli_connect("localhost", "root", "", "training_system");
$email = "shimaa@gmail.com ";
$sql = "SELECT * from students where email =?";
$stmt = mysqli_prepare($conn, $sql);
mysqli_stmt_bind_param($stmt, "s", $email);
mysqli_execute($stmt);
$result = mysqli_stmt_get_result($stmt);
while ($row = mysqli_fetch_assoc($result)) {
    echo $row['name'];
}
