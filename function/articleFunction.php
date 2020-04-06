<?php

function validFormArticle(){
    $errors = [];
    $fileName ='';
    $allowedExtension = ['image/jpeg', 'image/png'];


    if(in_array($_FILES['image']['type'], $allowedExtension)){
        if($_FILES['image']['size']<100000){
            $fileName = uniqid().'.'.explode('/', $_FILES['image']['type'])[1];
            move_uploaded_file($_FILES['image']['tmp_name'], 'assets/uploads/'.$fileName);

        } else {
            $errors[] = 'Fichier trop lourd impossible';
        }
    } else {
        $errors[] = 'Impossible : Extension invalide !';
    }
    if(empty($_POST['contenu'])){
        $errors[] = 'Veuillez rentrer le contenu de l\'article';
    }
    if(empty($_POST['titre'])){
        $errors[] = 'Veuillez saisir le titre de l\'article';
    }

    return ['errors'=> $errors, 'filename'=> $fileName];
}


function addArticleToBdd($pdo, $fileName){
    $nomPrenom = $_SESSION['utilisateur']['prenom'].' '.$_SESSION['utilisateur']['nom'];
    $datePubli = new \DateTime();
    try{
        $req = $pdo->prepare(
            'INSERT INTO annonce( image_link, contenu, titre , nom_prenom_utilisateur)
    VALUES(:nomfile, :contenu, :titre, :nom_prenom_utilisateur)');
        $req->execute([
            'nomfile' => $fileName,
            'contenu' => $_POST['contenu'],
            'titre' => $_POST['titre'],
            'nom_prenom_utilisateur' => $nomPrenom
        ]);
    } catch (PDOException $exception){
        var_dump($exception);
        die();
    }

}

function deleteArticle($pdo, $id) {    
    $res = $pdo->prepare('DELETE FROM annonce WHERE id = :id');    
    $res->execute(['id'=> $id]); 
}

?>