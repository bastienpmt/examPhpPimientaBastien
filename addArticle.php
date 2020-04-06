<?php
    include 'adminHeader.php';
    require_once 'function/userFunction.php';
    require_once 'function/articleFunction.php';
    require_once 'pdo_connexion.php';

    if (! $_SESSION['utilisateur']){
        header('Location: login.php');
        }
    $errors = [];

    if ( $_SERVER['REQUEST_METHOD'] === 'POST'){
        $errorAndLink = validFormArticle();
 
        if(count($errorAndLink['errors']) ===  0){
            if(!empty($errorAndLink['filename'])){
        
                addArticleToBdd($pdo, $errorAndLink['filename']);
                header('Location: adminHome.php');
            }
        } else {
     
            $errors = $errorAndLink['errors'];
     
        }
     }
     
?>
<script type='text/javascript' src='//code.jquery.com/jquery-1.9.1.js'></script>
  
  <script type='text/javascript'>//<![CDATA[
  $(window).load(function(){
      function readURL(input) {
          if (input.files && input.files[0]) {
              var reader = new FileReader();
               
              reader.onload = function (e) {
                  $('#blah').attr('src', e.target.result);
              }
               
              reader.readAsDataURL(input.files[0]);
          }
      }
       
      $("#imgInp").change(function(){
          readURL(this);
      });
  });//]]> 
 </script>

<div class="back container-fluid d-flex align-items-center justify-content-center">
    <div class="d-flex loginForm shadow-lg">
        <div class="p-0">
            <img src="assets/images/bureau3.jpg">
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
        <div class="w-100 overflow-hidden">
            <form method="post" action="addArticle.php" enctype="multipart/form-data" class="p-4 text-center">
                <h3 class="text-left">Ajouter un article :</h3>
                <div class="d-flex justify-content-center mt-5 mb-2">
                    <div class="p-1 uploadContainer profilChoice">
                    <div class="input-file-container bg-white"> 
                        <input name="image" type="file" id="imgInp" class="input-file">
                        <label for="my-file" class="input-file-trigger m-0 p-2 bg-white" tabindex="0">
                            <img src="assets/images/photo.png"> Télécharger
                        </label>
                    </div>
                    </div>
                <div class="loadedImage"><img class="position-absolute ml-3" id="blah" src="#" alt="" /></div>
                </div>
                <input name="titre" type="text" placeholder="Titre article" class="pr-5 py-2 my-4 mb-2"> <br>
                <textarea name="contenu" type="text" placeholder="Contenu article" class="pr-5 py-2 my-2 mb-2"></textarea> <br>
                <input type="submit" class="submit text-light border-0 px-4 py-2 mt-4"> 
            </form>
        </div>
    </div>
</div>

<?php
    include 'footer.php';
?>