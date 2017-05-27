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
        
        function selectCompte() {

    global $db;



    $sql = "SELECT sum(transactions.amount) AS solde 

            FROM transactions

            WHERE transactions.user_id = " . $_SESSION['user_id'];



    $query = $db->query($sql);

    return $query->fetch(PDO::FETCH_OBJ);

}
$solde=selectCompte();
$total=$solde->solde;  //on va chercher la propriété solde ou est stocké la valeur 10 000
   //var_dump($solde);
       
     //  echo $total;
        
        ?>