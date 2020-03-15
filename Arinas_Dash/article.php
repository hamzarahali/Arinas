<?php include 'includes/header.php' ?>
    <?php include 'includes/navbar.php' ?>

    <div class="article">

        <?php if (!empty($_GET['msg_succ']) ) {?>
            <div class="block-succ">
                <h6 class='alert alert-success'><?= $_GET ['msg_succ'] ?></h6>
            </div> 
        <?php } ?>
    
        <?php 
            if ( isset ($_GET ['id_article']) ) {
                $id = $_GET ['id_article'] ;
                $req = "DELETE FROM article WHERE id = $id " ;
                $res = mysqli_query ($con,$req) ;
                if ( $res ) 
                    header ('location: article.php?msg_dang=Article supprimer avec succés') ;
            }
        ?>
        <?php if (!empty($_GET['msg_dang']) ) {?>
            <div class="block-succ">
                <h6 class='alert alert-danger'><?= $_GET ['msg_dang'] ?></h6>
            </div> 
        <?php } ?>

        <div class="btn-art">
            <a href="create_article.php"><button class="form-control btn btn-info">  Créer article </button></a>
        </div>

        <table class="table table-bordered table-hover">
            <tr>
                <th> Id article </th>
                <th> Title </th>
                <th> Image </th>
            </tr>
            <?php 
                $req = "SELECT * FROM article" ; 
                $res = mysqli_query ($con,$req) ;
                while ( $row = mysqli_fetch_assoc($res) ) {
            ?>
                    <tr>
                        <td><?= $row ['id'] ?></td>
                        <td><?= $row ['titre'] ?></td>
                        <td><img src='<?= "../Arinas/images/articles/".$row ['image'] ?>' style="width: 150px;height: 70px;"></td>
                        <td><a href="<?= "create_article.php?id_article=".$row['id'] ?>" class="form-control btn btn-warning">Modifier</a></td>
                        <td><a href="<?= "article.php?id_article=".$row['id'] ?>" class="form-control btn btn-danger">Supprimer</a></td>
                    </tr>
            <?php } ?>
        </table>
    </div>

<?php include 'includes/footer.php' ?>
