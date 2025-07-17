      <?php
        $products = [

            ["Name" => "Laptop", "Price(EGP)" => 15000, "Quantity" => 3],
            ["Name" => "Phone", "Price(EGP)" => 8000, "Quantity" => 5],
            ["Name" => "Tablet", "Price(EGP)" => 6000, "Quantity" => 2],
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

      <body class="p-5 bg-success">
          <div class="container">
              <h2 class="mb-4 d-flex justify-content-center">Product Info</h2>
              <table class="table  table-striped ">
                  <thead>
                      <tr>
                        <!--
                          <th scope="col" class="bg-dark text-white">Name</th>
                          <th scope="col" class="bg-dark text-white">Price(EGP)</th>
                          <th scope="col" class="bg-dark text-white">Quantity</th>
                         -->
                          <?php
                            foreach ($products[0] as $k  => $v) :
                            ?>
                              <th scope="col" class="bg-dark text-white"> <?= $k ?></th>
                          <?php endforeach ?>

                      </tr>
                  </thead>


                  <tbody>
                      <?php
                        foreach ($products as $k  => $v) :
                        ?>
                          <tr>
                              <td> <?= $v["Name"] ?></td>
                              <td> <?= $v["Price(EGP)"] ?></td>
                              <td> <?= $v["Quantity"] ?></td>

                          </tr>



                      <?php endforeach ?>
                  </tbody>
              </table>
          </div>
      </body>

      </html>