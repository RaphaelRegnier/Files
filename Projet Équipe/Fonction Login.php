<?php

    try {
    
        $db = new PDO('mysql:host=localhost;dbname=c9', 'exatlas');
    
    } catch (PDOException $e) {
    
        echo "Connection failed: " . $e->getMessage();
    
    }
    
    
    
    $db->exec("set names utf8");
    
     function selectUser() {
    
        global $db;
    
    
    
        $query = $db->query('SELECT id, name, password, email FROM users WHERE email="' . $_POST['email'] . '" LIMIT 1'); //' . $_POST['email'] . '
    
        return $query->fetch(PDO::FETCH_OBJ);
    
    }

    
    $user=selectUser();

    $validation=password_verify($_POST[password], $user->password); 
    
    if($user){
        if($validation){ 
            //echo 'CEST OK il faut me rediriger et ouvrir ma session!';
                //var_dump($user);
            $_SESSION= [
                password => $user->password,
                email => $user->email, //TODO : $user->email renvois NULL
                name => $user->name,
                user_id => $user->id
                ];
            
        } 
        else { 
            //echo 'mauvais MDP!'; 
        }
    } else { 
           // echo 'utilisateur inexistant !';
    }









?>