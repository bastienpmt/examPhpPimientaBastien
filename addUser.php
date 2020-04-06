<?php
    include 'adminHeader.php';
    require_once 'function/userFunction.php';
    require_once 'pdo_connexion.php';

    if ( $_SERVER['REQUEST_METHOD'] === 'POST'){
       
           $errors = validFormUser();
       
           if(count($errors) ==  0){
               $errors = addBddUser($pdo, $errors);
               if(count($errors) == 0){
                   header('Location: login.php');
               }
           }
       
       }
?>
       
<div class="back container-fluid d-flex align-items-center justify-content-center">
    <div class="d-flex loginForm shadow-lg">
        <div class="p-0">
            <img src="assets/images/bureau.jpg">
        </div>
        <?php

            if(count($errors)>0){
                echo('<ul class="bg-danger pt-3 mb-0">');
                echo('<p class="text-light">'.count($errors).' erreurs trouvé(s) :</p>');
                foreach ($errors as $error){
                    echo('<li class="text-light">'.$error.'</li>');
                }
                echo('</ul>');
            }

            ?>
        <div class="w-100">
            <form method="post" action="addUser.php" enctype="multipart/form-data" class="p-4 text-center">
                <h3 class="text-left">Ajouter un utilisateur :</h3>
                <input name="nom" type="text" required placeholder="Nom" class="pr-5 py-2 my-2 mb-2"> <br>
                <input name="prenom" type="text" placeholder="Prénom" class="pr-5 py-2 my-2 mb-2"> <br>
                <input name="login" type="text" required placeholder="Login" class="pr-5 py-2 my-2 mb-2"> <br>
                <input name="password" type="password" required placeholder="Mot de passe" class="pr-5 py-2 mt-2 mb-3"> <br>
                <input type="submit" class="submit text-light border-0 px-4 py-2 mt-4"> 
            </form>
        </div>
    </div>
</div>

<?php
    include 'footer.php';
?>