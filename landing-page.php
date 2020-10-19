<?php
session_start();
if(!isset($_SESSION['uid'])){
  header('location: index.php');
}

if($_SESSION['uid']!="9cdfb439c7876e703e307864c9167a15"){
  header('location: index.php');
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Samples</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>
<body>
 
<div class="container">
  <h2 class="text-center">Samples</h2>
<div class="row mt-5">
  
  
  <div class="card col-md-5" >
    <div class="card-body">
      <h4 class="card-title">LLE (Low Level Employee)</h4>
      <p class="card-text">

      </p>
      <a href="admin/lle" class="btn btn-primary">Visit</a>
    </div>
  </div>
 <div class="col-md-1"></div>

  <div class="card col-md-5" >
    <div class="card-body">
      <h4 class="card-title">MLA (Mid Level Administrator)</h4>
      <p class="card-text">

      </p>
      <a href="admin/mla" class="btn btn-primary">Visit</a>
    </div>
  </div>
  <br>

  <div class="card col-md-5 mt-5" >
    <div class="card-body">
      <h4 class="card-title">TLA (Top Level Administrator)</h4>
      <p class="card-text">

      </p>
      <a href="admin/gov" class="btn btn-primary">Visit</a>
    </div>
  </div>
 <div class="col-md-1"></div>
  <div class="card col-md-5 mt-5" >
    <div class="card-body">
      <h4 class="card-title">API</h4>
      <p class="card-text">

      </p>
      <a href="admin/api" class="btn btn-primary">Visit</a>
    </div>
  </div>
  
  
</div>
</div>
</body>
</html>
