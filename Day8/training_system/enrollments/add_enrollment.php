<?php include '../db/db.php'; ?>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
<body class="bg-secondary">
    <?php include '../navbar.php'; ?>
    <div class="container  p-5 mt-5">
        <h2>Add New Enrollment</h2>
        <form action="insert_enrollment.php" method="POST" class="card p-4 shadow-sm">
            <select name="student_id" id="student_id" class="form-control mb-3" required>
                <option value="">Select Student</option>
                <?php
                $students = mysqli_query($conn, "SELECT * FROM students");
                while ($row = mysqli_fetch_assoc($students)) {
                    echo "<option value='{$row['id']}'>{$row['name']}</option>";
                }
                ?>
            </select>

            <select name="course_id" id="course_id" class="form-control mb-3" required>
                <option value="">Select Course</option>
                <?php
                $courses = mysqli_query($conn, "SELECT * FROM courses");
                while ($row = mysqli_fetch_assoc($courses)) {
                    echo "<option value='{$row['id']}'>{$row['title']}</option>";
                }
                ?>
            </select>

            <input type="number" placeholder="Grade" class="form-control mb-3" id="grade" name="grade" required>
            <button type="submit" class="btn btn-primary">Add Enrollment</button>
        </form>
    </div>
</body>