<?php
session_start();
    //var_dump($_SESSION);
        //session_destroy()
        try {

    $db = new PDO('mysql:host=localhost;dbname=c9', 'exatlas');

} catch (PDOException $e) {

    echo "Connection failed: " . $e->getMessage();

}



$db->exec("set names utf8"); 

function performPaiement() {

    global $db;



    $user_id = intval($_SESSION['user_id']);

    $transaction_type = $_POST['transaction_type'];

    $description = $_POST['description'];

    $amount =  floatval($_POST['amount']);

    $created_at = date('Y-m-d');



    // Enlève l'argent du compte de l'utilisateur envoyant le virement.

    $query = "INSERT INTO transactions (user_id, transaction_type, description, amount, created_at) 

        VALUES ($user_id, '$transaction_type', '$description', -$amount, '$created_at')";

    $db->exec($query);

}





?>