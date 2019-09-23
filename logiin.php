
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

  

  <form action="pag1.php" method="post" style="width:300px;padding: 23px">
            <label style="width:300px">Username:</label>
 <input type="text" name="name" value="<?php if(isset($_COOKIE["user"])) {echo $_COOKIE["user"];} ?>"/>
<label style="width:300px">Password:</label>
<input type="password" name="pass" value="<?php if(isset($_COOKIE["pass"])) {echo $_COOKIE["pass"];}?>"/><br>
<?php
       $number1=rand(1,9);
        $number2=rand(1,9);
        $sum=$number1+$number2;
        ?>
        <form method='post' action=''>
            <tr>
                <td>Captcha:</td><br>
            <td><input type="hidden" name="correctsum" value="<?php echo $sum;?>"/></td>
            <?php echo $number1.' + '.$number2.' = ';?>
            <input type="text" name="captcha"/><br/>
        </tr>
        </
        </form>
   

<input type="checkbox" name="remember" <?php if(isset($_COOKIE["user"])) { ?> checked <?php }?>/>
<label>Remember me</label><br/>
<input type="submit" name="submit" value="Login">

<p><?php if(isset($msg)) {echo $msg;} ?></p>
    </form>

  


  

  
</body>
</html>