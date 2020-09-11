<!DOCTYPE HTML>
<html>
<head>
  <title>GSB</title>
  <link rel="stylesheet" type="text/css" href="../../style/style.css" title="style" />
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <script type="text/javascript" src="function.js"></script>
</head>
<body onload="afficher()">
      <div id="header">
        <div id="logo">
          <div id="logo_text">
            <h1><a href="index.html">GSB</a></h1>
            <h2>Galaxy-Swiss Bourdin</h2>
          </div>
        </div>
        <div id="menubar">
          <ul id="menu">
            <li><a href="../../index.html">Accueil </a></li>
            <li><a href="formulaire.html">Formulaire</a></li>
            <li class="selected"><a href="visiteur.php">Afficher</a></li>
          </ul>
        </div>
      </div>
      <div id="content">

        <form id="ajouter" action="Modif.php" method="get">
			<?php  
    			include "connectAD.php";
    			
    			$id = $_GET['id'];
    			
    			$sql = "SELECT id,nom,prenom,adresse,cp,ville,dteEmbauche,login,password FROM visiteur WHERE id='$id';";
    			
    			$result = executeSQL($sql);
    			$row = mysqli_fetch_array($result);
    			
    			$temp= explode("-",$row['dteEmbauche']);
    			$dteEmbauche = $temp[2];
    			$dteEmbauche .= "/".$temp[1];
    			$dteEmbauche .= "/".$temp[0];
			
			?>
			<br />
       		<label for="id">Identifiant : </label>
            <?php echo $row['id'];?>
            <input type="hidden" name="id" value="<?php echo $row['id'];?>"/>
            <br /><br />
       		<label for="nom">Nom : </label>
            <input id="nom" name="nom" type="text" value="<?php echo $row['nom'];?>" size="10" maxlength="30" autocomplete="off" required/>
            <br /><br />
       		<label for="prenom">Prenom : </label>
            <input id="prenom" name="prenom" type="text" value="<?php echo $row['prenom'];?>" size="10" maxlength="30" autocomplete="off" required/>
            <br /><br />
       		<label for="adresse">Adresse : </label>
            <input id="adresse" name="adresse" type="text" value="<?php echo $row['adresse'];?>" size="10" maxlength="30" autocomplete="off" required/>
            <br /><br />
       		<label for="cp">Code postal : </label>
            <input id="cp" name="cp" type="text" value="<?php echo $row['cp'];?>" size="5" maxlength="5" autocomplete="off" required/>
            <br /><br />
       		<label for="ville">Ville : </label>
            <input id="ville" name="ville" type="text" value="<?php echo $row['ville'];?>" size="10" maxlength="30" autocomplete="off" required/>
            <br /><br />
       		<label for="dteEmbauche">Date d'embauche : </label>
            <input id="dteEmbauche" name="dteEmbauche" type="text" value="<?php echo $dteEmbauche;?>" size="10" maxlength="10" autocomplete="off" required/>
            <br /><br />
       		<label for="login">Login : </label>
            <input id="login" name="login" type="text" value="<?php echo $row['login'];?>" size="10" maxlength="20" autocomplete="off" required/>
            <br /><br />
       		<label for="password">password : </label>
            <input id="password" name="password" type="text" value="<?php echo $row['password'];?>" size="10" maxlength="30" autocomplete="off" required/>
            <br /><br />
        <p>
           	<input id="envoyer" name="envoyer" type="submit" value="Envoyer" title="" />
        </p>

</form>

</div>
</html>
