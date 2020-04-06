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
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse d-flex justify-content-between" id="navbarNav">
    <ul class="navbar-nav">
      <li class="nav-item active ml-4 mx-3">
        <a class="nav-link text-light" href="home.php">Acceuil</a>
      </li>
      <li class="nav-item active mx-3">
        <a class="nav-link text-light" href="#">Les Articles</a>
      </li>
    </ul>
  </div>
</nav>



<?php
require_once 'footer.php';
?>