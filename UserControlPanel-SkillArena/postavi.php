<?php
include('baza.php');
if(!isset($_GET["vid"])) header("Location: aukcije.php");
if(!isset($_GET["sid"])) header("Location: aukcije.php");
if(!isset($_POST["bidovanje"])) header("Location: aukcije.php");
if(!isset($_COOKIE["user"])) header("Location: login.php");
$vid = $_GET["vid"];
$sid = $_GET["sid"];
$korisnik = $_COOKIE["user"];
$bid = $_POST["bidovanje"];
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

if($vid == 1)
{
$szQuery = "SELECT * FROM `houses` WHERE id = '" . $sid . "'";
$qResult = mysql_query($szQuery) or die(mysql_error());
$kFetch = mysql_fetch_object($qResult);	
if($kFetch->ownername == $korisnik)
{
$promjena = "INSERT INTO `aukcija` (IgracProdaje, VrstaImovine, IDImovine, IgracPonudio, Ponuda, Opis)
							VALUES ('$korisnik', $vid, $sid, 'Država', $kFetch->price/2, '$bid')";				
mysql_query($promjena) or die(mysql_error());
header("Location: mojeponude.php");	
}	
}

if($vid == 2)
{
$szQuery = "SELECT * FROM `apartments` WHERE id = '" . $sid . "'";
$qResult = mysql_query($szQuery) or die(mysql_error());
$kFetch = mysql_fetch_object($qResult);	
if($kFetch->ownername == $korisnik)
{
$promjena = "INSERT INTO `aukcija` (IgracProdaje, VrstaImovine, IDImovine, IgracPonudio, Ponuda, Opis)
							VALUES ('$korisnik', $vid, $sid, 'Država', $kFetch->price/2, '$bid')";				
mysql_query($promjena) or die(mysql_error());
header("Location: mojeponude.php");	
}	
}

if($vid == 3)
{
$szQuery = "SELECT * FROM `cottages` WHERE id = '" . $sid . "'";
$qResult = mysql_query($szQuery) or die(mysql_error());
$kFetch = mysql_fetch_object($qResult);	

if($kFetch->ownername == $korisnik)
{
$promjena = "INSERT INTO `aukcija` (IgracProdaje, VrstaImovine, IDImovine, IgracPonudio, Ponuda, Opis)
							VALUES ('$korisnik', $vid, $sid, 'Država', $kFetch->price/2, '$bid')";				
mysql_query($promjena) or die(mysql_error());
header("Location: mojeponude.php");	
}	

}

if($vid == 4 || $vid == 5)
{
$szQuery = "SELECT * FROM `vehicles` WHERE id = '" . $sid . "'";
$qResult = mysql_query($szQuery) or die(mysql_error());
$kFetch = mysql_fetch_object($qResult);	
if($kFetch->ownername == $korisnik)
{
$cenim = $VehiclePrice[$kFetch->model]/2;
$promjena = "INSERT INTO `aukcija` (IgracProdaje, VrstaImovine, IDImovine, IgracPonudio, Ponuda, Opis)
							VALUES ('$korisnik', $vid, $sid, 'Država', $cenim, '$bid')";				
mysql_query($promjena) or die(mysql_error());
header("Location: mojeponude.php");	
}	
}

if($vid == 6)
{
$szQuery = "SELECT * FROM `motorcycles` WHERE id = '" . $sid . "'";
$qResult = mysql_query($szQuery) or die(mysql_error());
$kFetch = mysql_fetch_object($qResult);	
if($kFetch->ownername == $korisnik)
{
$promjena = "INSERT INTO `aukcija` (IgracProdaje, VrstaImovine, IDImovine, IgracPonudio, Ponuda, Opis)
							VALUES ('$korisnik', $vid, $sid, 'Država', $kFetch->price/2, '$bid')";				
mysql_query($promjena) or die(mysql_error());
header("Location: mojeponude.php");	
}	
}

if($vid == 7)
{
$szQuery = "SELECT * FROM `boats` WHERE id = '" . $sid . "'";
$qResult = mysql_query($szQuery) or die(mysql_error());
$kFetch = mysql_fetch_object($qResult);	
if($kFetch->ownername == $korisnik)
{
$promjena = "INSERT INTO `aukcija` (IgracProdaje, VrstaImovine, IDImovine, IgracPonudio, Ponuda, Opis)
							VALUES ('$korisnik', $vid, $sid, 'Država', $kFetch->price/2, '$bid')";				
mysql_query($promjena) or die(mysql_error());
header("Location: mojeponude.php");	
}	
}

if($vid == 8)
{
$szQuery = "SELECT * FROM `airplanes` WHERE id = '" . $sid . "'";
$qResult = mysql_query($szQuery) or die(mysql_error());
$kFetch = mysql_fetch_object($qResult);	
if($kFetch->ownername == $korisnik)
{
$promjena = "INSERT INTO `aukcija` (IgracProdaje, VrstaImovine, IDImovine, IgracPonudio, Ponuda, Opis)
							VALUES ('$korisnik', $vid, $sid, 'Država', $kFetch->price/2, '$bid')";				
mysql_query($promjena) or die(mysql_error());
header("Location: mojeponude.php");	
}	
}



	

		
		

?>