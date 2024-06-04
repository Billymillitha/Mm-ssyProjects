<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <title>Description</title>
  <style>
    .Passenger-description{
      background: #f5f5f5;
      padding: 50px;
    }
  </style>
</head>
<body>
  <div class="container">
  <header class="d-flex justify-content-between my-4">
  <h1>Details</h1>
  <div>
    <a href="index.php" class="btn btn-primary">Back</a>
  </div>
</header>
<div class="Pasenger-description my-4">
<?php 
if(isset($_GET["PassengerID"])){
  $id = $_GET["PassengerID"];
  include("conn.php");
  $sql = "SELECT *FROM bookings WHERE PassengerID=$id";
  $result = mysqli_query($conn, $sql);
  $row = mysqli_fetch_array($result);
  ?>
  <h2>Passenger Name</h2>
  <p><?php echo $row["name"]; ?></p>
  <h2>Phone Number</h2>
  <p><?php echo $row["phonenumber"]; ?></p>
  <h2>PickPoint</h2>
  <p><?php echo $row["pickpoint"]; ?></p>
  <h2>Destination</h2>
  <p><?php echo $row["destination"]; ?></p>
  <h2>Date of Travel</h2>
  <p><?php echo $row["date"]; ?></p>
  <?php

}
?>
</div>
  </div>
</body>
</html>