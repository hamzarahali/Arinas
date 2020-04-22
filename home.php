
 
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
<header class="full_screen_vid">
  
  <div class="home_vid">
    <video src="./video/homv.mp4" autoplay loop ></video>
  </div>

  <div class="container">
  <div class="menuu">
  <nav class="navbar navbar-expand-lg navbar-light">
  <a class="navbar-brand" href="#"><img src="./images/logoarinas2.png" width="120rem"></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
  <ul class="navbar-nav "style="margin-left:30vw;">
      <li><a href="home.php" style="color:#fff;font-family:cav;margin:0 15px;">Acceuil</a></li>
      <li><a href="produit.php" style="color:#fff;font-family:cav;margin:0 15px;">produit</a></li>
      <li><a href="qsn.php" style="color:#fff;font-family:cav;margin:0 15px;">qui sommes nous</a></li>
      <li><a href="blog.php" style="color:#fff;font-family:cav;margin:0 15px;">Blog</a></li>
      <li><a href="contact.php" style="color:#fff;font-family:cav;margin:0 15px;">Contact</a></li>
      <li><a  style="color:#333" href="commande.php"><i class="fas fa-shopping-bag"></i></a></li>
    </ul>
    
  </div>
</nav>
</div>
</div>
</header>
 
   
  
  <div class="container">
    <h3 class="text-center mt-4" style="font-weight:700">Histoire de produit</h3>
    <div class="row histoire">
        <div class="col-xl-6 col-lg-6 col-md-6 " data-aos="fade-right">
        <img src="./images/quisn1.jpg"  class="img-fluid " width=80% > 
        </div>

        <div class="col-xl-6 col-lg-6 col-md-6 " data-aos="fade-left">
          <p>Arinas est une marque Tunisienne de produits naturels, fondée en 2020 en
            collaboration avec Enactus. Arinas est spécialisée dans la production des huiles
            essentielles, huiles végétales et les produits de bien-être naturels<br>

            <a href="qsn.php"><button class="btn btn-outline-success mt-4 ">Show more</button></a>
          </p>
        </div>
  </div>
  </div>

  <div class="warka">
    <div class="img"><img src="./images/feuille.png" width=120rem;></div>
  </div>

  <div class="container">
    
    <div class="row product d-flex justify-content-center" data-aos="fade-in">
    <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <div class="row">
        <div class="col-3"><img class="d-block " src="./images/hisimg.png" width="100px" ></div>
        <div class="col-3"><img class="d-block" src="./images/histoire_image.png" width="100px"></div>
        <div class="col-3"><img class="d-block" src="./images/Mockup2.png" width="100px"></div>
        <div class="col-3"><img class="d-block" src="./images/hisimg.png" width="100px"></div>
      </div>
    </div>

    <div class="carousel-item">
      <div class="row">
        <div class="col-xl-3"><img class="d-block " src="./images/hisimg.png" width="100px" alt="First slide"></div>
        <div class="col-xl-3"><img class="d-block" src="./images/histoire_image.png" width="100px" alt="First slide"></div>
        <div class="col-xl-3"><img class="d-block" src="./images/Mockup2.png" width="100px" alt="First slide"></div>
        <div class="col-xl-3"><img class="d-block" src="./images/hisimg.png" width="100px" alt="First slide"></div> 
      </div>
    </div>
   
  </div>
  <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>

  
    </div>
    <script src="./js/lightslider.js"></script>
    <script src="./js/produit.js"></script>

  </div>
    <section>
      <h3 class="text-center my-5" style="font-weight:700">Avantages</h3>
      <div class="row avantage">
        <div class="ava1 col-xl-4 col-sm-12 ">
          <div class="overlay1 ">
            <h3 class="mb-4" >naturel</h3>
          </div>
          
         
        </div>

        <div class="ava2 col-xl-4 col-sm-12  ">
          <div class="overlay1 ">
            <h3 class="mb-4"  >healthy</h3>
            
          </div>
          
        </div>

        <div class="ava3 col-xl-4 col-sm-12 ">
          <div class="overlay1">
            <h3 class="mb-4"  >impact sociale</h3>
          </div>
         
        </div>

      </div>
    </section>
   
   

    
    <section class="blog">
    <h2 class="text-white text-center " style="font-family:seconds;font-size:100px;">Blog</h2>
      <div class="container">
        <div class="row" style="margin-top:200px;">
          <div class="row col mx-2  mb-4  d-flex">

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


    <section class="partenaire d-flex flex-column justify-content-center align-items-center">
      <h3 class="text-center " style="font-weight:700">Partenaire</h3>
      <img src="./images/enactus.png" class="img-fluid">
    </section>
    <?php include('includes/footer.php'); ?>
    <script src="js/main.js"></script> 
    


  