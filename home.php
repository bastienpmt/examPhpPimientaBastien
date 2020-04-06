<?php
    include 'header.php';
    require_once 'pdo_connexion.php';

?>

<div class="container">
        <div class="row">
<?php $reponse = $pdo->query('SELECT * FROM annonce');
     while ($data = $reponse->fetch()) {
        if (! empty($data['image_link'])){
        
?> 
<div class="col-6 p-4 my-4">   
    <div class="p-3 rounded shadow-lg ">
            <div>
                 <img class="w-100" src="<?php echo('assets/uploads/'.$data['image_link']); ?>"/>        
            </div>  
            <h4 class="mt-2"><?php echo($data['titre']); ?></h4>
            <div class='border my-3 p-3'>
                <p class="m-0"><?php echo($data['contenu']); ?></p>
            </div>
            <div class="d-flex justify-content-between mt-2">     
                <div>
                </div>
                <div>
                <p class="text-secondary">
                    Publié par '<span class="font-italic"> <?php echo($data['nom_prenom_utilisateur']); ?> </span>'.
                </p>
                </div>    
            </div>
    </div>
</div>
<?php 
        }
} $reponse->closeCursor();
?>

    </div>
</div>

<?php
    require_once 'footer.php';
?>