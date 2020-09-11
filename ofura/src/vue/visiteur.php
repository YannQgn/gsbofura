<!DOCTYPE HTML>
<html>
<head>
  <title>GSB</title>
  <link rel="stylesheet" type="text/css" href="../../style/style.css" title="style" />
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <script type="text/javascript" src="function.js"></script>
</head>
<body>
    <div id="main">
      <div id="header">
        <div id="logo">
          <div id="logo_text">
            <h1><a href="index.html">GSB</a></h1>
            <h2>Galaxy-Swiss Bourdin</h2>
          </div>
        </div>
        <div id="menubar">
          <ul id="menu">
            <li><a href="../../index.php">Accueil </a></li>
            <li><a href="formulaire.php">Formulaire</a></li>
            <li class="selected"><a href="visiteur.php">Afficher</a></li>
          </ul>
        </div>
      </div>
      <div id="content">
      	
 		<h3 onclick="afficher()">AJOUTER</h3>
 		
		<form id="ajouter" action="ajouter2.php" method="get">

            <br />
       		<label for="nom">Nom : </label>
            <input id="nom" name="nom" type="text" value="" size="10" maxlength="30" autocomplete="off" required/>
            <br /><br />
       		<label for="prenom">Prenom : </label>
            <input id="prenom" name="prenom" type="text" value="" size="10" maxlength="30" autocomplete="off" required/>
            <br /><br />
       		<label for="adresse">Adresse : </label>
            <input id="adresse" name="adresse" type="text" value="" size="10" maxlength="30" autocomplete="off" required/>
            <br /><br />
       		<label for="cp">Code postal : </label>
            <input id="cp" name="cp" type="text" value="" size="5" maxlength="5" autocomplete="off" required/>
            <br /><br />
       		<label for="ville">Ville : </label>
            <input id="ville" name="ville" type="text" value="" size="10" maxlength="30" autocomplete="off" required/>
            <br /><br />
       		<label for="dteEmbauche">Date d'embauche : </label>
            <input id="dteEmbauche" name="dteEmbauche" type="text" value="" size="10" maxlength="10" autocomplete="off" required/>
            <br /><br />
       		<label for="login">Login : </label>
            <input id="login" name="login" type="text" value="" size="10" maxlength="20" autocomplete="off" required/>
            <br /><br />
       		<label for="password">password : </label>
            <input id="password" name="password" type="password" value="" size="10" maxlength="30" required/>
            <br /><br />
            <p>
               	<input id="envoyer" name="envoyer" type="submit" value="Envoyer" title="" />
            </p>

		</form>
      
      
<table  style="margin:0px auto;max-width:1110px; background:#dcdee3;">
      <thead>
        <!-- titre des colones -->
        <tr height="50">
        
          <th width="20%"><strong>NOM </strong></th>
          <th width="20%">PRENOM</th>
          <th width="33%">DATE</th>
          <th width="13%"> SUPPRIMER </th>
          <th width="13%">&nbsp MODIFIER</th>
          
        </tr>
      </thead>

<?php
        //insertion de la connection a la base de données
        include 'connectAD.php';

        //selection les infos pour visiteurs
        $sql = "SELECT id,nom,prenom,dteEmbauche,ville FROM visiteur
                Order by nom;";

        $result = executeSQL($sql);
        if($result) {
            while ($row = mysqli_fetch_array($result)) {
        
        $temp= explode("-",$row['dteEmbauche']);
        $dteEmbauche = $temp[2];
        $dteEmbauche .= "/".$temp[1];
        $dteEmbauche .= "/".$temp[0];
                
      ?>

      <!-- creation des ligne des visiteur -->
      <?php $id = $row['id'];?>
        <tr>
        
          <td><?php echo $row['nom']; ?></td>
          <td><?php echo $row['prenom']; ?></td>
          <td><?php echo $dteEmbauche; ?></td>
          
          <td>
          	<!-- PROBLEME AVEC LE POP UP DE VERIFICATION DE SUPPRIMER : Si on click sur annuler ça supprime quand même -->
              <form id="form_effacer" action="DeleteV1.php">
    			<input id="visiteurid" name="visiteurid" type="hidden" value="<?php echo "$id" ?>" />
    			<input id="effacer" name="effacer" type="image" src="../../images/trash.png" alt="Submit" style="width: 49px;" value="Supprimer" />
    		  </form> 
		  </td>
		  
          <td>
          <form id="form_modifier" action="ModifVisiteur.php">
          <input id="id" name="id" type="hidden" value="<?php echo "$id" ?>" />
          <input id="modif" name="modifier" type="image" src="../../images/modify.png" alt="Submit" style="margin-left: 19px; width: 30px;" />  
          
          </form>
          </td>
          </tr>
          
          <?php
          }
        }
      ?>
          
</table>
      
      </div>
    <div id="content_footer"></div>
      <div id="footer">
		
      </div>
    </div>
</body>
</html>












