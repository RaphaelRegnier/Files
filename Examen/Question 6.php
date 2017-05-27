<?php
/**
 * Initialisation de la connexion à la base de données.
 * Changer 'danielparpal' pour votre nom d'utilisateur.
 */
try {
    $db = new PDO('mysql:host=localhost;dbname=c9', 'exatlas');
} catch (PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}
$db->exec("set names utf8");

/**
 * Le script ci-dessous permet d'aller récupérer toutes les réservations
 * de l'utilisateur 1.
 */
$query = $db->query('SELECT * FROM reservations');
$results = $query->fetchAll(PDO::FETCH_OBJ);

foreach($results as $result) {

    echo "$result->description <br>";
    
}       ?>

<!doctype html>

<html lang="en">

<head>

    <meta charset="UTF-8">

    <title>Document</title>

</head>

<body>

<form>
    <input type="number" name="user_id"/>
    <input type="submit" value="Submit"/>
</form>

</body>

</html>
