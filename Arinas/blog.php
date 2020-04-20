<?php include('includes/header.php'); ?>


  <div class="image_blog" >
   <div class="msg_blog text-light">
     <h1 style="font-family:cav">Bienvenue dans Arinas<br> blog
     votre source<br>pour découvrir le monde <br>biocosmétiques</h1>
   </div>
  </div>
  
  <div class="container">

        <?php 
                $req = "SELECT * FROM article" ; 
                $res = mysqli_query ($con,$req) ;
                while ( $row = mysqli_fetch_assoc($res) ) {
        ?>
            <h2 class="titre_article"><?= $row ['titre'] ?></h2>
            <div class="row articlee">
              <div class="col-6"  data-aos="fade-right">
                <img src=<?= 'images/articles/'.$row['image'] ?> height="340px">
              </div>

              <div class="col-6" style=margin-top:80px  data-aos="fade-left">
              <p><?= $row ['contenu'] ?></p>                
              </div>
            </div>
        <?php } ?>

  </div>

<?php include('includes/footer.php'); ?>