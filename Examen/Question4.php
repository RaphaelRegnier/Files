<?php 
$courriel= $_POST[email];
$nom= $_POST[nom];
function envoyerCourrielConfirmation($nom, $courriel){
    echo "Envoi du courriel de confirmation de la demande de $nom à l'adresse $courriel par le serveur <br>";
    echo "$nom et $courriel représentent les valeurs dynamiques passées en paramètre de la fonction";
    
}
                     
                      ?>

<!doctype html>

<html lang="en">

<head>

    <meta charset="UTF-8">

    <title>Document</title>


<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

</head>

<body>
<?php if ($_SERVER['REQUEST_METHOD'] == 'GET') { ?>

<div class= "container"> 
 <div class="row">
 <div class="col-md-4 col-md-offset-4 col-xs-6 col-xs-offset-2"  > <!-- Permet de gérer la largeur de la colonne  -->
   <form class="loginFenetre " role="form" data-toggle="validator" method="post">    <!-- <form method="post"> pour le <GET-POST> ou  <form method="post" action="redirection.php"> -->

<div class="form-group">
    <label for="exampleInputName2">Nom:</label>
    <input type="text" class="form-control" id="exampleInputName2" name= "nom" placeholder="Jane Doe">
  </div>

    <div class="form-group">
        <label for="inputEmail" class="control-label">Courriel:</label>
        <input type="email" class="form-control" id="inputEmail" placeholder="misterpig@gmail.com" name="email" data-error="Syntaxe incorrecte !" required>
    <div class="help-block with-errors"></div>
    </div> 
    
    <div class="form-group">
    <label for="exampleInputName2">Demande:</label>
    <input type="text" class="form-control" name="demande" id="exampleInputName2" placeholder="Jane Doe">
  </div>

<div class="form-group">
    <input type="hidden" class="form-control" name="EstPremium" value=0>
  </div>
      
         <button type="submit" class="btn btn-primary">Connexion </button>
 
 </form>
 <?php } else { ?>
                <div class="alert alert-success" role="alert">
                    Merci d'avoir affaire avec nous <?php echo "$_POST[nom]"; ?> votre email est <?php echo "$_POST[email]"; ?>
                     
                </div>
 <?php } ?>
</body>

</html>