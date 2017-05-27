<?php

try {

    $db = new PDO('mysql:host=localhost;dbname=c9', 'exatlas');

} catch (PDOException $e) {

    echo "Connection failed: " . $e->getMessage();

}



$db->exec("set names utf8");


function selectUser() {

    global $db;



    $query = $db->query('SELECT id, name, password FROM users WHERE email="mat@hec.ca" LIMIT 1');

    return $query->fetch(PDO::FETCH_OBJ);
    
}

$user = selectUser();

echo '<pre>';print_r($user);'</pre>';

if($user){
    
    
    
    
}


?>