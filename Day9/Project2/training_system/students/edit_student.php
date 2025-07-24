<?php
include '../db/db.php';
$id = $_GET['id'];
$s=mysqli_fetch_assoc(mysqli_query($conn, "SELECT * FROM students WHERE id=$id"));
?>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
<body class="bg-secondary ">
    <?php include '../navbar.php'; ?>
    <div class="container p-5">
    <h2>Edit Student</h2>
    <form action="update_student.php?id=<?=$id ?>" method="POST" class="card p-4 shadow-sm">
            <input type="text" class="form-control mb-3" id="name" name="name" value="<?php echo $s['name']; ?>" required>
            <input type="email" class="form-control mb-3" id="email" name="email" value="<?php echo $s['email']; ?>" required>
            <input type="text" class="form-control mb-3" id="phone" name="phone" value="<?php echo $s['phone']; ?>" required>
            <input type="date" class="form-control mb-3" id="dob" name="dob" value="<?php echo $s['date_of_birth']; ?>" required>
        <button type="submit" class="btn btn-primary">Update</button>
    </form>
    </div>
</body>