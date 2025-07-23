<?php
include '../db/db.php';
?>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
<body>

    <?php include '../navbar.php'; ?>
    <div class="container p-5">
    <h2>Courses List</h2>
    <a href="add_course.php" class="btn btn-success mb-3">Add Courses</a>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>Title</th>
                <th>Description</th>
                <th>Hours</th>
                <th>Price</th>
                <th>Actions</th>
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
                <td>{$row['price']}</td>
                <td>
                            <a href='edit_course.php?id={$row['id']}' class='btn btn-warning'>Edit</a>
                            <a href='delete_course.php?id={$row['id']}' class='btn btn-danger'>Delete</a>
                          </td>";
                    echo "</tr>";
                    
                }
           
            ?>
        </tbody>
    </table>
    </div>
</body>

