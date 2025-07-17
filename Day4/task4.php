 <?php
    $employees = [

        ["Name" => "Ali", "Department" => "IT", "Salary" => 9500],
        ["Name" => "Khaled", "Department" => "Finance", "Salary" => 8200],
        ["Name" => "Salma", "Department" => "Marketing", "Salary" => 7000],


    ];
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

     <body class="p-5 ">
         <div class="container p-5 bg-success">
             <table class="table  table-striped ">
                 <thead>
                     <tr>

                         <th scope="col" class="bg-dark text-white">Name</th>
                         <th scope="col" class="bg-dark text-white">Department</th>
                         <th scope="col" class="bg-dark text-white">Salary</th>


                     </tr>
                 </thead>


                 <tbody>
                     <?php
                        foreach ($employees as $emp) :
                        ?>
                         <?php if ($emp["Salary"] > 8000) : ?>
                             <tr>
                                 <td> <?= $emp["Name"] ?></td>
                                 <td> <?= $emp["Department"] ?></td>
                                 <td> <?= $emp["Salary"] ?></td>

                             </tr>


                         <?php endif ?>

                     <?php endforeach ?>
                 </tbody>
             </table>
         </div>
     </body>

 </html>