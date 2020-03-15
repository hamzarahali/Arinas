<?php 
        if ( isset ($_POST ['modifier']) ) {
            $id = $_GET ['id_produit'] ;
            $nom = $_POST ['nom'] ;
            $contenu = $_POST ['contenu'] ;
            $cout = $_POST ['coutenance'] ;
            $img = $_FILES['image']['name'] ;
            $prix = $_POST ['prix'] ;

            $req = "UPDATE produit SET nom = '$nom' , description = '$contenu' , image = '$img' , prix = '$prix' , coutenance = '$cout' WHERE id = $id" ;
            $res = mysqli_query ($con,$req) ;
            if ( $res ){
                header ('location: produit.php?msg_succ=produit modifier avec succes');
                move_uploaded_file($_FILES['image']['tmp_name'],"images/produits/$img");
            }
        }
    ?>
    
    <div class="article2">
        <div class="btn-creer">
            <h6 class="alert alert-warning"> Modifier produit </h6>
        </div>

        <?php 
            $id = $_GET ['id_produit'] ;
            $req = "SELECT * FROM produit WHERE id = $id " ;
            $res = mysqli_query ($con,$req) ;
            $row = mysqli_fetch_assoc($res) ; 
        ?>

        <form action="" method="POST" enctype="multipart/form-data">
            <div class="form-group">
                <label> Nom de produit : </label>
                <input type="text" name="nom" class="form-control" value="<?= $row ['nom'] ?>">
            </div>
            <div class="form-group">
                <label> Description de produit : </label>
                <TEXTAREA class="form-control text" name="contenu" style="height: 190px;"><?= $row ['description'] ?></TEXTAREA>
            </div>
            <div class="form-group">
                <label> Les bienfaits de produit : </label>
                <TEXTAREA class="form-control text" name="bienfait" style="height: 190px;"><?= $row ['bienfait'] ?></TEXTAREA>
            </div>
            <div class="form-group">
                    <label> Coutenance de produit : </label>
                    <input type="text" name="coutenance" class="form-control" value="<?= $row ['coutenance'] ?>">
                </div>
            <div class="form-group">
                    <label> Prix de produit : </label>
                    <input type="number" name="prix" class="form-control" value="<?= $row ['prix'] ?>">
                </div>
            <div>
                <label for="avatar">Choisir l'image de produit :</label>
                <input type="file" name="image">
            </div>
            <div class="form-group div-btn">
                <input type="submit" class="form-control btn btn-success" name="modifier" value="Modifier l'produit">
            </div>
        </form>
    </div>