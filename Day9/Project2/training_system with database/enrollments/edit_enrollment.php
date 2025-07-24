<?php
include '../db/db.php';
$id = $_GET['id'];
$s=mysqli_fetch_assoc(mysqli_query($conn, "SELECT * FROM students WHERE id=$id"));
?>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
<body class="bg-secondary ">
    <?php include '../navbar.php'; ?>
    <div class="container p-5">
    <h2>Edit Grade</h2>
    <form action="update_enrollment.php?id=<?=$id ?>" method="POST" class="card p-4 shadow-sm">
            <input type="number" class="form-control mb-3" id="grade" name="grade" value="<?php echo $s['grade']; ?>" required>
             <button type="submit" class="btn btn-primary">Update</button>
    </form>
    </div>
</body>