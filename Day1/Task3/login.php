<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login</title>
    <link rel="stylesheet" href="css/bootstrap.css">
    <style>
        form {
            border-radius: 7px;
        }
    </style>
</head>

<body>

    <body class="bg-success ">


        <div class="container">

            <div class="row justify-content-center">

                <div class="col-lg-4 col-md-6 col-xs-12 mt-5">
                    <form class="bg-light p-5 ">
                        <h3 class="d-flex justify-content-center mb-4">User Information</h3>


                        <div class="form-group ">
                            <label for="name">Full Name</label>
                            <input type="text" class="form-control" id="name">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Email</label>
                            <input type="email" class="form-control" id="exampleInputEmail1">

                        </div>
                        <div class="form-group">
                            <label for="age">Age</label>
                            <input type="number" class="form-control" id="age">
                        </div>
                        <div class="form-group">
                            <label for="city">City</label>
                            <input type="text" class="form-control" id="city">
                        </div>

                        <button type="submit" class="btn btn-success w-100 mt-3">Submit</button>
                    </form>
                </div>

            </div>

        </div>
        <script src="js/bootstrap.bundle.js"></script>
    </body>

</html>