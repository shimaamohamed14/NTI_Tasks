     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

<?php
$Cources = ["HTML", "CSS", "JS", "PHP"];
array_push($Cources,"MYSQL") ;
array_unshift($Cources,"GIT");
array_shift($Cources);
?>
<body class="bg-success">
    
  <div class="container mt-5">
    <h1 class="text-info">Available Cources</h1>
         <ul class="list-group">
             <?php foreach ($Cources as $c): ?>
                 <li class="list-group-item"><?= $c  ?></li>
             <?php endforeach ?>
         </ul>
     </div>
</body>
