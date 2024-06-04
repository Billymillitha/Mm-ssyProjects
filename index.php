<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <title>Passenger's List</title>
   </head>
<body>
<div class="container"> 
  <header class="d-flex justify-content-between my-4">
  <h1>Passenger's List</h1>
  <div>
    <a href="create.php" class="btn btn-primary">Add passenger</a>
  </div>
</header>
<table class="table table-bordered">
  <thead>
    <tr>
      <th></th>
      <th>Passenger Name</th>
      <th>Phone Number</th>
      <th>Pickpoint</th>
      <th>Destination</th>
      <th>Date of Travel</th>
    </tr>
  </thead>
  <tbody>
    <?php
    include("conn.php");
    $sql = "SELECT * FROM bookings";
    $result = mysqli_query($conn, $sql);
    while($row = mysqli_fetch_array($result)){
      ?>
      <tr>
        <td><?php echo $row["PassengerID"]; ?></td>
        <td><?php echo $row["name"]; ?></td>
        <td><?php echo $row["phonenumber"]; ?></td>
        <td><?php echo $row["pickpoint"]; ?></td>
        <td><?php echo $row["destination"]; ?></td>
        <td><?php echo $row["date"]; ?></td>
        <td>
          <a href="view.php?PassengerID=<?php echo $row["PassengerID"]; ?>" class="btn btn-info">Details</a>
          <a href="edit.php?PassengerID=<?php echo $row["PassengerID"]; ?>" class="btn btn-warning">Edit</a>
          <a href="delete.php?PassengerID=<?php echo $row["PassengerID"]; ?>"  class="btn btn-danger">Delete</a>
        </td>
      </tr>
      <?php
    }
    ?>
      </tbody>
</table>
  </div>
</body>
</html>