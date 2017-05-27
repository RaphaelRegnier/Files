<!--   BASE DE DONNÉES-->

<?php

// dans le terminal on écrit "mysql-ctl start"
// puis "phpmyadmin-ctl install"


//il faut crée un objet PDO pour relier notre back end à la database

try {

    $db = new PDO('mysql:host=localhost;dbname=c9', 'exatlas');

} catch (PDOException $e) {

    echo "Connection failed: " . $e->getMessage();

}


$db->exec("set names utf8");


$query = $db->query('SELECT * FROM reservations'); // on demande d'aller chercher les infos dans l'onglet publications et de les stocker dans $query

$results = $query->fetchAll(PDO::FETCH_OBJ); // on organise les résultats dans un array avec fetchall, puis on stock dans le array $results

echo '<pre>';var_dump($query);'</pre>';

echo '<pre>';var_dump($results);'</pre>';


?>

<!doctype html>

<html lang="en">

<head> 

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

</head>

<body>
    
<div>
         <?php foreach($results as $raw){ ?>
            <li> <?php echo $raw->id . " " . $raw->user_id . " " . $raw->description ;  } ?> </li>

</div>
    
    <!-- POUR INSERER LES RESULTATS DANS LA BASE DE DONNÉES -->
    
    <?php




$db->exec("INSERT INTO publications (description) VALUES ('Le sandwich est bon')");
//$db->exec("INSERT INTO reservations (description) VALUES ('tapez le texte ici')");


?>
    
</body>
    

</html>