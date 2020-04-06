<?php
    include 'adminHeader.php';
    
?>

<div class="back container-fluid d-flex align-items-center justify-content-center">
    <div class="d-flex loginForm shadow-lg">
        <div class="p-0">
            <img src="assets/images/hello.jpg">
        </div>
        <div class="w-100 d-flex align-items-center justify-content-center">
            <div class="text-center">
                <h1>Bienvenue <?php echo($_SESSION['utilisateur']['login']); ?>!</h1>
                <a href="adminHome.php">Aller à l'acceuil ?</a> ou 
                <a href="userProfil.php">Voir mon profil ?</a>
            </div>
        </div>
    </div>
</div>

<?php
    include 'footer.php';
?>