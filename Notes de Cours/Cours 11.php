<?php 
// LES VARIABLES DE SESSION

//$a= 1;
//$a = $a + 1;
//echo $a;


session_start();
$_SESSION['a'] = 1;
$_SESSION['a'] = $_SESSION['a'] + 1 ;
echo $_SESSION['a'];



##1ere etape session_start()


//$_SESSION['prenom'] = 'Daniel';
echo $_SESSION['prenom']   ; //peut s'afficher sur n'importe quel page tant qu'on fait session_start()

//var_dump ($_SESSION);


//Suite de fibonnacci

//$_SESSION['premier'] = 0;
//$_SESSION['deuxieme'] = 1;
$_SESSION['trois'] = $_SESSION['premier'] + $_SESSION['deuxieme'];

$_SESSION['premier'] = $_SESSION['deuxieme'];
$_SESSION['deuxieme'] = $_SESSION['trois'];
echo  $_SESSION['trois'];

## MOT DE PASSE CLAIR|HACHÉ

$mdpClair = 'mat123456';
$mdpHash= '$2y$10$GIDOki.UNZjNBVLLfAzBW.l5zgMKY7MYBnZJj07RqeU/ZXG9eQcEK'; ##faut prendre le bon mdp hash dans la bdd

$validation = password_verify($mdpClair, $mdpHash); ##renvoie TRUE si c'est bon

if ($validation) {
echo 'cest bon';
} else { echo 'mauvais';
    
}


//dans notre travail, le mot de passe clair vient du form, et le mdp hashé vient de la bdd



?>