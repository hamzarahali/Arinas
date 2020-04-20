
 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Arinas</title>
    <link rel="shortcut icon" type="image/png" href="./images/logoarinas2.png">
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:600&display=swap" rel="stylesheet"> 
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600&display=swap" rel="stylesheet"> 
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="icon/css/all.min.css">   
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
<?php include 'includes/db.php' ?>
<div class="slider">
  <div class="overlay">
    <div class="menuu">
   <div class="logo"><img src="./images/arinaswhite.png" width=120rem style=margin-top:10px></div>
   <nav class="nav">
      <ul>
        <li><a href="home.php">Acceuil</a></li>

        <li><a href="produit.php">Produit</a></li>
        <li><a href="qsn.php">Qui sommes nous</a></li>
        <li><a href="blog.php">Blog</a></li>
        <li><a>Contact</a></li>
        <li><a href="commande.php"><i class="fas fa-shopping-bag"></i></a></li>
      </ul>
   </nav>
</div>
  </div>
    </div>
  
  <div class="container">
    <h3 class="text-center mt-4" style="font-weight:700">Histoire de produit</h3>
    <div class="row histoire">
        <div class="col-xl-6 col-lg-6 col-md-6 " data-aos="fade-right">
        <img src=""  class="img-fluid " width=120rem > 
        </div>

        <div class="col-xl-6 col-lg-6 col-md-6 " data-aos="fade-left">
          <p>Il se peut que vous partagiez des informations sens
             avec ce site ou cette application que vous partagiez 
             Lisez les conditions d'utilisation et les règles defined
            confidentialité de Pixlr Editor pour les règles de
            savoir comment vos données seront utilisées.<br>

            <button class="btn btn-outline-success mt-4 ">Show more</button>
          </p>
        </div>
  </div>
  </div>

  <div class="warka">
    <div class="img"><img src="./images/feuille.png" width=120rem;></div>
  </div>

  <div class="container">
    
    <div class="row product d-flex justify-content-center" data-aos="fade-in">
          <?php 
                    $req = "SELECT * FROM produit Limit 4" ; 
                    $res = mysqli_query ($con,$req) ;
                    while ( $row = mysqli_fetch_assoc($res) ) {
          ?>
                <div class="product_box col-lg-3 col-md-6 col-12 ">
                    <img src="<?= 'images/produits/'.$row['image'] ?>" style="width: 200px;height: 150px;">
                    <p class="my-2" ><?= $row ['nom'] ?></p>
                </div>
                
          <?php }?> 
    </div>

  
    </div>
    <section>
      <h3 class="text-center my-5" style="font-weight:700">Avantages</h3>
      <div class="row avantage">
        <div class="ava1 col-xl-4 col-sm-12 ">
          <div class="overlay1 ">
            <h3>Naturel</h3>
            <a><i class="fas fa-angle-double-right fa-2x" style="color:#ccc"></i></a>
          </div>
          
         
        </div>

        <div class="ava2 col-xl-4 col-sm-12  ">
          <div class="overlay1 ">
            <h3>Healthy</h3>
            <a><i class="fas fa-angle-double-right fa-2x" style="color:#ccc"></i></a>
          </div>
          
        </div>

        <div class="ava3 col-xl-4 col-sm-12 ">
          <div class="overlay1">
            <h3>impact social</h3>
            <a href="#"><i class="fas fa-angle-double-right fa-2x" style="color:#ccc"></i></a>
          </div>
         
        </div>

      </div>
    </section>
   
   

    
    <section class="blog">
      <div class="container">
        <div class="row">
          <div class="row col mx-2  mb-4  d-flex align-items-stretch">

            <div class="bg-img col-4">
             
          
            </div>
            
            <div class="  contenu col-8 bg-white p-4">
              <h4 class="text-dark" style="font-weight:600">What is healthfood</h4>
              <p class="text-dark " style="font-weight:300">Lorem ipsum dolor sit amet consectetur <br>
              adipisicing elit Dicta, tempora Lorem ipsum dolor sit amet consectetur adipisicing elit
             Exercitationem, sunt.</p>
              <a href="#">Learn more</a>
            </div>

          </div>

          <div class="row col mx-2 mb-4  d-flex align-items-stretch">
          <div class="bg-img col-4">
             
          
             </div>
             
             <div class=" col-8 contenu bg-white p-4">
               <h4 class="text-dark" style="font-weight:600">What is healthfood</h4>
               <p class="text-dark " style="font-weight:300">Lorem ipsum dolor sit amet consectetur <br>
               adipisicing elit Dicta, tempora Lorem ipsum dolor sit amet consectetur adipisicing elit
              Exercitationem, sunt.</p>
               <a href="#">Learn more</a>
             </div>

            
            
          </div>

        </div>
      </div>
    </section>


    <section class="partenaire">
      <h3 class="text-center " style="font-weight:700">Partenaire</h3>
    </section>
    <?php include('includes/footer.php'); ?>
    


  