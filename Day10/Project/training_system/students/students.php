<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Students</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

</head>

<body>
    <?php
    include "../navbar.php";
    ?>
    <div class="container">

        <h3 class="m-3 mb-5 col-md-8 text-center">Students</h3>

        <div class="row" id="students"></div>

               </div>
    </div>
    
    <script>
        function read(id = '') {
            fetch("http://localhost/Day10/Project/training_system/students/students_api/get.php" + (id == '' ? '' : '?id=' + $id))
                .then(res => res.json())
                .then(data => {
                    let html = "";
                    let options = "";
                    let inputs;
                    data.forEach(student => {

                        html += `
         <div class="col-md-3 mb-5 ">
         <div class="card shadow p-3 bg-dark text-light">

          <h5 class="card-header bg-info text-light mb-3">${student.name}</h5>
    
    <p>Email: ${student.email}</p>
    <p>Phone: ${student.phone}</p>
  </div>
</div>`;

                    })


                    document.getElementById("students").innerHTML = html;
                })

        }
        read();
    </script>

   
<script  src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.min.js" integrity="sha384-7qAoOXltbVP82dhxHAUje59V5r2YsVfBafyUDxEdApLPmcdhBPg1DKg1ERo0BZlK" crossorigin="anonymous"></script>

</body>

</html>