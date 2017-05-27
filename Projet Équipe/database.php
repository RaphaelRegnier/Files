
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

 * Trouve un utilisateur dans la base de données en utilisant son courriel.

 * Retourne : id, nom et mot de passe

 * Note : requis pour effectuer le login de l'utilisateur

 */


  function selectUser() {

   global $db;



    $query = $db->query('SELECT id, name, password FROM users WHERE email="' . $_POST['email'] . '" LIMIT 1');

  return $query->fetch(PDO::FETCH_OBJ);

}



/**

 * Retourne le solde du compte (somme des transactions) pour l'utilisateur connecté.

 * Note : requis pour afficher le solde du compte.

 */

function selectCompte() {

    global $db;



    $sql = "SELECT sum(transactions.amount) AS solde

            FROM transactions

            WHERE transactions.user_id = " . $_SESSION['user_id'];



    $query = $db->query($sql);

    return $query->fetch(PDO::FETCH_OBJ);

}



/**

 * Retourne toutes les transactions correspondants à l'utilisateur connecté.

 * Note : requis pour afficher les transactions d'un utilisateur.

 */

function selectTransactions() {

    global $db;



    $sql = "SELECT transactions.*

            FROM transactions

            WHERE transactions.user_id = " . $_SESSION['user_id'] . "

            ORDER BY transactions.id DESC";



    $query = $db->query($sql);

    return $query->fetchAll(PDO::FETCH_OBJ);

}

//il faut que lorsqu'on fait un virement, ça s'écrive dans la BDD en tant que transactions, il faut faire un foreach qui génère une ligne de tableau par transaction comme vu au cours 10


/**

 * Effectue la sélection des destinataires à qui un utilisateur peut faire un virement.

 * Retourne cette sélection.

 * À noter qu'un utilisateur ne peut se virer de l'argent à lui-même.

 */

function selectDestinataires() {

    global $db;



    $sql = "SELECT users.* 

                FROM users 

                WHERE users.id <> " . $_SESSION['user_id'];



    $query = $db->query($sql);



    return $query->fetchAll(PDO::FETCH_OBJ);

}



/**

 * Effectue les transactions requises pour indiquer qu'un virement a été fait.

 * Cela inclut la transaction pour l'utilisateur effectuant le virement, ainsi

 * que la transaction pour l'utilisateur recevant le virement.

 */

function performTransfert() {

    global $db;



    $user_id = intval($_SESSION['user_id']);

    $transaction_type = $_POST['transaction_type'];

    $to_user_id = intval($_POST['to_user_id']);

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



/**

 * Effectue les transactions requises pour indiquer qu'un virement a été fait.

 * Cela inclut la transaction pour l'utilisateur effectuant le virement, ainsi

 * que la transaction pour l'utilisateur recevant le virement.

 */

function performPaiement() {

    global $db;




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