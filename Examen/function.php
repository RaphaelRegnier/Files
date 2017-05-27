<?php
 include('array-format-logiciel-A');
 include('array-format-logiciel-B');

function Conversion($arrayFormatA) {
    foreach($arrayFormatA as $arrayFormatA => $arrayFormatB) {
        $arrayFormatA = $arrayFormatB;
    }
    
    // Mot clé réservé return
    return($arrayFormatA);
}
// Appeler la fonction
$Convert= Conversion($arrayFormatA);

echo "$Convert";


?>

