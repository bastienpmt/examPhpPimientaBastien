<?php 
    $errors = [];

function login($pdo, $login, $password) {
    $errors = [];
    try{
        $req = $pdo->prepare(
            'SELECT * FROM utilisateur where login = :login and password = :password');
        $req->execute([
            'login' => $login,
            'password' => md5($password)
        ]);
    } catch (PDOException $exception){
        var_dump($exception);
        die();
    }
    $res = $req->fetch();
    if($res == false){
        $errors[] = 'Identifiants invalides';
        session_destroy();
    } else {
        $_SESSION['utilisateur'] = $res;
    }
    return $errors;
}


function addBddUser($pdo, $errors){
    try{
        $req = $pdo->prepare(
            'INSERT INTO utilisateur(nom, prenom, login, password)
    VALUES(:nom, :prenom, :login, :password)');
        $req->execute([
            'nom' => $_POST['nom'],
            'prenom' => $_POST['prenom'],
            'login' => $_POST['login'],
            'password' => md5($_POST['password'])
        ]);
    } catch (PDOException $exception){
        
    }
return $errors;
}


function validFormUser(){
    $error = [];
    if(empty($_POST['login'])){
        $error[] = 'Veuillez saisir un Login';
    }

    if(empty($_POST['password'])){
        $error[] = 'Veuillez saisir le mot de passe';
    }

    if(empty($_POST['nom'])){
        $error[] = 'Veuillez saisir le nom';
    }

    if(empty($_POST['prenom'])){
        $error[] = 'Veuillez saisir le prénom';
    }

    return $error;
}

?>