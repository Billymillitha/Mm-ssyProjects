<?php
if(isset($_GET['PassengerID'])) {
  $id = $_GET['PassengerID'];
  include("conn.php");
  $sql = "DELETE FROM bookings WHERE PassengerID = $id";
  if(mysqli_query($conn, $sql)){
    session_start();
    $_SESSION["delete"] = "Record Deleted Successfully";
    header("Location:index.php");
  }
}
?>