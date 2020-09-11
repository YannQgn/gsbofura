<?php
include "connectAD.php";

   
    $id = $_GET['id'];
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
    
    
    $sql = 'UPDATE `visiteur`
         SET nom="'.$nom.'", prenom="'.$prenom.'", adresse="'.$adresse.'", ville="'.$ville.'", cp="'.$cp.'", dteEmbauche="'.$dteEmbauche.'", login="'.$login.'", password="'.$password.'" 
        WHERE id="'.$id.'"';

    $result =  executeSQL($sql);

     if ($result)
           echo "<meta http-equiv='refresh' content='0;url=visiteur.php?message=<font color=green> Modification effectuee </font>'>";

     else
           echo "<meta http-equiv='refresh' content='0;url=visiteur.php?message=<font color=red> Probleme de modification </font>'>";



        ?>
