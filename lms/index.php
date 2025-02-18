<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> LMS </title>
    <!-- Bootstrap CDN CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
<?php include('reusables/nav.php') ?>
    
  <div class="container-fluid">
    <div class="container">
      <div class="row">
        <div class="col">
          <!-- display 5 is a feature of bootstrap -->
          <h1 class="display-5"> All Schools</h1>
        </div>
      </div>
    </div>
  </div>
<div class="row">


  <?php
  include('reusables/connect.php');
  $query = 'SELECT * FROM schools';
  $schools = mysqli_query($connect, $query);
  
  foreach($schools as $school)
  {
  //   echo  '<div class="card" style="">
  //   <img src="..." class="card-img-top" alt="...">
  //   <div class="card-body">
  //     <h5 class="card-title">Card title</h5>
  //     <p class="card-text"></p>
  //     <a href="#" class="btn btn-primary">Go somewhere</a>
  //   </div>
  // </div>';


    echo '<div class="col-md-3"> 
      <div class="card m-4" style="">
          <div class="card-body">
            <h5 class="card-title">' .  $school['Board'] .'</h5>
            <span class="badge rounded-pill bg-primary">' .$school['School Type'] . ' </span>
            <span class="badge rounded-pill bg-success">' .$school['Language'] . ' </span>
          </div>
        </div>
    </div>';
  }
  ?>
</div>
</body>
</html>