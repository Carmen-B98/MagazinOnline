
  
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
  
  <a href="welcome.php">Acasa</a>
  <br>
  <br>
</body>
</html>
  
  

<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
session_start();
$_SESSION["gen"]=$_POST["gen"];
class Date1{
    protected $name;
    protected $pass;
    protected $captcha;
    public function setNume($var)
    {
        $this->name=$var;
    }
    public function setPrenume($var){
        $this->pass=$var;
    }
    public function showNume(){
        echo "<b>Username:</b>".$this->name;
    }
    public function showPrenume(){
        echo "<b>Password:</b>".$this->pass;
    }
    public function setCapcha($var){
        $this->captcha=$var;
    }
    public function showCapcha(){
        echo "<b>Capcha:</b>".$this->captcha;
    }
}

class Date2 extends Date1{
    public $gen;
    public function setFacultate($var){
        $this->gen=$var;
    }
    
    public function showFacultate(){
        echo "<b>Gen:</b>".$this->gen;
    }
   
    public function setData(){
        $this->setNume($_SESSION["name"]);
          $this->setPrenume($_SESSION["pass"]);
          $this->setCapcha($_SESSION["captcha"]);
    }
    
}
$date2=new Date2();
$date2->setData();
$date2->setFacultate($_SESSION["gen"]);

$date2->showNume();
echo "<br/><br/>";
$date2->showPrenume();
echo "<br/><br/>";
$date2->showFacultate();
echo "<br/><br/>";
$date2->showCapcha();
echo "<br/><br/>";





  