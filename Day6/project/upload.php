<?php
 include "nav.php" ;
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $folder = 'logs/' . date('Y-m-d') . '/';
    if (!file_exists($folder))
        mkdir($folder, 0777, true);

    $fileName = basename($_FILES['image']['name']);
    $ext = pathinfo($fileName, PATHINFO_EXTENSION);
    $new_name = uniqid('img_', true) . '.' . $ext;
    $target = $folder . $new_name;
    $allowed = ['image/jpeg', 'image/png'];
    if (in_array($_FILES['image']['type'], $allowed)) {
        move_uploaded_file($_FILES['image']['tmp_name'], $target);
        echo "<div class='alert alert-success'>Uploaded to $target </div>";
       
        session_start();
$name = $_SESSION['name'] ?? 'Guest'; 

$logData = [
    date('Y-m-d H:i:s'),             
    $name,                       
    $_POST['type'] ?? 'unknown',     
    $target,                        
    mime_content_type($target)       
];

$logFile = 'logs/log.csv';
$fileExists = file_exists($logFile);

$fp = fopen($logFile, 'a');
if (!$fileExists) {
    fputcsv($fp, ['Date', 'User', 'Type', 'Path', 'MIME']);
}
fputcsv($fp, $logData);
fclose($fp);
    } 
}

?>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
<div class="container m-5">

    <form method="POST" enctype="multipart/form-data">
  <input class="form-control col-lg-4" type="file" id="formFile" name="image">
            <select name="type" class="form-select my-3">
    <option value="product">Product</option>
    <option value="avatar">Avatar</option>
</select>
            <button class="btn btn-primary" type="submit" id="button-addon2">Button</button>
        </div>
    </form>
</div>