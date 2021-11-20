<?php

session_start();
// declaration des constante de connexion
define('DB_SERVER','localhost') ;
define('DB_NAME','registration');
define('DB_USERNAME','root');
define('DB_PASSWORD','');

// connexion à la base de donnée
$cnx = mysqli_connect(DB_SERVER,DB_USERNAME,DB_PASSWORD,DB_NAME);
if ($cnx === false) {
    # code...
    die("Erreur : impossible de se connecter .".mysqli_connect_error());
}

?>