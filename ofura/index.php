<html>
<head>
  <title>GSB</title>
  <link rel="stylesheet" type="text/css" href="style/style.css" title="style" />
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <script language="JavaScript">
	  function afficher(){
			div = document.getElementById("connexion")
			if(getComputedStyle(div).display != "none"){
			    div.style.display = "none";
			  } else {
			    div.style.display = "block";
			  }
		}
   </script>
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
            <li class="selected"><a href="index.html">Accueil </a></li>
          </ul>
        </div>
      </div>
      <div id="content">
      <h3>L'entreprise :</h3>
      <p>Le laboratoire Galaxy Swiss Bourdin (GSB) est issu de la fusion entre le géant américain Galaxy (spécialisé dans le secteur des maladies virales dont le SIDA et les hépatites) et le conglomérat européen Swiss Bourdin (travaillant sur des médicaments plus conventionnels), lui même déjà union de trois petits laboratoires. 
      L'entité Galaxy Swiss Bourdin Europe a établi son siège administratif à Paris. Le siège social de la multinationale est situé à Philadelphie, Pennsylvanie, aux Etats-Unis .</p>
      <h3>Réorganisation :</h3>
      <p>Une conséquence de cette fusion, est la recherche d'une optimisation de l’activité du groupe ainsi constitué en réalisant des économies d’échelle dans la production et la distribution des médicaments (en passant par une nécessaire restructuration et vague de licenciement), tout en prenant le meilleur des deux laboratoires sur les produits concurrents.
      L'entreprise compte 480 visiteurs médicaux en France métropolitaine (Corse comprise), et 60 dans les départements et territoires d'outre-mer. Les territoires sont répartis en 6 secteurs géographiques (Paris-Centre, Sud, Nord, Ouest, Est, DTOM Caraïbes-Amériques, DTOM Asie-Afrique).</p>
      
      <br /><br />
      <h4 style="text-align: center; font-size: 36px; color: #29415D; border: solid; border-radius: 10px; cursor: pointer;" onclick="afficher()">CONNEXION</h4>
      
			<form style="text-align:center; display: none;" class="cnxform" id="connexion" method="get" action="src/vue/checklogin.php">
				<br />
		        <label for="login">Login :</label>
		        <br />
		        <input id="login" type="text" name="login" value="" size="10" class="required"  maxlength="20"  autocomplete="off" required/>
		        <br /><br /><br />
		        <label for="password">Mot de passe :</label>
		        <br />
		        <input id="password" type="password" name="password" value="" size="10" class="required"  maxlength="20" />
		        <br /><br />
				<input id="submit" type="submit" name="submit"  value="Connexion" />
				
				<div id="erreur">
				<p style="color: red">
				    <?php
            			if (isset($_GET['message']))
            	    		echo $_GET['message'];
        	    		else
    	            		echo "<br /><br />";
	        		?>
        		</p>
			    </div>
		    </form>
    
    </div>
    <div id="content_footer"></div>
      <div id="footer">

      </div>
    </div>
</body>
</html>