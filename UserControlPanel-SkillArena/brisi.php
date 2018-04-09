<?php
include('baza.php');


$korisnikid = $_GET["sid"];
$hasher = $_GET["hash"];

if($hasher == "kk71930dl")
{
	$nQuery = "SELECT * FROM `" . $_UsersTable ."` WHERE ID=" . $imer;
	$nResult = mysql_query($nQuery) or die(mysql_error());									
	$nFetch = mysql_fetch_object($nResult);
	$imekorisnika = $nFetch->Playername;
	
	$nQuery = "SELECT * FROM `houses` WHERE ownername='" . $imekorisnika . "'";
	$nResult = mysql_query($nQuery) or die(mysql_error());	
	if(mysql_num_rows($nResult) != 0)
	{
		$nFetch = mysql_fetch_object($nResult);
		
		$promjena = "UPDATE `houses` SET ownername = 'Niko', owner = 0 WHERE id = '" . $nFetch->id . "'";	
		mysql_query($promjena) or die(mysql_error());
		
	}

	$nQuery = "SELECT * FROM `cottages` WHERE ownername='" . $imekorisnika . "'";
	$nResult = mysql_query($nQuery) or die(mysql_error());	
	if(mysql_num_rows($nResult) != 0)
	{
		$nFetch = mysql_fetch_object($nResult);
		
		$promjena = "UPDATE `cottages` SET ownername = 'Niko', owner = 0 WHERE id = '" . $nFetch->id . "'";	
		mysql_query($promjena) or die(mysql_error());
		
	}
	
	$nQuery = "SELECT * FROM `apartments` WHERE ownername='" . $imekorisnika . "'";
	$nResult = mysql_query($nQuery) or die(mysql_error());	
	if(mysql_num_rows($nResult) != 0)
	{
		$nFetch = mysql_fetch_object($nResult);
		
		$promjena = "UPDATE `apartments` SET ownername = 'Niko', owner = 0 WHERE id = '" . $nFetch->id . "'";	
		mysql_query($promjena) or die(mysql_error());
		
	}
	
	$nQuery = "SELECT * FROM `vehicles` WHERE ownername='" . $imekorisnika . "'";
	$nResult = mysql_query($nQuery) or die(mysql_error());	
	if(mysql_num_rows($nResult) != 0)
	{
		$nFetch = mysql_fetch_object($nResult);
		
		$promjena = "UPDATE `vehicles` SET ownername = 'Niko', owner = 0, locked = 0 WHERE id = '" . $nFetch->id . "'";	
		mysql_query($promjena) or die(mysql_error());
		
	}
	
	$nQuery = "SELECT * FROM `motorcycles` WHERE ownername='" . $imekorisnika . "'";
	$nResult = mysql_query($nQuery) or die(mysql_error());	
	if(mysql_num_rows($nResult) != 0)
	{
		$nFetch = mysql_fetch_object($nResult);
		
		$promjena = "UPDATE `motorcycles` SET ownername = 'Niko', owner = 0, locked = 0 WHERE id = '" . $nFetch->id . "'";	
		mysql_query($promjena) or die(mysql_error());
		
	}
	
	$nQuery = "SELECT * FROM `boats` WHERE ownername='" . $imekorisnika . "'";
	$nResult = mysql_query($nQuery) or die(mysql_error());	
	if(mysql_num_rows($nResult) != 0)
	{
		$nFetch = mysql_fetch_object($nResult);
		
		$promjena = "UPDATE `boats` SET ownername = 'Niko', owner = 0, locked = 0 WHERE id = '" . $nFetch->id . "'";	
		mysql_query($promjena) or die(mysql_error());
		
	}
	
	$nQuery = "SELECT * FROM `airplanes` WHERE ownername='" . $imekorisnika . "'";
	$nResult = mysql_query($nQuery) or die(mysql_error());	
	if(mysql_num_rows($nResult) != 0)
	{
		$nFetch = mysql_fetch_object($nResult);
		
		$promjena = "UPDATE `airplanes` SET ownername = 'Niko', owner = 0, locked = 0 WHERE id = '" . $nFetch->id . "'";	
		mysql_query($promjena) or die(mysql_error());
		
	}
	
	
			$nQuery = "DELETE FROM `" . $_UsersTable ."` WHERE ID ='" . $korisnikid ."'";
			$nResult = mysql_query($nQuery) or die(mysql_error());
			$nFetch = mysql_fetch_object($nResult);
			
							
			header("Location: bkorisnika.php");		
	
}
	
		


?>