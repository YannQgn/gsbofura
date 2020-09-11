function afficher(){
	div = document.getElementById("ajouter")
	if(getComputedStyle(div).display != "none"){
	    div.style.display = "none";
	  } else {
	    div.style.display = "block";
	  }
}
