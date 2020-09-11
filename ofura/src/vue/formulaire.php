<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width">
    <title>ETAT DE FRAIS ENGAGES</title>
    <link rel="stylesheet" type="text/css" href="../../style/style.css"/>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <script language="JavaScript">
      function ChangeUrl(formulaire)
      {
      if (formulaire.ListeUrl.selectedIndex != 0)
      {
      location.href = formulaire.ListeUrl.options[formulaire.ListeUrl.selectedIndex].value;
      }
      }
    </script>
  </head>
  <body>
  
  <?php 
  
  $login = $_GET['login'];
  $_SESSION['login'] = $login;
  
  ?>
  
    <div id="main">
    <div id="header">
      <div id="logo">
        <div id="logo_text">
          <h1><a href="index.php"> GSB</a></h1>
          <h2> Galaxy-Swiss Bourdin</h2>
        </div>
      </div>
      <div id="menubar">
        <ul id="menu">
          <li><a href="../../index.php">Accueil</a></li>
          <li class="selected"><a href="formulaire.php">Formulaire</a></li>
          <li><a href="visiteur.php">Afficher</a></li>
        </ul>
      </div>
    </div>
    <center>
    <form action="ppe.php" method="get"> 
    <div id="bordure">
    <div id="entete" class="entete">
      <br />
      <a href="index.html"><img src="gsb.png" /></a>
      <h3>ETAT DE FRAIS ENGAGES</h3>
    <h4 id "entete" class="entete"><em>A retourner au plus tard le 10 du mois qui suit l'engagement des frais</em></h4>
    </div>
    <br/>
    <p>Véhicule : <p>
    
    <input for="vehicule" type="radio" name="vehicule" value="4CVDiesel"/>
    <label for="4CVDiesel">4CV Diesel</label>
    
    <input for="vehicule" type="radio" name="vehicule" value="56CVDiesel"/>
    <label for="56CVDiesel">5/6CV Diesel</label>
    
    <input for="vehicule" type="radio" name="vehicule" value="4CVEssence"/>
    <label for="4CVEssence">4CV Essence</label>
    
    <input for="vehicule" type="radio" name="vehicule" value="56CVEssence"/>
    <label for="56CVEssence">5/6CV Essence</label>
    
    <br/><br/>
    
    <label for="annee">Année (4 chiffres) : </label>
    <input for="annee" type="text" name="annee"/><br/><br/>
    
    <label for="nom">Nom :  </label>
    <input for="nom" type="text" name="nom"/><br/><br/>
    
    <label for="idvisiteur">id Visiteur: </label>
    <input for="idvisiteur" type="text" name="idvisiteur" value=<?php echo "'".$login."'"; ?> disabled/>
    <br/><br/>
    

    
    <br/><br/>
    <label for="mois">Mois :  </label>
    <select name="mois" id="mois">
      <option value="">--Choisissez le mois--</option>
      <option value="Janvier">Janvier</option>
      <option value="Février">Février</option>
      <option value="Mars">Mars</option>
      <option value="Avril">Avril</option>
      <option value="Mai">Mai</option>
      <option value="Juin">Juin</option>
      <option value="Juillet">Juillet</option>
      <option value="Août">Août</option>
      <option value="Septembre">Septembre</option>
      <option value="Octobre">Octobre</option>
      <option value="Novembre">Novembre</option>
      <option value="Décembre">Décembre</option>
    </select>
    
    <br/><br/>
    <div id="table">
      <table>
        <tr>
            <th scope="col">Frais forfaitaires<sup id="sup1">1</sup></th>
            <th scope="col">Quantité</th>
            <th scope="col">Montant unitaire<sup id="sup1">2</sup></th>
            <th scope="col">Total</th>
        </tr>
        <tr>
            <th scope="row">Nuitée</th>
            <td><input name="nuitee" type="text"/></td>
            <td>80.00</td>
            <td><input name="nuiteetotal" type="text"/></td>
        </tr>
        <tr>
            <th scope="row">Repas midi</th>
            <td><input name="repas" type="text"/></td>
            <td>29.00</td>
            <td><input name="repastotal" type="text"/></td>
        </tr>
        <tr>
            <th scope="row">Kilomètrage<sup id="sup2">3</sup></th>
            <td><input name="quantite" type="text"/></td>
            <td><input name="quantitemontant" type="text"/></td>
            <td><input name="quantitetotal" type="text"/></td>
        </tr>
      </table>
    </div>
    <div id="envoyer">
      <input name="envoyer" type="submit" value="Envoyer"/>
    </div>
    </div>
    <div id="signature">
      <p><b><em>Signature</em></b></p>
    </form>
    </div>
    </center>
    <div id="content_footer"></div>
      <div id="footer">
        <div id="liste">
            </select>
        </div>
      </div>
    </div>
  </body>
</html>