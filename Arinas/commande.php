<?php include('includes/header.php'); ?>
<?php
        if ( isset ( $_POST ['commander'] ) ) {

            $id = $_GET ['id'] ;
            $nom = $_POST ['nom'] ;
            $prenom = $_POST ['prenom'] ; 
            $email = $_POST ['email'] ; 
            $adresse = $_POST ['adresse'] ;
            $tel = $_POST ['tel'] ;
            $qte = $_POST ['qte'] ;

            $to = 'Arinas-contact@gmail.com' ; 
            $subject = " Produit numéro " . $id ; 
            $message = " Nom : " . $nom  .  " \n " . " Prénom : " . $prenom . " \n " . " Adresse :  " . $adresse . " \n " . " Téléphone : " . $tel  ; 
            $message .= " \n " . " Produit numéro " . $id . " Quantité " . $qte ;
            $headers = " From : " . $email ; 

            if ( mail($to , $subject , $message , $headers) )
                echo "<h1> Message envoyé ! Merci " . $nom . " nous vous contacterons sous peu ! </h1>" ; 
            else 
                echo "Probleme " ;
	}
?>


<form class="form-sub-pr" method="POST" action="">
  <div class="form-row d-flex justify-content-center">
    <div class="col-md-6 form-group">
        <label for="inputEmail4"> Réference produit </label>
        <select name="id" cmass="form-control">
        <?php 
            $req = 'SELECT * FROM produit' ; 
            $res = mysqli_query ($con,$req) ;
            while ( $row = mysqli_fetch_assoc($res) ) {
        ?>
              <option value="<?= $row['id'] ?>"><img src="<?= 'images/produits/'.$row['image'] ?>" style="width: 200px;height: 150px;" class="img-fluid"><?= $row['nom'] ?></option>
            <?php } ?>
        </select>
    </div>
    <div class="form-group col-md-6">
      <label for="inputEmail4">Quantité <span style="color:red">*</span></label>
      <input type="number" name="qte" class="form-control" id="inputEmail4">
    </div>
  </div>
  <div class="form-row d-flex justify-content-center">
    <div class="form-group col-md-6">
      <label for="inputEmail4">Nom <span style="color:red">*</span></label>
      <input type="text" name="nom" class="form-control" id="inputEmail4">
    </div>
    <div class="form-group col-md-6">
      <label for="inputPassword4">Prénom <span style="color:red">*</span></label>
      <input type="text" name="prenom" class="form-control" id="inputPassword4">
    </div>
  </div>
  <div class="form-group">
    <label for="inputAddress">Adresse <span style="color:red">*</span></label>
    <input type="text" name="adresse" class="form-control" id="inputAddress" placeholder="Insérer votre adresse exacte">
  </div>
  <div class="form-group">
    <label for="inputAddress2">Email <span style="color:red">*</span></label>
    <input type="email" name="email" class="form-control" id="inputAddress2" placeholder="Insérer votre email">
  </div>
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputCity">Télephone <span style="color:red">*</span></label>
      <input type="text"  name="tel" class="form-control" id="inputCity">
    </div>
    
  </div>
  <div class="form-group">
    <div class="form-check">
      <input class="form-check-input" type="checkbox" id="gridCheck">
      <label class="form-check-label" for="gridCheck">
        Check me out
      </label>
    </div>
  </div>
  <button type="submit" name="commander" class="btn btn-primary"> Commander</button>
</form>
<?php include('includes/footer.php'); ?>