<!doctype html>

<html lang="en">

<head>

    <meta charset="UTF-8">

    <title>Premier Essai</title>

</head>

<body>
    <table> 
        <tr>
            <?php //C'est cool les commentaires 
             echo 'saucisse';     ?>
            <br>
             <a href='http://www.facebook.com'>Cliques moi dessus jeune poulet déséché
            </a>
            <img src='    ' > 
            </img>
        </tr>
    </table>

<?php


$papa=28;
$moi=0;



while($papa>2*$moi){ 
    echo "mon père à $papa ans, moi j'ai $moi ans, il n'a pas le double de mon âge. <br>";
    $papa=$papa+1;
    $moi=$moi+1; 
   //if ($papa<=2*$moi){ echo "mon père a $papa ans, c'est le double de mon âge soit $moi ans";}
}
 
 while($papa<=2*$moi && $papa<120){ 
    echo "mon père à $papa ans, moi j'ai $moi ans, il a le double de mon âge ou moins. <br>";
    $papa=$papa+1;
   $moi=$moi+1;
}

?>

</body>

</html>