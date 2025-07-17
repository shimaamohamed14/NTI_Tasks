 <!DOCTYPE html>
 <html lang="en">

 <head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Document</title>
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
 </head>

 <body class="bg-success">
     <?php
        $books = ["Clean Code", "The Pragmatic Programmer", "Design Batterns", "You Don't Know JS ", "Eloquent JavaScript"];
        ?>
     <div class="container mt-5">
         <h2 class="mb-4 d-flex justify-content-center"> Books List</h2>
         <ul class="list-group">
             <?php foreach ($books as $book): ?>
                 <li class="list-group-item"><?= $book . "br" ?></li>
             <?php endforeach ?>
         </ul>
     </div>

 </body>

 </html>