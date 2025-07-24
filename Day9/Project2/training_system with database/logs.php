 <?php
 include 'db/db.php';
 include 'navbar.php';

 ?>
 <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
 <body class="bg-secondary">
    <div class="container p-5 ">
        <h2>Login Logs</h2>
        <table class="table table-striped table-bordered bg-light mt-5">
            <thead class="bg-dark text-light">
                <tr>
                    <th>ID</th>
                    <th>Email</th>
                    <th>Login Time</th>
                    <th>IP Address</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $select = "SELECT * FROM login_logs";
                $result = mysqli_query($conn, $select);
                if(mysqli_num_rows($result) > 0) {
                
                while ($row = mysqli_fetch_assoc($result)) {
                    echo "<tr>
                            <td>{$row['id']}</td>
                            <td>{$row['email']}</td>
                            <td>{$row['login_time']}</td>
                            <td>{$row['ip_address']}</td>
                          </tr>";
                }
            }
                ?>
            </tbody>
        </table>