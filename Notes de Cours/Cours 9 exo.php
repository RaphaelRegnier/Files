<?php

//$_SERVER['REQUEST_METHOD']; //si on rajoute echo devant, on voit écrit GET OU POST en fonction de la page qui s'affiche
                            // on peut aussi utiliser lattribut ACTION pour renvoyer directement à une url spécifique une fois le formulaire validé

//var_dump($_POST); // il faut mettre des NAMES dans les inputs pour que la variables prenne automatiquement les valeurs 
//echo $_SERVER['REQUEST_METHOD']; 
?>

<!doctype html>

<html lang="en">

<head>

    <meta charset="UTF-8">

    <title>TESTYEAH</title>

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

</head>

<body>
    <?php
if ( $_SERVER['REQUEST_METHOD'] == "GET" ) {
?>

 <div class= "container"> <!-- Permet de décaler a droite  -->
 <div class="row">
 <div class="col-xs-4"  > <!-- Permet de gérer la largeur de la colonne  -->
  
   <form role="form" data-toggle="validator" method="post">    <!-- <form method="post"> pour le <GET-POST> ou  <form method="post" action="redirection.php"> -->

 
     <div class="form-group">
         <label for="exampleInputName1"> First Name : </label>
         <input type="text" name="Prénom" class="form-control" id="exampleInputName1" placeholder="Johny" required>
     </div>
     
     
     <div class="form-group">
        <label for="exampleInputName2"> Last Name : </label>
        <input type="text" name= "Nom" class="form-control" id="exampleInputName2" placeholder="Cash">
     </div>
 
    <div class="form-group">
        <label for="inputEmail" class="control-label">Email:</label>
        <input type="email" class="form-control" id="inputEmail" placeholder="Email" name="e-mail" data-error="Aïe ! Email invalide !" required>
    <div class="help-block with-errors"></div>
    </div>
    
    <label for="exampleInputAmount">Amount:</label>
    <div class="form-group">
    <div class="input-group">
      <div class="input-group-addon">$</div>
      <input type="number" class="form-control" name="Amount" id="exampleInputAmount" placeholder="Amount">
      <div class="input-group-addon">.00</div>
   </div>
    </div>
  
         <button type="submit" class="btn btn-primary">Completer Virement </button>
         </form>
  <?php } else { ?> <br>
  Merci <?php echo $_POST['Prénom'] . 'ton email est' . $_POST['e-mail'] //on fait appelle à la clé prénom dans la variable $POST ?> <br>
  <button type="button" class="btn btn-success">Success</button> 
  <?php } ?>
  
 <input type="hidden" value=""> 
 
 
 </div>
</div>
</div>
<script src="https://code.jquery.com/jquery-3.2.1.min.js" integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4=" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/1000hz-bootstrap-validator/0.11.9/validator.js"></script>
</body>

    
</body>
</html>