<?php
include 'connectAD.php';

$id = $_GET['visiteurid'];
	
	$sql = "DELETE FROM visiteur WHERE id='$id'";
	
	$result = executeSQL($sql);
	
	if ($result)
	    echo "<meta http-equiv='refresh' content='0;url=visiteur.php?message=<font color=green> Suppression realisee </font>'>";

	    else
	        echo "<meta http-equiv='refresh' content='0;url=visiteur.php?message=<font color=red> Probleme de suppression... </font>'>";
?>
