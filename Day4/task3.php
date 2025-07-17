 <?php
    $Employees = ["Name" => "Mona Hassan", "Job Title" => "Frontend Developer", "Department" => "UI/UX", "Salary " => "10,000 EGP"];
    ?>

 <!DOCTYPE html>
 <html lang="en">

 <head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Document</title>
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

 </head>

 <body>

     <body class="p-5">

         <div class="container  bg-success">
             <ul class="list-group p-3">
                 <?php foreach ($Employees  as $k => $v): ?>
                     <li class="list-group-item"> <strong><?= $k . ":" ?> </strong><?= $v ?></li>
                 <?php endforeach ?>
             </ul>
         </div>

     </body>

 </body>

 </html>