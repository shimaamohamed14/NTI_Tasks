<?php
include '../db/db.php';
?>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
<body class="bg-secondary">
    <?php include '../navbar.php'; ?>
    <div class="container p-5">
    <h2>Add New Student</h2>
    <form action="insert_student.php" method="POST" class="card p-4 shadow-sm">
            <input type="text" class="form-control mb-3" id="name" name="name" placeholder="Name" required>
            <input type="email" class="form-control mb-3" id="email" name="email" placeholder="Email" required>
            <input type="text" class="form-control mb-3" id="phone" name="phone" placeholder="Phone" required>
            <input type="date" class="form-control mb-3" id="dob" name="dob" placeholder="Date of Birth" required>
        <button type="submit" class="btn btn-primary">Add Student</button>
    </form>
    </div>
</body>