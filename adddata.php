<?php

include("conn.php");
if(isset($_POST["create"])){
  $name = mysqli_real_escape_string($conn, $_POST["name"]);
  $phonenumber = mysqli_real_escape_string($conn, $_POST["phonenumber"]);
  $pickpoint = mysqli_real_escape_string($conn, $_POST["pickpoint"]);
  $destination = mysqli_real_escape_string($conn, $_POST["destination"]);
  $date = mysqli_real_escape_string($conn, $_POST["date"]); 

  $sql = "INSERT INTO bookings (name, phonenumber, pickpoint, destination, date) VALUES ('$name', '$phonenumber', '$pickpoint', '$destination', '$date')";
  if(mysqli_query($conn, $sql)){
    echo "Record inserted";
  } else{
    die("something went wrong");
  }
}

if(isset($_POST["edit"])){
  $name = mysqli_real_escape_string($conn, $_POST["name"]);
  $phonenumber = mysqli_real_escape_string($conn, $_POST["phonenumber"]);
  $pickpoint = mysqli_real_escape_string($conn, $_POST["pickpoint"]);
  $destination = mysqli_real_escape_string($conn, $_POST["destination"]);
  $date = mysqli_real_escape_string($conn, $_POST["date"]);
  $id = mysqli_real_escape_string($conn, $_POST["id"]); 

  $sql= "UPDATE bookings SET name = '$name', phonenumber = '$phonenumber', pickpoint='$pickpoint', destination = '$destination', date = '$date' WHERE PassengerID=$id";
  if(mysqli_query($conn, $sql)){
    echo "Record Updated";
  } else{
    die("something went wrong");
  }
}
?>
