<?php
include '../db/db.php';

?>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
<body class="bg-light">

    <?php include '../navbar.php'; 
    if($_SESSION['login'] == false) {
    header("Location: ../login.php");
    exit();
}
    $role = $_SESSION['role'] ;
    ?>
    <div class="container p-5">
    <h2>Student List</h2>
    <?php if ($role == 1) { ?>
        <a href="add_student.php" class="btn btn-success mb-3">Add Student</a>
    <?php } ?>
    <table class="table table-bordered table-striped">
        <thead>
            <tr>
                <th>Name</th>
                <th>Email</th>
                <th>Phone</th>
                <th>DOB</th>
                <?php if ($role == 1) { ?>
                    <th>Actions</th>
                <?php } ?>
            </tr>
        </thead>
        <tbody>
            <?php
            $q = "SELECT * FROM students";
            $res = mysqli_query($conn, $q);
            while ($row = mysqli_fetch_assoc($res)) {
                echo "<tr>
                <td>{$row['name'] }</td>
                <td>{$row['email']}</td>
                <td>{$row['phone']}</td>
                <td>{$row['date_of_birth']}</td>";
                if ($role == 1) {
                   echo "<td>
                           <a href='edit_student.php?id={$row['id']}' class='btn btn-warning'>Edit</a>
                            <a href='delete_student.php?id={$row['id']}' class='btn btn-danger'>Delete</a>
                    
                          </td>";
                }
                    echo "</tr>";
                }
           
            ?>
        </tbody>
    </table>
    </div>
</body>

