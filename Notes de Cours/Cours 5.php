
<!doctype html>

<html lang="en">

<head>

    <meta charset="UTF-8">



<?php

                                        // Fonctions

function computeTaxes ($montant) { 
    return $montant * 1.15;
}
 
                                     // Sans utiliser de fonction
$cellulaire = 500;
$bouteille = 1.49;

$cellulaireavectaxes = $cellulaire* 1.15; 
echo $cellulaireavectaxes . '<br>';

                                        // AVEC LA FONCTION
            
$bouteillesavectaxes= computeTaxes($bouteille);
echo $bouteillesavectaxes . '<br>';

                                     //EXERCICE
function affichage($variable) {
    foreach ($variable as $valeurs){
        echo 'mon prénom est ' . $valeurs . '<br>' ;
    }
}                  

$Prénom = ['Raph', 'Maha', 'Yann'];
affichage($Prénom);         // --> permet d'afficher directement
                            // on peut définir la fonction avant ou après, ça change rien 

                                    // AUTRE EXEMPLE FONCTION + AVANCÉ

function calculateur($montant, $taxes){
    echo 'Les taxes sont de ' . $taxes . '<br>';
    $total = $montant * (1+ $taxes);
    echo 'Le montant de base est de ' . $montant . '$' . ' et de ' . $total . '$' . ' TTC' . '<br>';
}

$ZOB= 20 ;
$wii = 200 ;
calculateur($ZOB, 0.4);
calculateur ($wii, 0.21); //plutôt cool !


                                     // Personnaliser une fonction valeur par défaut
                         
function affichemonnom($nom = 'Roger') {
    echo "mon nom est $nom. <br>";
}                        
affichemonnom();
affichemonnom('Timber');
affichemonnom('Samuel');

                                    //Propriété du RETURN
                         
function test(){
    return 123; // dès qu'un return est exécuté, ceux d'après ne seront PAS LU. -> voir le résultat du calcul pour bien comprendre
    return 235;
}
                                    // On peut donner la valeur 123 à une variable comme suis:
  
  $test = test(); //calcul pour verifier
echo $test*2 . '<br>';

                                     //ON NE PEUT PAS ECHO DES VARIABLES -DÉFINI EN DEHORS DE LA FONCTION- DANS UNE FONCTION
                                     //sauf si on utilise la fonction GLOBAL
 


    //include(machintruc.php); //->équivalent de faire un ctl+c ctl+v  du code du fichier à cet endroit

                                        //FONCTION MINIMUM AFFICHAGE
$Yann= [3, 5, 2, 6, 7, 5, 3];
$min= min($Yann) . "<br>"; //peut le mettre dans une fonction
echo $min;

//for($i=0; $i<2;){
// echo $i;   
//}

function essai($vari='John'){
echo "mon fournisseur est $vari <br>";
return 234;
}

essai () ;
essai('Stevens');


?>