<?php
header("Content-Type: application/json");
include "../../dp.php";
$data = json_decode(file_get_contents("php://input"), true);

if (isset($data['title']) && isset($data['description']) && isset($data['hours']) && isset($data['price'])) {
    $title = $data['title'];
    $description = $data['description'];
    $hours = $data['hours'];
    $price = $data['price'];

    $stmt = mysqli_prepare($conn, "INSERT INTO courses (title, description, hours, price) VALUES (?, ?, ?, ?)");
    mysqli_stmt_bind_param($stmt, "ssdd", $title, $description, $hours, $price);

    if (mysqli_stmt_execute($stmt)) {
        echo json_encode(["status" => "inserted"]);
    } else {
        echo json_encode(["status" => "error", "message" => mysqli_error($conn)]);
    }

    mysqli_stmt_close($stmt);

} else {
    echo json_encode(["status" => "error", "message" => "missing required fields"]);
}
?>