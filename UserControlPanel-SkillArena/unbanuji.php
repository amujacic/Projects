<?php
include('baza.php');


$korisnikid = $_GET["sid"];
$hasher = $_GET["hash"];

if($hasher == "kk71930dl")
{
			$nQuery = "DELETE FROM `banovani` WHERE Playername ='" . $korisnikid ."'";
			$nResult = mysql_query($nQuery) or die(mysql_error());
			$nFetch = mysql_fetch_object($nResult);
			
							
			header("Location: bans.php");		
	
}
	
		


?>