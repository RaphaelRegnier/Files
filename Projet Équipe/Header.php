<nav class="navbar navbar-default">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="/Projet%20Équipe/AccountStatus.php">
    <img src="/Projet%20Équipe/imgs/piggyFav.png" width="30" height="30" alt="">
  </a>
    <a class="navbar-brand" href="/Projet%20Équipe/AccountStatus.php">  PigBank </a>
  
    </div>





    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">

      <ul class="nav navbar-nav navbar-right">
        <li><a href="/Projet%20Équipe/AccountStatus.php">Voir l'état de mon compte</a></li>
        <li><a href="/Projet%20Équipe/Payment.php">Payer une facture</a></li>
        <li><a href="/Projet%20Équipe/Virement.php">Effectuer un virement</a></li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><?php echo $_SESSION['name']; ?> <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="/Projet%20Équipe/LogOut.php">Se déconnecter</a></li>

          </ul>
        </li>
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>