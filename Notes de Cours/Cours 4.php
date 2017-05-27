
<!doctype html>

<html lang="en">

<head>

    <meta charset="UTF-8">
    <?php
    // Démonstration simple d'un tableau numérique
    
    $prévision= [
        -8,
        -4,
        -5
        ];
        
        //Ajout de valeur a un tableau numérique
        // Les numéros sont INDEXÉS par les brackets
        
        echo " la prévision de demain est $prévision[0] . <br>";
        echo " la prévision de demain est $prévision[1] . <br>";

                            // Création d'un tableau association, clé entre guillemets

$prévisions= [
    'demain'=> -8,
    'apres demain' => -4
    ];
    
    foreach ($prévisions as $bite => $patatess) {
    echo 'la température de ' . $bite . ' sera de ' . $patatess . '<br>'; 
    }
    
                            // Pour ajouter une valeur, on doit spécifier la clé, ici ajd
$prévisions['ajd']=-9;
    
    echo "les prévisions pour ajd sont " . $prévisions['ajd'];
    echo "<br>";
    echo "les prévisions pour demain sont " . $prévisions['demain'];
    echo "<br>";
    echo "les prévisions pour après-demain sont " . $prévisions['apres_demain'];
    echo "<br>";
    
            // Var_dump permet de détecter une erreur -différence- dans l'écriture d'une variable en renvoyant directement les différentes apparitions
    var_dump ($prévisions);
    echo "<br>";
    echo '<pre>';print_r($prévisions);'</pre>';

                            // EXERCICE

$liststudents=[
    Yann,
    Maha,
    Raph,
    John,
    Wilson,
    Pierre,
    Robby
    ];

echo $liststudents[0];
echo "<br>";
echo $liststudents[3];
echo "<br>";
echo $liststudents[5];
echo "<br>";
                              // Mieux que var_Dump la ligne du echo '<pre>';print_r ($var) pour déboguer
var_dump($liststudents);
echo "<br>";
echo '<pre>';print_r($liststudents);'</pre>';

                                        // POUR PARCOURIR LE TABLEAU SANS AVOIR A METTRE ECHO A CHAQUE CLÉ
                                        // 'as' permet de recopier les variables dans une nouvelle temporairement -tampon-, ici les étudiants dans patate
 
 foreach($liststudents as $patate) {
     echo 'Le prénom de cet étudiant est ' . $patate . '<br>';
 }
 var_dump($patate);
 
                                        // Si on a besoin des clés 
 
 foreach ($liststudents as $couilles => $Prénom) {
     echo 'La clé correspondant à ' . $Prénom . ' est ' . $couilles . "<br>";
 }
 
 
                                // On change la premiere -clé 0- prévision a -2 
 
 $prévision[0]=-2;
 echo "la prévision de demain a été changé à $prévision[0] au lieu du -8";
 
                                // Pour enlever un élément en particulier UNSET
 echo '<pre>';print_r($prévisions);'</pre>';
 unset ($prévisions['demain']);
 echo '<pre>';print_r($prévisions);'</pre>';
                                // en comparant les deux listes on voit que le prévision avec comme clé demain à disparu.
 
 
 
 
 
 
 
?>