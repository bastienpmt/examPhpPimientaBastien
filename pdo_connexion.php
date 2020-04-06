<?php try {
      $host = '127.0.0.1';
      $dbName = 'dauphine';
      $user = 'root';    
      $password = '';
      $pdo = new PDO(
          'mysql:host='.$host.';dbname='.$dbName.';charset=utf8',$user,$password);
          $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
         } catch (PDOException $e) {    
           throw new InvalidArgumentException('Erreur connexion à la base de données : '.$e->getMessage());    
           exit; }


?>