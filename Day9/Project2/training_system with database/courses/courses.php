<?php
include '../db/db.php';
     include '../navbar.php'; 
     if($_SESSION['login'] == false) {
    header("Location: ../login.php");
    exit();
}

    $select = "SELECT role FROM admin WHERE email = '{$_SESSION['email']}'";
    $result = mysqli_query($conn, $select);
    $admin = mysqli_fetch_assoc($result);
?>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
<body>

    <div class="container p-5">
    <h2>Courses List</h2>
    <?php if ($admin['role'] == 1) { ?>
        <a href="add_course.php" class="btn btn-success mb-3">Add Course</a>
    <?php } ?>
    <table class="table table-bordered table-striped">
        <thead>
            <tr>
                <th>Title</th>
                <th>Description</th>
                <th>Hours</th>
                <th>Price</th>
                <?php if ($admin['role'] == 1) { ?>
                <th>Actions</th>
                <?php } ?>
            </tr>
        </thead>
        <tbody>
            <?php
            $q = "SELECT * FROM courses";
            $res = mysqli_query($conn, $q);
            while ($row = mysqli_fetch_assoc($res)) {
                echo "<tr>
                <td>{$row['title'] }</td>
                <td>{$row['description']}</td>
                <td>{$row['hours']}</td>
                <td>{$row['price']}</td>";

                    if ($admin['role'] == 1) {
                        echo "
                    <td>
                        <a href='edit_course.php?id={$row['id']}' class='btn btn-warning'>Edit</a>
                        <a href='delete_course.php?id={$row['id']}' class='btn btn-danger'>Delete</a>
                                        </td>";

                    } 
                echo "</tr>";

                }
           
            ?>
        </tbody>
    </table>
    </div>
</body>

