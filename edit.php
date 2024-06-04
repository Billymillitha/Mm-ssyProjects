<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  
  <title>Edit Information</title>
   </head>
<body>
  
<div class="container"> 
  <header class="d-flex justify-content-between my-4">
  <h1>Edit Information</h1>
  <div>
    <a href="index.php" class="btn btn-primary">Back</a>
  </div>
</header>
<?php 
if(isset($_GET["PassengerID"])) {
  $id = $_GET["PassengerID"];
  include("conn.php");
  $sql = "SELECT *FROM bookings WHERE PassengerID=$id";
  $result = mysqli_query($conn, $sql);
  $row = mysqli_fetch_array($result);

  ?>
<form action="adddata.php" method="post">
 
  <div class="form-element my-4">
      <label for="">Passenger Name</label>
      <input type="text" name="name" class="form-control" value="<?php echo $row["name"]; ?>">
  </div>

  <div class="form-element my-4">
    <label for="">Phone Number</label> 
    <input type="tel" name="phonenumber"  class="form-control" value="<?php echo $row["phonenumber"]; ?>" >
  </div>
  

  <div class="form-element my-4">
    <label for="">Pickpoint</label> 
    <select name="pickpoint" id="pickpoint" class="form--control" required>
    <option value="">Select a Pickpoint</option>
    <option value="Mbeya" <?php if($row['pickpoint']=="Mbeya"){echo "Selected";} ?> >Mbeya</option>
    <option value="Tunduma" <?php if($row['pickpoint']=="Tunduma"){echo "Selected";} ?>>Tunduma</option>
    <option value="Iringa" <?php if($row['pickpoint']=="Iringa"){echo "Selected";} ?>>Iringa</option>
    <option value="Nanenane" <?php if($row['pickpoint']=="Nanenane"){echo "Selected";} ?>>Nanenane</option>
    <option value="Mafinga" <?php if($row['pickpoint']=="Mafinga"){echo "Selected";} ?>>Mafinga</option>
    </select>
  </div>

  <div class="form-element my-4"> 
    <label for="">Destination</label>
    <select name="destination" id="destination" class="form--control"  required>
    <option value="">Select a Destination</option>
    <option value="Morogoro" <?php if($row['destination']=="Morogoro"){echo "Selected";} ?>>Morogoro</option>
    <option value="Kibaha" <?php if($row['destination']=="Kibaha"){echo "Selected";} ?>>Kibaha</option>
    <option value="Mbezi" <?php if($row['destination']=="Mbezi"){echo "Selected";} ?>>Mbezi</option>
    <option value="Iringa" <?php if($row['destination']=="Iringa"){echo "Selected";} ?>>Iringa</option>
    <option value="Ubungo" <?php if($row['destination']=="Ubungo"){echo "Selected";} ?>>Ubungo</option>
    </select>
  </div>

  <div class="form-element my-4">
    <label for="">Date of Travel</label>
    <input type="date" name="date"  class="form--control" value="<?php echo $row["date"]; ?>" >
  </div>
 
<input type="hidden" name="id" value='<?php echo $row['PassengerID']; ?>'>
  <div class="form-element my-4"> 
    <input type="submit" name="edit" class="btn btn-success" value="Edit Information">
  </div>

 </form>
  <?php

}
?>

 
 </div>
 </body>
</html>