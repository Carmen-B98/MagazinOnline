
<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Atelierul de scrisori </title>

  <!-- Bootstrap core CSS -->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="css/shop-homepage.css" rel="stylesheet">

</head>

<body>
  <!-- Navigation -->
  
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
    <div class="container">
      <a class="navbar-brand" href="#">Atelierul de scrisori</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item active">
              <a class="nav-link" href="welcome.php">Acasa
              <span class="sr-only">(current)</span>
            </a>
          </li>
          <li class="nav-item">
              <a class="nav-link" href="desprenoi.php">Despre noi</a>
          </li>
          
          <li class="nav-item">
              <a class="nav-link" href="contact.php">Contact</a>
          </li>
          <li class="nav-item">
              <a class="nav-link" href="logiin.php">Log in</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

    


      
  <!-- Page Content -->
  <div class="container">

    <div class="row">

      <div class="col-lg-3">

        <h1 class="my-4">Categorii</h1>
        <div class="list-group">
            <a href="scrisoareata1.php" class="list-group-item">Scrisoarea ta</a>
            <a href="cadouri1.php" class="list-group-item">Cadouri</a>
            <a href="cutiacupovesti1.php" class="list-group-item">Cutia cu povești</a> 
            
            <form action="search.php" method="post" style="padding-left: 90px;padding-top: 10px">
                <input type="submit" name="valueToSearch" value="Search"><br><br>
            <br><br>
        </form>
            
            

        </div>
      </div>

        <!-- /.col-lg-3 -->
     
      <div class="col-lg-9">

        <div id="carouselExampleIndicators" class="carousel slide my-4" data-ride="carousel">
          <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
          </ol>
          <div class="carousel-inner" role="listbox" >
            <div class="carousel-item active">
                <img class="d-block img-fluid" src="images/5.png"  style="width:900px;height: 300px" alt="First slide" >
            </div>
            <div class="carousel-item">
                <img class="d-block img-fluid" src="images/10.png"   style="width:900px;height: 300px" alt="Second slide" >
            </div>
            <div class="carousel-item">
                <img class="d-block img-fluid" src="images/11.jpg"   style="width:900px;height: 300px" alt="Third slide" >
            </div>
          </div>
          <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
          </a>
          <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
          </a>
        </div>
      <?php
       //include connection file
   
        include 'connection.php';
        $sql='SELECT * FROM images;';
        $query=  mysqli_query($con, $sql)or die(mysqli_error($con));
        ?>
          <table style="width: 900px; height: 350px" width="60"  cellpadding="8" cellspace="10" rules="row">
            
<?php while($row=mysqli_fetch_array($query)){ ?>
            <tr style="border-bottom: 0px transparent">
            
            <tr>
                <td style="color:red;font-family:verdana"><b><?php echo $row['titlu'];?></b></td>
            </tr>     
  <td ><img src="<?php echo $row['image'];?> " style="width: 300px;height: 450px; "> </td> 
  <td style="font-style:oblique;font-size: 14pt;font-family: cursive"><?php echo $row['title'];?></td>
  <td><b><?php echo $row['pret'];?></b></td>
            <td><button type="button" onclick="alert('Continui cumparaturile?')">Adauga in cos</button></td>           
  <td >
     <?php echo "<a href=\"view.php?id=".$row['id']."\">View</a>  <a href=\"edit.php?id=".$row['id']."\">Edit</a> 
<a href=\"delete.php?id=".$row['id']."\" onclick=\"return confirm('Are you sure?')\">Delete</a>"?>
 </td>
            
            </tr>
          
           <?php } ?>
        </table>
<br><br>
<a href="upload.php">Upload another image</a>

        <!-- /.row -->

      </div>
      <!-- /.col-lg-9 -->

    </div>
    <!-- /.row -->

  </div>


<!DOCTYPE html>


  <!-- /.container -->

  <!-- Footer -->
  <footer class="py-5 bg-dark">
    <div class="container">
      <p class="m-0 text-center text-white">Atelierul de scrisori &copy;  2019</p>
    <!-- /.container -->
  </footer>

  <!-- Bootstrap core JavaScript -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    </div>
</body>


</html>
