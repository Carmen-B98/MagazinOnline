
<?php
session_start();
$_SESSION["name"]=$_POST["name"];
$_SESSION["pass"]=$_POST["pass"];
$_SESSION["captcha"]=$_POST["captcha"];
?>
</html>
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
              <a class="nav-link" href="index.php">Acasa
              <span class="sr-only">(current)</span>
            </a>
          </li>
          <li class="nav-item">
              <a class="nav-link" href="">Despre noi</a>
          </li>
          
          <li class="nav-item">
              <a class="nav-link" href="">Contact</a>
          </li>
          <li class="nav-item">
              <a class="nav-link" href="logiin.php">Log in</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
  <form action="pag3.php" method="POST" style="padding-top: 10px">
     
  <select name="gen">
    <option value="femeie">Femeie</option>
    <option value="barbat">Barbat</option>
  </select>
  <br><br>
 <input type="submit" value="Submit">
</form>

    </body>
</html>

