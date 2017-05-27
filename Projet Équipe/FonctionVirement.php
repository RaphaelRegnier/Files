<?php 

try {

    $db = new PDO('mysql:host=localhost;dbname=c9', 'exatlas');

} catch (PDOException $e) {

    echo "Connection failed: " . $e->getMessage();

}



$db->exec("set names utf8");

function performTransfert() {

    global $db;



    $user_id = intval($_SESSION['user_id']);

    $transaction_type = $_POST['transaction_type'];

    $to_user_id = intval($_POST['to_user_id']); //aller chercher le id de la personne sélectionner dans la liste

    $description = $_POST['description'];

    $amount =  floatval($_POST['amount']);

    $created_at = date('Y-m-d');

    // Enlève l'argent du compte de l'utilisateur envoyant le virement.

    $query = "INSERT INTO transactions (user_id, transaction_type, description, amount, created_at) 

        VALUES ($user_id, '$transaction_type', '$description', -$amount, '$created_at')";

    $db->exec($query);



    // Ajout l'argent dans le compte du bénéficiaire

    $query = "INSERT INTO transactions (user_id, transaction_type, description, amount, created_at) 

        VALUES ($to_user_id, '$transaction_type', '$description', $amount, '$created_at')";

    $db->exec($query);

}



?>