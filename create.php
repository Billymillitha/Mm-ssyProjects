<!DOCTYPE html>
<html lang="en">
<head>
 <meta charset="UTF-8">
 <meta http-equiv="X-UA-Compatible" content="IE=edge">
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <title>LuxuryTravel</title>
 <!-- CSS only -->
 <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
 
 <!-- JavaScript Bundle with Popper -->
 <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
 
</head>
<body>
 <section>
 <h1 style="text-align: center;margin: 50px 0;">TRAVEL WITH MMASSY EXPRESS</h1>
 <div class="container">
  <header class="d-flex justify-content-between my-4">
    <h2>Add New Passenger</h2>
    <div>
      <a href="index.php" class="btn btn-primary">View</a>
    </div>

  </header>
 <form action="adddata.php" method="post">
 <div class="row">

  <div class="form-element my-4">
 <label for="">Passenger Name</label>
 <input type="text" name="name" id="name" class="form-control" placeholder="Enter two Names" required>
 </div>


 <div class="form-element my-4">
 <label for="">Phone Number</label>
 <input type="tel" name="phonenumber" id="phonenumber" class="form-control" placeholder="Include countrycode" required>
  </div>


 <div class="form-element my-4">
 <label for="">Pickpoint</label>
 <select name="pickpoint" id="pickpoint" class="form--control" required>
 <option value="">Select a Pickpoint</option>
 <option value="Mbeya">Mbeya</option>
 <option value="Tunduma">Tunduma</option>
 <option value="Iringa">Iringa</option>
 <option value="Nanenane">Nanenane</option>
 <option value="Mafinga">Mafinga</option>
 </select>
 </div>

  <div class="form-element my-4"> 
 <label for="">Destination</label>
 <select name="destination" id="destination" class="form--control" required>
 <option value="">Select a Destination</option>
 <option value="Morogoro">Morogoro</option>
 <option value="Kibaha">Kibaha</option>
 <option value="Mbezi">Mbezi</option>
 <option value="Iringa">Iringa</option>
 <option value="Ubungo">Ubungo</option>
 </select>
 </div>

 <div class="form-element my-4">
 <label for="">Date of Travel</label>
 <input type="date" name="date" id="date" class="form--control" required>
 </div>
 
 <div class="form-element my-4">
 <input type="submit" name="create" id="create" class="btn btn-primary">
  </div>

</div>
 </form>
 </div>
 </section>
</body>
</html>