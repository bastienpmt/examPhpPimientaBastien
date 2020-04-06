<?php 
    require_once 'pdo_connexion.php'; 
    require_once 'function/articleFunction.php'; 
    $id = $_GET['id']; 
    deleteArticle($pdo, $id); 
    header('Location: adminHome.php'); 
?>