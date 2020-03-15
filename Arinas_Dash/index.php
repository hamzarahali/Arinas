<?php include 'includes/header.php' ?>

    <div class="div1">

        <div class="div-alert">
            <?php 
                if ( isset ($_POST ['login']) ) {
                    $user = $_POST ['username'] ; 
                    $pass = $_POST ['password'] ;
                    if ( strcmp($user,'admin') == 0 && strcmp($pass,'admin') == 0 ) 
                        header('location: produit.php') ; 
                    else 
                        echo '<h6 class="alert alert-danger">Nom utilisateur ou mot de passe incorrecte </h6>' ; 
                }
            ?>
        </div>

        <form action="" method="POST">
            <div class="form-group">
                <label> Nom utilisateur : </label>
                <input type="text" name="username" class='form-control' required>
            </div>
            <div class="form-group">
                <label> Mot de passe : </label>
                <input type="password" name="password" class='form-control' required>
            </div>
            <div class="form-group">
                <input type="submit" name="login" class='btn btn-success form-control'>
            </div>
        </form>
        
    </div>

<?php include 'includes/footer.php' ?>
