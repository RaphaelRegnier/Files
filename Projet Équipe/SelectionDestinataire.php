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

function selectDestinataires() {

    global $db;



    $sql = "SELECT users.* 

                FROM users 

                WHERE users.id <> " . $_SESSION['user_id'];



    $query = $db->query($sql);



    return $query->fetchAll(PDO::FETCH_OBJ);

}

$listedestinataires=selectDestinataires();
//foreach ($listedestinataires as $destinataires){
  //  echo $destinataires->name . "<br>";
//} 


?>