<?php include 'includes/header.php' ?>
    <?php include 'includes/navbar.php' ?>

    <div class="article">

        <?php if (!empty($_GET['msg_succ']) ) {?>
            <div class="block-succ">
                <h6 class='alert alert-success'><?= $_GET ['msg_succ'] ?></h6>
            </div> 
        <?php } ?>
    
        <?php 
            if ( isset ($_GET ['id_produit']) ) {
                $id = $_GET ['id_produit'] ;
                $req = "DELETE FROM produit WHERE id = $id " ;
                $res = mysqli_query ($con,$req) ;
                if ( $res ) 
                    header ('location: produit.php?msg_dang=Produit supprimer avec succés') ;
            }
        ?>
        <?php if (!empty($_GET['msg_dang']) ) {?>
            <div class="block-succ">
                <h6 class='alert alert-danger'><?= $_GET ['msg_dang'] ?></h6>
            </div> 
        <?php } ?>

        <div class="btn-art">
            <a href="create_produit.php"><button class="form-control btn btn-info">  Créer produit </button></a>
        </div>

        <table class="table table-bordered table-hover">
            <tr>
                <th> Id produit </th>
                <th> Nom </th>
                <th> Prix </th>
                <th> Coutenance </th>
                <th> Image </th>
            </tr>
            <?php 
                $req = "SELECT * FROM produit" ; 
                $res = mysqli_query ($con,$req) ;
                while ( $row = mysqli_fetch_assoc($res) ) {
            ?>
                    <tr>
                        <td><?= $row ['id'] ?></td>
                        <td><?= $row ['nom'] ?></td>
                        <td><?= $row ['prix'] ?></td>
                        <td><?= $row ['coutenance'] ?></td>
                        <td><img src='<?= "../Arinas/images/produits/".$row ['image'] ?>' style="width: 150px;height: 70px;"></td>
                        <td><a href="<?= "create_produit.php?id_produit=".$row['id'] ?>" class="form-control btn btn-warning">Modifier</a></td>
                        <td><a href="<?= "produit.php?id_produit=".$row['id'] ?>" class="form-control btn btn-danger">Supprimer</a></td>
                    </tr>
            <?php } ?>
        </table>
    </div>

<?php include 'includes/footer.php' ?>
