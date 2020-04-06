<?php
    include 'adminHeader.php';

if ( isset($_SESSION['utilisateur'])){  
    header('Location: userProfil.php');   
}
    require_once 'function/userFunction.php';
    require_once 'pdo_connexion.php';

if ( $_SERVER['REQUEST_METHOD'] === 'POST'){

    $errors = login($pdo, $_POST['login'], $_POST['password']);

    if(count($errors) == 0){
       header('Location: connectSucess.php');
    }
}
?>

<div class="back container-fluid d-flex align-items-center justify-content-center">
    <div class="d-flex loginForm shadow-lg">
        <div class="p-0">
            <img src="assets/images/bureau.jpg">
        </div>
        <div class="w-100">
            <form method="post" action="login.php" enctype="multipart/form-data" class="p-4 text-center">
                <h3 class="text-left">Se connecter :</h3>
                <input name="login" type="text" placeholder="Login" class="pr-5 py-2 mt-5 mb-2"> <br>
                <input name="password" type="password" placeholder="Mot de passe" class="pr-5 py-2 my-2"> <br>
                <input type="submit" class="submit text-light border-0 px-4 py-2 mt-5">
            </form>
        </div>
    </div>
</div>

<ul>
<?php

 if(count($errors)>0){
     echo('<p>'.count($errors).' erreurs trouvé(s) :</p>');
     foreach ($errors as $error){
         echo('<li>'.$error.'</li>');
     }
 }
?>
</ul>
<?php
    include 'footer.php';
?>