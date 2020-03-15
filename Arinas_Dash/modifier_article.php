    <?php 
        if ( isset ($_POST ['modifier']) ) {
            $id = $_GET ['id_article'] ;
            $titre = $_POST ['titre'] ;
            $contenu = $_POST ['contenu'] ;
            $img = $_FILES ['image']['name'] ;

            $req = "UPDATE article SET titre = '$titre' , contenu = '$contenu' , image = '$img' WHERE id = $id" ;
            $res = mysqli_query ($con,$req) ;
            if ( $res ){
                header ('location: article.php?msg_succ=Article modifier avec succes');
                move_uploaded_file($_FILES['image']['tmp_name'],"images/$img");
            }
        }
    ?>
    
    <div class="article2">
        <div class="btn-creer">
            <h6 class="alert alert-warning"> Modifier article </h6>
        </div>

        <?php 
            $id = $_GET ['id_article'] ;
            $req = "SELECT * FROM article WHERE id = $id " ;
            $res = mysqli_query ($con,$req) ;
            $row = mysqli_fetch_assoc($res) ; 
        ?>

        <form action="" method="POST" enctype="multipart/form-data">
            <div class="form-group">
                <label> Titre de l'article : </label>
                <input type="text" name="titre" class="form-control" value="<?= $row ['titre'] ?>">
            </div>
            <div class="form-group">
                <label> Contenu de l'article : </label>
                <TEXTAREA class="form-control text" name="contenu" style="height: 190px;"><?= $row ['contenu'] ?></TEXTAREA>
            </div>
            <div>
                <label for="avatar">Choisir l'image de l'article :</label>
                <input type="file" name="image">
            </div>
            <div class="form-group div-btn">
                <input type="submit" class="form-control btn btn-success" name="modifier" value="Modifier l'article">
            </div>
        </form>
    </div>