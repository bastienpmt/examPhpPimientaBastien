<?php
session_start();
?>

<!doctype html>
<html lang="en">
<head>
  <title>MyNews</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
  <link rel="stylesheet" media="screen" type="text/css" title="design" href="style.css"/>
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-light">
  <a class="navbar-brand text-light" href="#">
    MyNews
  </a>
  <p class="adminLogo text-light bg-danger px-2 py-0 m-0 position-absolute font-weight-bold">admin</p>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse d-flex justify-content-between" id="navbarNav">
    <ul class="navbar-nav">
      <li class="nav-item active ml-4 mx-3">
        <a class="nav-link text-light" href="adminHome.php">Articles publiés</a>
      </li>
      <li class="nav-item active mx-3">
        <a class="nav-link text-light" href="addArticle.php">Ajouter un article</a>
      </li>
    </ul>
    
    <ul class="navbar-nav">
        <div class="dropdown">
            <button class="btn bg-none dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <a href="userProfil.php"><img src="assets/images/user2.png"></a>
            </button>
            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton">
                <a class="dropdown-item" href="index.php">My News site</a>
                <a class="dropdown-item" href="login.php">
                  <?php
                  if ( isset($_SESSION['utilisateur'])){  
                      echo('Profil');   
                  }
                  else{
                      echo('connexion');
                  }
                  ?>
                </a>
            </div>
        </div>

    </ul>
  </div>
</nav>

<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

<?php
require_once 'footer.php';
?>