<?php
//     $myusername=$_GET['login'];
//     $mypassword=$_GET['password'];

//     echo $myusername."<br />".$mypassword;
?>

<?php @session_start();

//securite : demarre la tamporisation de sortie. Tant qu'elle est enclenchee, aucune donnee, hormis les en-tetes,
//n'est envoyee au navigateur, mais temporairement mise en tampon.
ob_start();

include 'connectAD.php';

// on recupere l'identifiant et le mdp si renseignes
// verification cote du serveurt
// une verification sera faite cote client en JavaScript
if  ((!empty($_GET['login'])) && (!empty($_GET['password']))) {
    
    //recupere les variables
    $login=$_GET['login'];
    $password=$_GET['password'];
    
    // $password=md5($password);
    
    // creation de la requete de test l'existance de l'utilisateur et de la validite de son mpd
    $sql="SELECT * FROM visiteur WHERE login='$login' and password='$password'";

    // on recupere le nombre de resultats de la requete
    $count=compteSQL($sql);
    
    // si l'utilisateur existe et le mot de passe est correct alors $count=1
    if ($count == 1) {
        // on enregistre le username dans une variables de sessions
        // et on fait une redirection vers le fichier "choice.php"
        
        $_SESSION['login'] = $_GET['login'];
        echo "<meta http-equiv='refresh' content='0;url=formulaire.php?login=$login'>";
    }
    //probleme avec l'utilisateur ou le mdp
    else {
        //detruit la session
        session_destroy();
        //rappel la page de login avec un message
        echo "<meta http-equiv='refresh' content='0;url=../../index.php?message=Utilisateur ou mot de passe non valide'>";
    }
    
} else
    //test cote serveur les champs n'ont pas ete remplis
    echo "<meta http-equiv='refresh' content='0;url=../../index.php?message=Renseigner les deux champs'>";
    
    //Envoie les donnees du tampon de sortie et eteint la tamporisation de sortie
    ob_end_flush();
?>