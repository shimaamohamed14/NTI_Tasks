<?php
include '../db/db.php';
include '../navbar.php';
if($_SESSION['login'] == false) {
    header("Location: ../login.php");
    exit();
}

$role = $_SESSION['role'];
?>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

<body>

    <div class="container p-5">
        <h2>Enrollment List</h2>
        <?php if ($role == 1) { ?>
            <a href="add_enrollment.php" class="btn btn-success mb-3">Add Enrollment</a>
        <?php } ?>
        <table class="table table-bordered table-striped">
            <thead>
                <tr>
                    <th>Student</th>
                    <th>Course</th>
                    <th>Grade</th>
                    <th>Date</th>
                    <?php if ($role == 1) { ?>
                        <th>Actions</th>
                    <?php } ?>
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
                <td>{$row['enrollment_date']}</td>";
                    if ($role == 1) {
                        echo "<td>
                            <a href='edit_enrollment.php?id={$row['id']}' class='btn btn-warning'>Edit</a>
                            <a href='delete_enrollment.php?id={$row['id']}' class='btn btn-danger'>Delete</a>
                        </td>";
                    }
                    echo "  </tr>";
                }
                ?>
            </tbody>
        </table>
    </div>
</body>