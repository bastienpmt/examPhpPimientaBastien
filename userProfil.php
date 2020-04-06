<?php
    include 'adminHeader.php';
    
    if ( ! $_SESSION['utilisateur']){  
        header('Location: login.php');   
    }
?>
 
<div class="back container-fluid d-flex align-items-center justify-content-center">
    <div class="d-flex loginForm shadow-lg">
        <div class="p-0">
            <img src="assets/images/bureau2.jpg">
        </div>
        <div class="w-100">
            <div class="text-center">
                <h2 class="text-left m-3">Profil <?php echo($_SESSION['utilisateur']['login']); ?>:</h2>

                <?php      
                    if ( $_SESSION['utilisateur']['login'] === 'admin'){               
                ?>
                    <div class="d-flex justify-content-center">
                        <div class="p-1 w-50 profilChoice mt-5">
                            <div class="bg-white p-1">
                                <a href="addUser.php" class="text-dark">Ajouter un User</a> 
                            </div>
                        </div>
                    </div>
                <?php
                    }
                ?>

                <div class="d-flex justify-content-center">
                    <div class="p-1 w-50 profilChoice mt-5">
                        <div class="bg-white p-1">
                            <a href="addArticle.php" class="text-dark">Ajouter un article</a> 
                        </div>
                    </div>
                </div>
                <div class="d-flex justify-content-center">
                    <div class="p-1 w-50 profilChoice mt-5">
                        <div class="bg-white p-1">
                            <a href="deconnect.php" class="text-dark">Se déconnecter 
                                <img src="assets/images/logout.png"></a> 
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php
    include 'footer.php';
?>