<?php include('includes/header.php'); ?>

<div class="container d-flex justify-content-center my-5">
 <div class="pr_details" style="margin:70px 0 200px;">
 
        <?php 
            $id = $_GET ['id'] ;
            $req = "SELECT * FROM produit WHERE id = $id " ;
            $res = mysqli_query ($con,$req) ;
            $row = mysqli_fetch_assoc($res) ; 
        ?>
            <div class="col">
                <img src="<?= 'images/produits/'.$row['image'] ?>" style="width: 250px;height: 240px;">
            </div>

            <div class="col">
                <p class="pr_arinas">produit Arinas</p>

                <h2 class="pr_arinas_name"><?= $row ['nom'] ?></h2>
                <h2 style="font-weight:300"><?= $row ['prix'] ?> <span style="font-weight:300;">DT</span></h2>
                <p><?= $row ['description'] ?></p>
                <h6 class="pr_arinas_qt" style="display:inline;">Quantité :</h6>
                    <span class="pr_arinas_qt_span mx-4"> 1</span>
                    <a href="<?= 'formulaire_info.php?id='.$row['id'] ?>" style="text-decoration:none"><span class="pr_arinas_qt_add" >Commander </span></a>
                
                <hr>
                <p>Ingredient <span>+</span></p>
                <hr><br>
                
                <hr>
            </div>
    
 </div>
</div>
<?php include('includes/footer.php'); ?>