<?php include 'includes/header.php' ?>

    <?php 
        if ( isset ($_POST ['creer'])) {
            $titre = $_POST ['titre'] ;
            $contenu = $_POST ['contenu'] ;
            $img = $_FILES['image']['name'] ;
            $req = "INSERT INTO article(titre,contenu,image) VALUES ('$titre','$contenu','$img')";
            $res = mysqli_query($con,$req) ;
            if ( !$res )
                echo ('QueryFieled'.mysqli_error()) ;
            else {
                move_uploaded_file($_FILES['image']['tmp_name'],"images/articles/$img");
                header ('location: article.php?msg_succ=Article ajoutee avec success') ;
            }
        }
    ?>

    <?php include 'includes/navbar.php' ?>
    
    <?php if ( !isset($_GET ['id_article']) ) { ?> 
        <div class="article2">
            <div class="btn-creer">
                <h6 class="alert alert-warning"> Créer article </h6>
            </div>
            <form action="" method="POST" enctype="multipart/form-data">
                <div class="form-group">
                    <label> Titre de l'article : </label>
                    <input type="text" name="titre" class="form-control">
                </div>
                <div class="form-group">
                    <label> Contenu de l'article : </label>
                    <TEXTAREA name="contenu"  class="form-control text" style="height: 190px;"></TEXTAREA>
                </div>
                <div>
                    <label for="avatar">Choisir l'image de l'article :</label>
                    <input type="file" name="image">
                </div>
                <div class="form-group div-btn">
                    <input type="submit" class="form-control btn btn-success" name="creer" value="Ajouter un article">
                </div>
            </form>
        </div>
    <?php } else { include 'modifier_article.php' ; } ?>
        
<?php include 'includes/footer.php' ?>