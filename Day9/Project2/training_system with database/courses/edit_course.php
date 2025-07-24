<?php
include '../db/db.php';
$id = $_GET['id'];
$s=mysqli_fetch_assoc(mysqli_query($conn, "SELECT * FROM courses WHERE id='$id'"));
?>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
<body class="bg-secondary">
    <?php include '../navbar.php'; ?>
    <div class="container p-5">
    <h2>Edit Course</h2>
    <form action="update_course.php?id=<?=$id ?>" method="POST" class="card p-4 shadow-sm">
            <input type="text" class="form-control mb-3" id="title" name="title" value="<?php echo $s['title']; ?>" required>
            <textarea class="form-control mb-3" id="description" name="description" required><?php echo $s['description']; ?></textarea>
            <input type="number" class="form-control mb-3" id="hours" name="hours" value="<?php echo $s['hours']; ?>" required>
            <input type="number" class="form-control mb-3" id="price" name="price" value="<?php echo $s['price']; ?>" required>
        <button type="submit" class="btn btn-primary">Update</button>
    </form>
    </div>
</body>