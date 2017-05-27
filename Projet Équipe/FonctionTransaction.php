<?php  //Fonction pour retourner les infos des transferts dans le tableau
session_start();
    //var_dump($_SESSION);
        //session_destroy()
        try {

    $db = new PDO('mysql:host=localhost;dbname=c9', 'exatlas');

} catch (PDOException $e) {

    echo "Connection failed: " . $e->getMessage();

}


$db->exec("set names utf8");

function selectTransactions() {

    global $db;



    $sql = "SELECT transactions.*

            FROM transactions

            WHERE transactions.user_id = " . $_SESSION['user_id'] . "

            ORDER BY transactions.id DESC";



    $query = $db->query($sql);

    return $query->fetchAll(PDO::FETCH_OBJ);
} 


$transaction=selectTransactions();
//foreach ($transaction as $utilisateur){
    //echo $utilisateur->transaction_type;
//}

//echo '<pre>';print_r($transaction);'</pre>'
 
?>