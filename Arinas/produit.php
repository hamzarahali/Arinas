<?php include('includes/header.php'); ?>
<div class="all-pg">
    <div class="container produit_pg">
        <h2 class="">Product</h2>
        <hr>
        <div class="filter mb-5"><i class="fas fa-filter"></i></div>

        <div class="row mb-5">
            <?php
                $req = "SELECT * FROM produit" ; 
                $res = mysqli_query ($con,$req) ;
                while ( $row = mysqli_fetch_assoc($res) ) {
            ?>
                
                    <div class="col-3" style="text-align:center;padding-top:40px" >  
                        <a href="<?= 'details_produit.php?id='.$row['id'] ?>">
                        <img src="<?= 'images/produits/'.$row['image'] ?>" style="width: 200px;height: 150px;" class="img-fluid">
                        <h5 class="mt-3 mb-2"><?= $row ['nom'] ?></h5>
                        </a>
                        <p><?= $row ['prix'] ?> DT</p>
                    </div>
            
            <?php } ?>
        </div>
        
    </div>
</div>

<?php include('includes/footer.php'); ?>