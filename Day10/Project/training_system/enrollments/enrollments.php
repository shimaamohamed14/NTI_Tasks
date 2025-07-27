<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Enrollments</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

</head>
<body>
<?php
    include "../navbar.php" ;
    ?>
    <div class="container">
        
        <h3 class="m-3 mb-5 col-md-8 text-center">Enrollments</h3>
            
                    <div class="row" id="enrollments"></div>
                </div>
            </div>
        </div>
    </div>
    <script>
        function read(id='') {
        fetch("http://localhost/Day10/Project/training_system/enrollments/enrollments_api/get.php" + (id =='' ?'' : '?id=' +$id))
        .then(res=> res.json())
            .then (data => {
            let html="";
            let options ="";
            let inputs ;
          data.forEach(enrollment =>{

            html+=`
         <div class="col-md-3 mb-5 ">
         <div class="card shadow p-3 w-100 bg-dark text-light style h-100">

          <h5 class="card-header bg-info text-light mb-3">student: <u>${enrollment.name}</u> enrolled in course <u>${enrollment.title}  </u></h5>
    
    <p>Description: ${enrollment.description}</p>
    <p>Hours: ${enrollment.hours}</p>
    <p>Date: ${enrollment.enrollment_date}</p>
  </div>
</div>`;

             }) 


            document.getElementById("enrollments").innerHTML=html ;
            })

        }
        read() ;
        
    </script>
</body>
</html>