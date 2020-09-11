<?php
require_once '../AccesDonnees.php';


$host = "localhost";
$user = "root";
$password = "root";
$dbname = "gsb";
$port='3306';



$connexion = connexion($host, $port, $dbname, $user, $password);

if (!$connexion) {
    //print_r($_SERVER);
    echo "Echec Connexion...<br />";
} else {
    
   // echo "<pre>";
   // echo "Connexion reussie<br />";
   // echo "Server addr : ".$_SERVER['SERVER_ADDR'].":".$_SERVER['SERVER_PORT'];
  //  echo " -- IPV4 : ".adresseIPV4($_SERVER['SERVER_ADDR'])."<br />";
   // echo "Remote addr : ".$_SERVER['REMOTE_ADDR'].":".$_SERVER['REMOTE_PORT'];
   // echo " -- IPV4 : ".adresseIPV4($_SERVER['REMOTE_ADDR'])."<br />";
   // echo "Host : $host:$port<br />";
   // echo "Utilisateur : $user";
   // echo "</pre>";
    
   // echo "Bonjour "."<br/>";
}
?>

