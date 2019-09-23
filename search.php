<?php

if(isset($_POST['search']))
{
    $valueToSearch = $_POST['valueToSearch'];
    // search in all table columns
    // using concat mysql function
    $query = "SELECT * FROM `images` WHERE CONCAT(`id`, `image`, `titlu`,`pret` ) LIKE '%".$valueToSearch."%'";
    $search_result = filterTable($query);
    
}
 else {
    $query = "SELECT * FROM `images`";
    $search_result = filterTable($query);
}

// function to connect and execute the query
function filterTable($query)
{
    $connect = mysqli_connect("localhost", "root", "", "images");
    $filter_Result = mysqli_query($connect, $query);
    return $filter_Result;
}

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
  
  <form action="" method="post" style="padding-left: 20px;padding-top: 10px">
            <input type="text" name="valueToSearch" placeholder="Value To Search"><br><br>
            <input type="submit" name="search" value="Search"><br><br>
            
            <table>
                <tr>
                    <th>Id</th>
                    <th>Imagine</th>
                    <th>Titlu</th>
                    <th>Pret</th>
                </tr>

      <!-- populate table from mysql database -->
                <?php while($row = mysqli_fetch_array($search_result)):?>
                <tr>
      <td><?php echo $row['id'];?></td>            
     <td ><img src="<?php echo $row['image'];?> " style="width: 100px;height: 100px; "> </td> 
  <td style="font-style:oblique;font-size: 14pt;font-family: cursive">
    <?php echo $row['title'];?></td>
  <td><?php echo $row['pret'];?></td>
                    
                </tr>
                <?php endwhile;?>
            </table>
        </form>
  <a href="welcome.php">Acasa</a>
  <br><br>
  <a href="logout.php">Deconectare</a>
  
</body>
</html>

