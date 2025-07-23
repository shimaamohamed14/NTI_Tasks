<?php
include '../db/db.php';
?>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
<body>

    <?php include '../navbar.php'; ?>
    <div class="container p-5">
    <h2>Enrollment List</h2>
    <a href="add_enrollment.php" class="btn btn-success mb-3">Add Enrollment</a>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>Student</th>
                <th>Course</th>
                <th>Grade</th>
                <th>Date</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $q = "SELECT enrollments.id ,students.name AS student_name, courses.title AS course_title, enrollments.grade, enrollments.enrollment_date FROM enrollments
                    JOIN students ON enrollments.student_id = students.id
                    JOIN courses ON enrollments.course_id = courses.id";
            $res = mysqli_query($conn, $q);
            while ($row = mysqli_fetch_assoc($res)) {
                echo "<tr>
                <td>{$row['student_name']}</td>
                <td>{$row['course_title']}</td>
                <td>{$row['grade']}</td>
                <td>{$row['enrollment_date']}</td>
                <td>
                            <a href='delete_enrollment.php?id={$row['id']}' class='btn btn-danger'>Delete</a>
                          </td>";
                    echo "</tr>";
                }
           
            ?>
        </tbody>
    </table>
    </div>
</body>

