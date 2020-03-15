<?php include 'includes/header.php' ?>

    <?php include 'includes/navbar.php' ?>
    
    <?php if ( !isset($_GET ['id_produit']) ) { ?> 

        <?php 
            if ( isset ($_POST ['creer'])) {
                $nom = $_POST ['nom'] ;
                $description = $_POST ['description'] ;
                $bienfait = $_POST ['bienfait'] ;
                $cout = $_POST ['coutenance'] ;
                $img = $_FILES['image']['name'] ;
                $prix = $_POST ['prix'] ;

                $req = "INSERT INTO produit(nom,description,bienfait,coutenance,prix,image) VALUES ('$nom','$description','$bienfait','$cout','$prix','$img')";
                $res = mysqli_query($con,$req) ;
                if ( !$res )
                    echo ('QueryFieled'.mysqli_error($con)) ;
                else {
                    move_uploaded_file($_FILES['image']['tmp_name'],"../Arinas/images/produits/$img");
                    header ('location: produit.php?msg_succ=produit ajoutee avec success') ;
                }
            }
        ?>

        <div class="article2">
            <div class="btn-creer">
                <h6 class="alert alert-warning"> Créer produit </h6>
            </div>
            <form action="" method="POST" enctype="multipart/form-data">
                <div class="form-group">
                    <label> Nom de produit : </label>
                    <input type="text" name="nom" class="form-control">
                </div>
                <div class="form-group">
                    <label> Description de produit : </label>
                    <TEXTAREA class="form-control" name="description" style="height: 190px;"></TEXTAREA>
                </div>
                <div class="form-group">
                    <label> Les bienfaits de produit : </label>
                    <TEXTAREA class="form-control text" name="bienfait" style="height: 190px;"></TEXTAREA>
            </div>
                <div class="form-group">
                    <label> Coutenance de produit : </label>
                    <input type="text" name="coutenance" class="form-control">
                </div>
                <div class="form-group">
                    <label> Prix de produit : </label>
                    <input type="number" name="prix" class="form-control">
                </div>
                <div>
                    <label for="avatar">Choisir l'image de produit :</label>
                    <input type="file" name="image">
                </div>
                <div class="form-group div-btn">
                    <input type="submit" class="form-control btn btn-success" name="creer" value="Ajouter un produit">
                </div>
            </form>
        </div>
    <?php } else { include 'modifier_produit.php' ; } ?>
        
<?php include 'includes/footer.php' ?>