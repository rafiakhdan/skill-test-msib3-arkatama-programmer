<?php

include_once("config.php");





$result = mysqli_query($conn, "SELECT * FROM data ");

?>

<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
   <title>Homepage</title>
</head>

<body>

   <div class="container my-2">
      <h1>Form Input</h1>
      <form name="update_user" method="post" action="controller/add_data.php">
         <div class="mb-3">
            <label for="input" class="form-label">Input Data</label>
            <input type="text" class="form-control" id="input" name="input" placeholder="Input Nama (spasi) Umur (spasi) Kota Asal" required>
         </div>
         <div class="d-flex flex-row-reverse">
            <button type="submit" class="btn btn-success">Tambah</button>
         </div>
      </form>
   </div>
   <div class="container">
      <div class="row mt-3">
         <h1>View Data</h1>
      </div>
      <table class="table">
         <thead>
            <tr>
               <th scope="col">ID</th>
               <th scope="col">NAME</th>
               <th scope="col">AGE</th>
               <th scope="col">CITY</th>
            </tr>
         </thead>
         <tbody>
            <?php
            $i = 1;
            while ($data = mysqli_fetch_array($result)) :
            ?>
               <tr>
                  <th scope="row"><?= $data['ID'] ?></th>
                  <td><?= $data['NAME'] ?></td>
                  <td><?= $data['AGE'] ?></td>
                  <td><?= $data['CITY'] ?></td>
               </tr>
            <?php
               $i++;
            endwhile;
            ?>
         </tbody>
      </table>
   </div>
   <script src="js/popper.min.js"></script>
   <script src="js/bootstrap.min.js"></script>
</body>

</html>