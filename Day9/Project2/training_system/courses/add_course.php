<?php
include '../db/db.php';
?>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
<body class="bg-secondary">
    <?php include '../navbar.php'; ?>
    <div class="container p-5">
    <h2>Add New Course</h2>
    <form action="insert_course.php" method="POST" class="card p-4 shadow-sm m-3">
            <input type="text" class="form-control mb-3" id="title" name="title" placeholder="Course Title" required>
            <textarea class="form-control mb-3" id="description" name="description" placeholder="Course Description" required></textarea>
            <input type="number" class="form-control mb-3" id="hours" name="hours" placeholder="Course Hours" required>
            <input type="number" class="form-control mb-3" id="price" name="price" placeholder="Course Price" required>
        <button type="submit" class="btn btn-primary">Add Course</button>
    </form>
    </div>
</body>