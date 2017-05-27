<?php 

session_start();

        //$_SESSION['test']=20; //aprés la 1ere itération, on passe en commentaire cette ligne.
if ($_SESSION['test']>10){ 
    $_SESSION['test'] = ($_SESSION['test']/2);
}
else { 
    if ($_SESSION['test']<10) { 
    $_SESSION['test'] = ($_SESSION['test']*6);
} else { 

if ($_SESSION['test']==10) { 
    $_SESSION['test'] = ($_SESSION['test']*3);
}}}

echo $_SESSION['test'];
echo '<br>';

//  $_SESSION['a']=0; //aprés la 1ere itération, on passe en commentaire cette ligne.
$_SESSION['a']++;
echo $_SESSION['a'];
if ($_SESSION['a'] % 20 ===0){
     unset($_SESSION['test']);
     $_SESSION['test'] = 10;
     echo " la valeur a ete reinitialisee";
}
?>