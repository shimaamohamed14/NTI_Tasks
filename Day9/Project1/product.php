<head>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

</head>
<?php
include 'db.php';
session_start();
if (!isset($_SESSION['login']) || $_SESSION['login'] !== true) {
    header("Location: form.php");
    exit;
}


?>

<body class="bg-dark">

    <div class="container mt-5 w-50">

        <form class="row p-5" method="POST" enctype="multipart/form-data">

            <div class="col-md-6">
                <label class="form-label text-light">Product Name</label>
                <input type="text" class="form-control mb-3" name="proName" required>

            </div>

            <div class="col-md-6">
                <label class="form-label text-light ">Description</label>

                <input type="tel" class="form-control mb-5" name="description" required>

            </div>
            <div class="col-md-12">

                <label class="form-label text-light ">Product images</label>

                <input class="form-control mb-5" type="file" id="formFile" name="image" required>
            </div>
            <div class="d-flex justify-content-center">
                <button type="submit" class="btn btn-primary w-50 mb-3 ">Add Product</button>
            </div>
        </form>
        <hr class="text-white mb-5">

        <?php

        $name = $_POST['proName'] ?? '';
        $description = $_POST['description'] ?? '';

        if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_FILES['image'])) {
            echo "<div class='row'>";

            $filename = $_FILES['image']['name'];
            $tmpName = $_FILES['image']['tmp_name'];

            $uniqueName = uniqid() . '_' . basename($filename);
            $Path = "img/$uniqueName";

            if (move_uploaded_file($tmpName, $Path)) {
                echo "     
                        <div class='row d-flex justify-content-center'>
                <div class='col-md-4 mb-4 '>
                    <div class='card img-thumbnail bg-secondary'>
                        <img src='$Path' class='card-img-top' alt='Product Image'>
                        <div class='card-body'>
                            <h5 class='card-title text-white'>$name</h5>
                            <p class='card-text text-light'>$description</p>
                        </div>
                    </div>
                </div>";
            }

            $encode = base64_encode($uniqueName);

            $insert = "INSERT INTO products (name, description, imagePath) VALUES ('$name', '$description', '$encode')";
            $result = mysqli_query($conn, $insert);
        }
        ?>



    </div>
</body>