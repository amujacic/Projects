<?php
include('baza.php');
$VehiclePrice = Array(
										400=>130000,
										402=>300000,
										405=>130000,
										411=>10000000,
										412=>200000,
										415=>970000,
										419=>140000,
										429=>450000,
										439=>85000,
										445=>150000,
										451=>5000000,
										459=>110000,
										466=>150000,
										467=>120000,
										474=>200000,
										475=>250000,
										477=>390000,
										480=>370000,
										489=>550000,
										491=>350000,
										492=>80000,
										496=>650000,
										500=>250000,
										506=>290000,
										507=>150000,
										516=>40000,
										526=>50000,
										527=>65000,
										529=>75000,
										533=>195000,
										535=>350000,
										536=>150000,
										541=>4000000,
										542=>100000,
										545=>950000,
										546=>650000,
										550=>200000,
										551=>170000,
										554=>150000,
										555=>300000,
										558=>500000,
										559=>450000,
										560=>8000000,
										561=>290000,
										562=>620000,
										565=>700000,
										566=>230000,
										567=>245000,
										575=>450000,
										579=>850000,
										580=>230000,
										585=>150000,
										587=>950000,
										589=>500000,
										602=>850000,
										603=>190000,
										600=>90000
									);

if(!isset($_GET["vid"])) header("Location: prodaja.php");	
if(!isset($_GET["sid"])) header("Location: prodaja.php");	
$vrstaid = $_GET["vid"];
$imovinaid = $_GET["sid"];
if(isset($_COOKIE["user"]))
{
	$nQuery = "SELECT * FROM `" . $_UsersTable ."` WHERE Playername='" . $_COOKIE["user"] ."'";
	$nResult = mysql_query($nQuery) or die(mysql_error());									
	$nFetch = mysql_fetch_object($nResult);
	$imekorisnika = $nFetch->Playername;
	$novacbanka = $nFetch->NovacBanka;
	if($vrstaid == 1)
	{
	
	$nQuery = "SELECT * FROM `houses` WHERE ownername='" . $imekorisnika . "' AND id=" . $imovinaid;
	$nResult = mysql_query($nQuery) or die(mysql_error());	
	if(mysql_num_rows($nResult) != 0)
	{
		
		$nFetch = mysql_fetch_object($nResult);
		$novinovac = $novacbanka + $nFetch->price;
		$promjena = "UPDATE `houses` SET ownername = 'Niko', owner = 0 WHERE id = '" . $nFetch->id . "'";	
		mysql_query($promjena) or die(mysql_error());		
		$promjena = "UPDATE `" . $_UsersTable ."` SET PosedovanjeKuce = '-1', NovacBanka =" . $novinovac . " WHERE Playername = '" . $imekorisnika . "'";	
		mysql_query($promjena) or die(mysql_error());
		header("Location: prodaja.php?greska=ne");
		
		
	}
	else header("Location: prodaja.php?greska=da");		
	
	}
	
	if($vrstaid == 2)
	{
	
	$nQuery = "SELECT * FROM `apartments` WHERE ownername='" . $imekorisnika . "' AND id=" . $imovinaid;
	$nResult = mysql_query($nQuery) or die(mysql_error());	
	if(mysql_num_rows($nResult) != 0)
	{
		$nFetch = mysql_fetch_object($nResult);
		$novinovac = $novacbanka + $nFetch->price/2;
		$promjena = "UPDATE `apartments` SET ownername = 'Niko', owner = 0 WHERE id = '" . $nFetch->id . "'";	
		mysql_query($promjena) or die(mysql_error());		
		$promjena = "UPDATE `" . $_UsersTable ."` SET PosedovanjeStana = '-1', NovacBanka =" . $novinovac . " WHERE Playername = '" . $imekorisnika . "'";	
		mysql_query($promjena) or die(mysql_error());
		header("Location: prodaja.php?greska=ne");
		
		
	}
	else header("Location: prodaja.php?greska=da");		
	
	}
	
	if($vrstaid == 3)
	{
	
	$nQuery = "SELECT * FROM `cottages` WHERE ownername='" . $imekorisnika . "' AND id=" . $imovinaid;
	$nResult = mysql_query($nQuery) or die(mysql_error());	
	if(mysql_num_rows($nResult) != 0)
	{
		$nFetch = mysql_fetch_object($nResult);
		$novinovac = $novacbanka + $nFetch->price/2;
		$promjena = "UPDATE `cottages` SET ownername = 'Niko', owner = 0 WHERE id = '" . $nFetch->id . "'";	
		mysql_query($promjena) or die(mysql_error());		
		$promjena = "UPDATE `" . $_UsersTable ."` SET PosedovanjeVikendice = '-1', NovacBanka =" . $novinovac . " WHERE Playername = '" . $imekorisnika . "'";	
		mysql_query($promjena) or die(mysql_error());
		header("Location: prodaja.php?greska=ne");
		
		
	}
	else header("Location: prodaja.php?greska=da");		
	
	}
	
	if($vrstaid == 4)
	{
	
	$nQuery = "SELECT * FROM `vehicles` WHERE ownername='" . $imekorisnika . "' AND id=" . $imovinaid;
	$nResult = mysql_query($nQuery) or die(mysql_error());	
	if(mysql_num_rows($nResult) != 0)
	{
		$nFetch = mysql_fetch_object($nResult);
		$novinovac = $novacbanka + $VehiclePrice[$nFetch->model]/2;
		$promjena = "UPDATE `vehicles` SET ownername = 'Niko', owner = 0, locked = 0 WHERE id = '" . $nFetch->id . "'";	
		mysql_query($promjena) or die(mysql_error());		
		$promjena = "UPDATE `" . $_UsersTable ."` SET PosedovanjeAuta = '-1', NovacBanka =" . $novinovac . " WHERE Playername = '" . $imekorisnika . "'";	
		mysql_query($promjena) or die(mysql_error());
		header("Location: prodaja.php?greska=ne");
		
		
	}
	else header("Location: prodaja.php?greska=da");		
	
	}
	
	if($vrstaid == 5)
	{
	
	$nQuery = "SELECT * FROM `vehicles` WHERE ownername='" . $imekorisnika . "' AND id=" . $imovinaid;
	$nResult = mysql_query($nQuery) or die(mysql_error());	
	if(mysql_num_rows($nResult) != 0)
	{
		$nFetch = mysql_fetch_object($nResult);
		$novinovac = $novacbanka + $VehiclePrice[$nFetch->model]/2;
		$promjena = "UPDATE `vehicles` SET ownername = 'Niko', owner = 0, locked = 0 WHERE id = '" . $nFetch->id . "'";	
		mysql_query($promjena) or die(mysql_error());		
		$promjena = "UPDATE `" . $_UsersTable ."` SET PosedovanjeAuta2 = '-1', NovacBanka =" . $novinovac . " WHERE Playername = '" . $imekorisnika . "'";	
		mysql_query($promjena) or die(mysql_error());
		header("Location: prodaja.php?greska=ne");
		
		
	}
	else header("Location: prodaja.php?greska=da");		
	
	}
	
	if($vrstaid == 6)
	{
	
	$nQuery = "SELECT * FROM `motorcycles` WHERE ownername='" . $imekorisnika . "' AND id=" . $imovinaid;
	$nResult = mysql_query($nQuery) or die(mysql_error());	
	if(mysql_num_rows($nResult) != 0)
	{
		$nFetch = mysql_fetch_object($nResult);
		$novinovac = $novacbanka + $nFetch->price/2;
		$promjena = "UPDATE `motorcycles` SET ownername = 'Niko', owner = 0, locked = 0 WHERE id = '" . $nFetch->id . "'";	
		mysql_query($promjena) or die(mysql_error());		
		$promjena = "UPDATE `" . $_UsersTable ."` SET PosedovanjeMotora = '-1', NovacBanka =" . $novinovac . " WHERE Playername = '" . $imekorisnika . "'";	
		mysql_query($promjena) or die(mysql_error());
		header("Location: prodaja.php?greska=ne");
		
		
	}
	else header("Location: prodaja.php?greska=da");		
	
	}

	if($vrstaid == 7)
	{
	
	$nQuery = "SELECT * FROM `boats` WHERE ownername='" . $imekorisnika . "' AND id=" . $imovinaid;
	$nResult = mysql_query($nQuery) or die(mysql_error());	
	if(mysql_num_rows($nResult) != 0)
	{
		$nFetch = mysql_fetch_object($nResult);
		$novinovac = $novacbanka + $nFetch->price/2;
		$promjena = "UPDATE `boats` SET ownername = 'Niko', owner = 0, locked = 0 WHERE id = '" . $nFetch->id . "'";	
		mysql_query($promjena) or die(mysql_error());		
		$promjena = "UPDATE `" . $_UsersTable ."` SET PosedovanjePlovila = '-1', NovacBanka =" . $novinovac . " WHERE Playername = '" . $imekorisnika . "'";	
		mysql_query($promjena) or die(mysql_error());
		header("Location: prodaja.php?greska=ne");
		
		
	}
	else header("Location: prodaja.php?greska=da");		
	
	}
	
	if($vrstaid == 8)
	{
	
	$nQuery = "SELECT * FROM `airplanes` WHERE ownername='" . $imekorisnika . "' AND id=" . $imovinaid;
	$nResult = mysql_query($nQuery) or die(mysql_error());	
	if(mysql_num_rows($nResult) != 0)
	{
		$nFetch = mysql_fetch_object($nResult);
		$novinovac = $novacbanka + $nFetch->price/2;
		$promjena = "UPDATE `airplanes` SET ownername = 'Niko', owner = 0, locked = 0 WHERE id = '" . $nFetch->id . "'";	
		mysql_query($promjena) or die(mysql_error());		
		$promjena = "UPDATE `" . $_UsersTable ."` SET PosedovanjeAviona = '-1', NovacBanka =" . $novinovac . " WHERE Playername = '" . $imekorisnika . "'";	
		mysql_query($promjena) or die(mysql_error());
		header("Location: prodaja.php?greska=ne");
		
		
	}
	else header("Location: prodaja.php?greska=da");		
	
	}	
							
			
	
}
	
		


?>