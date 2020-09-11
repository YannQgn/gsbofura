<?php

include "connectAD.php";


$nom = $_GET['nom'];
$prenom = $_GET['prenom'];
$adresse = $_GET['adresse'];
$ville = $_GET['ville'];
$cp = $_GET['cp'];
$dteEmbauche = $_GET['dteEmbauche'];
$login = $_GET['login'];
$password = $_GET['password'];

$temp = explode("/",$dteEmbauche);
$dteEmbauche = $temp[2];
$dteEmbauche .= "-".$temp[1];
$dteEmbauche .= "-".$temp[0];


$sql = "INSERT INTO visiteur ( nom, prenom, adresse, ville, cp, dteEmbauche, login, password)
        VALUES ('$nom','$prenom','$adresse', '$ville', '$cp', '$dteEmbauche', '$login', '$password')";

$result =  executeSQL($sql);

if ($result)
        echo "<meta http-equiv='refresh' content='0;url=visiteur.php?message=<font color=green> Modification effectuee </font>'>";

        else
                echo "<meta http-equiv='refresh' content='0;url=visiteur.php?message=<font color=red> Probleme de modification </font>'>";
    
    
?>