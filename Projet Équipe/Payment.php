<?php       
session_start();
    //var_dump($_SESSION);
        //session_destroy()
         if(isset($_SESSION['password'])){
    }   
    else{
    header('Location: Login.php');
        }

        
        
        if($_SERVER['REQUEST_METHOD'] == "POST" && isset($_POST['amount'])){
     $payment=true;
 ##var_dump($_POST);

 include ("FonctionPayment.php");
  performPaiement();
        
         }
        
        ?>
        
<!doctype html>

<html lang="en">



<!doctype html>

<html lang="en">



<head>
 

    <meta charset="UTF-8">

    <title>PigBank</title>
    
<link rel="stylesheet" href="/Projet%20Équipe/style/style.css">

<link rel="shortcut icon" type="image/x-icon" href="/Projet%20Équipe/imgs/piggyFav.png">

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<?php
    include ("Header.php");
    ?>
    
</head>

<body>
    
    
    
   <div class="container">
       <div class="row">
       <div class="col-md-5 col-md-offset-0">  
   <h2>Paiement de facture </h2>
   </div></div></div>
    
    <?php if ($payment==true) { ?>
   
   <div class="container">
       <div class="row">
       <div class="col-md-5 col-md-offset-0">
     
 <div class="alert alert-success" role="alert">
                 Merci d'avoir utilisé notre outil pour effectuer un paiement ! <br> <?php echo $_POST['amount']; ?> $ ont été débités de votre compte.
</div></div></div></div>
            
            <?php } ?>
            
    <div class="container">
       <div class="row">
       <div class="col-md-5 col-md-offset-0">       
       
   <form class="paymentForm " role="form" data-toggle="validator" method="post">    <!-- <form method="post"> pour le <GET-POST> ou  <form method="post" action="redirection.php"> -->

<input type="hidden"  name="transaction_type" value='Paiement'>

    <div class="form-group">
        <label for="inputDetailPayment" class="control-label">Détails sur le paiement:</label>
        <input type="text" class="form-control" id="inputDetailPayment" placeholder="Détails du paiement" name="description" required>
    </div>
    
   <div class="form-group">
    <label for="montant" class="control-label" >Montant:</label>
    <input type="number" step="0.01" class="form-control" name="amount" id="montant" placeholder="Montant" min=1 data-error="Montant invalide!" required>
 <div class="help-block with-errors"></div>
  </div>
  
         <button type="submit" class="btn btn-primary">Effectuer le paiement </button>
         <a href="/Projet%20Équipe/AccountStatus.php"> <div class="btn btn-primary">Retourner à mon compte </div> </a>
          </form>
          
 </div>
 </div>
 </div>



<script src="https://code.jquery.com/jquery-3.2.1.min.js" integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4=" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/1000hz-bootstrap-validator/0.11.9/validator.js"></script>
</body>


</html>