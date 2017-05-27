<?php 
  session_start();
  //session_destroy();
 //var_dump($_SESSION);
  //Si l'utilisateur est deja connecté
  if(isset($_SESSION['name'])){
    //On le redirige vers AccountStatus.php pour eviter que l'utilisateur deja connecté accède au login
    header('Location: AccountStatus.php');
  }
  
  
  if($_SERVER['REQUEST_METHOD'] == "POST" && isset($_POST['email']) && isset($_POST['password'])){
   
    
    include('Fonction Login.php');
    
  }
    //Verification que l'utilisateur a reussi son login
    if(isset($_SESSION['password'])){
       
       
       header('Location: AccountStatus.php');
      
    }   else{
       //L'utilisateur a echoué sa connection
       $echecConnection = true;
        }
  
?>


<!doctype html>

<html lang="en">



<head>
 

    <meta charset="UTF-8">

    <title>PigBank</title>
    
<link rel="stylesheet" href="/Projet%20Équipe/style/style.css">

<link rel="shortcut icon" type="image/x-icon" href="/Projet%20Équipe/imgs/piggyFav.png">

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<link href="https://fonts.googleapis.com/css?family=Indie+Flower" rel="stylesheet"> 

    
</head>

<body class="loginbody">

    
   <div class="container bienvenue">
   <div class= "row"> 
   <div class="col-md-5 col-md-offset-4 col-xs-8 col-xs-offset-2"> <!-- sur desktop colonne large de 5 et offset de 4 / sur mobile&windowed large de 8 offset de 2-->
   <h1> Bienvenue chez PigBank </h1>
   </div> </div> </div>
   
   
 <div class= "container formlog"> 
 <div class="row">
 <div class="col-md-4 col-md-offset-4 col-xs-6 col-xs-offset-2"  > <!-- Permet de gérer la largeur de la colonne  -->
   
   
    <?php if ($echecConnection==true && $_SERVER['REQUEST_METHOD']=='POST'){ ?>
  <div class="alert alert-danger">
 <strong>Erreur ! Information incorrecte </strong> 
</div>
 <?php } ?>
   
   <form class="loginFenetre " role="form" data-toggle="validator" method="post">    <!-- <form method="post"> pour le <GET-POST> ou  <form method="post" action="redirection.php"> -->

    <div class="form-group">
        <label for="inputEmail" class="control-label">Courriel:</label>
        <input type="email" class="form-control" id="inputEmail" placeholder="misterpig@gmail.com" name="email" data-error="Syntaxe incorrecte !" required>
    <div class="help-block with-errors"></div>
    </div> 
    
   <div class="form-group">
    <label for="exampleInputPassword1">Mot de passe:</label>
    <input type="password" class="form-control" name="password" id="exampleInputPassword1" placeholder="pigpass123">
  </div>
      <div>
         <button type="submit" class="btn btn-primary">Connexion </button>
 </div>
 </form>
 
   
 </div>
</div>
</div>
<script src="https://code.jquery.com/jquery-3.2.1.min.js" integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4=" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/1000hz-bootstrap-validator/0.11.9/validator.js"></script>
</body>

 
</html>