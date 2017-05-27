<?php
                //DEMO WHILE


$qte=0;

while($qte<50) {
    // on attend que la classe se remplisse
    echo " la classe n'est pas remplie  $qte ";
    echo "<br>";
    
    //on pourrait écrire $qte++
    // si on ne fait pas de changement a la valeur, la boucle sera infinie
    // ici on va de 4 en 4
    $qte=$qte+4;
}

                //EXERCICE WHILE

$Ftemp=-50;

while($Ftemp<=50) {
    echo "F=$Ftemp , " . 'C=' . round(($Ftemp-32)*(5/9), 2);
echo "<br>";
$Ftemp=$Ftemp+5;
}

                //DEMO FOR


//le cours commencera lorsqu'il y aura 50 étudiants
//1ere paramètre : initialisation
//2ème paramètre : test (condition a satisfaire)
//3eme paremetre : changement de valeur a la variable

for($qte=0; $qte < 50; $qte=$qte+1)
    echo " la classe n'est pas encore pleine " . "$qte <br>";

//Plus rapide que le while.

            //EXERCICE TEMPERATURE AVEC FOR

for ($Ftemp=-50; $Ftemp<=50; $Ftemp=$Ftemp+5)
echo "F=$Ftemp ," . 'C=' . round(($Ftemp-32)*(5/9), 2) . "<br>";



for ($Faceb=10; $Faceb<100; $Faceb=$Faceb+1)
echo "Je n'ai pas assez d'amis sur facebook. J'en ai seulement $Faceb <br>";

$name=Jacques;
echo "guillemets doubles " . "$name " . (2+2) . ' guillemets simples ' . '$name';




?>