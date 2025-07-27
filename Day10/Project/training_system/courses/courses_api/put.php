<?php
header("Content-Type: application/json");
include "../../dp.php";

$data = json_decode(file_get_contents("php://input"), true);

if (isset($data['title']) && isset($data['id']) && isset($data['description']) && isset($data['hours']) && isset($data['price'])) {
    $id = $data['id'];
    $title = $data['title'];
    $description = $data['description'];
    $hours = $data['hours'];
    $price = $data['price'];

    $stmt = mysqli_prepare($conn, "UPDATE courses SET title=?, description=?, hours=?, price=? WHERE id=?");
    mysqli_stmt_bind_param($stmt, "ssidi", $title, $description, $hours, $price, $id);

    if (mysqli_stmt_execute($stmt)) {
        echo json_encode(["status" => "updated"]);
    } else {
        echo json_encode(["status" => "error", "message" => mysqli_error($conn)]);
    }

    mysqli_stmt_close($stmt);

} else {
    echo json_encode(["status" => "error", "message" => "missing required fields"]);
}
?>
