<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

<body class="p-5 bg-success">


    <div class="container">
        <div class="row">
            <table class="table table-striped">
                <tr>
                    <th>Key</th>
                    <th>Value</th>
                </tr>
                <tr>
                    <td>PHP_SELF</td>
                    <td><?= $_SERVER['PHP_SELF'] ?> </td>
                </tr>
                <tr>
                    <td>SERVER_NAME</td>
                    <td><?= $_SERVER['SERVER_NAME'] ?> </td>
                </tr>
                <tr>
                    <td>HTTP_HOST</td>
                    <td><?= $_SERVER['HTTP_HOST'] ?></td>
                </tr>
                <tr>
                    <td>USER_AGENT</td>
                    <td><?= $_SERVER['HTTP_USER_AGENT'] ?></td>
                </tr>
                <tr>
                    <td>REQUEST_METHOD</td>
                    <td><?= $_SERVER['REQUEST_METHOD'] ?></td>
                </tr>

            </table>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

</body>