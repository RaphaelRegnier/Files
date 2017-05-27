

<?php 
session_start();

 if(isset($_SESSION['password'])){
    }   
    else{
    header('Location: Login.php');
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

<?php
    include ("Header.php");
   include ("FonctionSolde.php");
   include ("FonctionTransaction.php");
    ?>
    
</head>

<body>
   
   <div class="container">
       <div class="row">
       <div class="col-md-4 col-md-offset-0">
   <h2>État du compte</h2>
   </div> </div> </div>
    
  
 <div class="container solde">
       <div class="row">
       <div class="col-md-4 col-md-offset-0">
     <div class="alert alert-info" role="alert">
          Le solde de votre Piggy Bank est de  <?php echo $total . ' $'    ?>
     </div> </div> </div> </div>
  
 
  
  <div class="container">
       <div class="row">
       <div class="col-md-7 col-md-offset-0">
    <div class="messagetable" >
           <h4>Voici la liste des transactions de la plus récente à la moins récente: </h4> 
    </div> </div> </div> </div>

 
  
  <!-- <label for="tableau1">   <h4>Voici la liste des transactions de la plus récente à la moins récente </h4> </label> -->
  <div class="container" id="tableau1">
  <table class="table table-striped table-bordered" id="tableau1">
    <thead>
      <tr>
        <th>Date</th>
        <th>Type</th>
        <th>Montant</th>
        <th>Détails supplémentaires</th>
      </tr>
    </thead>
    <tbody>
      <?php foreach ($transaction as $utilisateur){ ?>
            <tr>
                <td>
                <?php  echo $utilisateur->created_at ;?>
              </td>
             <td>
                <?php  echo $utilisateur->transaction_type; ?>
              </td>
              <td>
                <?php  echo $utilisateur->amount  ?> $
              </td>
             <td>
                <?php  echo $utilisateur->description?>
              </td>
             </tr>
            <?php } ?>
    </tbody>
  </table>
</div>

 

<script src="https://code.jquery.com/jquery-3.2.1.min.js" integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4=" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
</body>


</html>