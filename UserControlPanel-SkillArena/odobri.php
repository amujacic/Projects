<?php
include('baza.php');


$korisnikid = $_GET["sid"];
$hasher = $_GET["hash"];

if($hasher == "kk71930dl")
{
	$promjena = "UPDATE `" . $_UsersTable ."` SET odobren = 1 WHERE ID = '" . $korisnikid . "'";	
			mysql_query($promjena) or die(mysql_error());				
			header("Location: oakk.php");		
	
}
	
		


?>