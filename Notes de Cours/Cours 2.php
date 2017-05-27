<?php

$cours='DAA';

echo 'bienvenue dans le cours de $cours <br>';
// avec des guillemets simple, le $cours est pas renvoyé
echo "bienvenue dans le cours de $cours <br>";

// le backslash \ permet de faire apparaitre un caractère qui est normalement utilisé pour une commande
echo "je veux utiliser un guillemet double \" <br>";

$produit='T-shirt';
 // pourquoi besoin de fermer et ré-ouvrir le php 
 
echo "en fin de semaine je vais m'acheter un $produit <br>";

echo 'en fin de semaine je vais m\'acheter un ' . $produit . ' au Labaie. <br>';

$charcuterie='merguez';

echo 'j\'aimerai m\'acheter des ' . $charcuterie . ' pour l\'emporter chez mon ami <br>'; 
echo "j'aimerai m'acheter des $charcuterie  pour l'emporter chez mon ami <br>";

// SUR LES NOMBRES:
echo "5+5 <br>";
echo (5+5) .'<br>';

//EXERCICE

echo "J'aime l'informatique <br>";
echo 'J\'aime l\'informatique <br> ';

echo "J'ai ". (19+2) . " ans <br>"; 
//ou bien
echo 'J\'ai '. (19+4) . 'ans <br>';

//DEMO VARIABLES

$tailleduslip="M";
echo "Je porte des slips en $tailleduslip <br>";


// LES DÉCISIONS
//                 1. IF-ELSE

//                          On assigne la valeur
$estconnecté= 5; 

//                          On compare notre valeur avec les doubles ==, pour différent de !=
if ($estconnecté==false) {echo "Je suis un winner <br>";
} else {echo "Je suis un loser <br>";
}
//                          Pour mettre deux conditions "et" dans un seul If, on peut utiliser &&, pour OU, on utilise les deux barres verticales ||
$age=19;
if ($age>14 && $age<18) {echo "Je suis dans la fourchette <br>";
} else {echo "Je ne suis pas dans la fourchette <br>";
}
// EXERCICE

$qteConnectionsLinkedin=98;
$qteAmisFacebook=221;

if ($qteAmisFacebook>$qteConnectionsLinkedin) {echo "J'ai plus d'amis que de connections";
} 
else { echo "J'ai plus de connections que d'amis";
}








?>