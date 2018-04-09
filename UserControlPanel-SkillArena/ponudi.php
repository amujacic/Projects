<?php
include('baza.php');
if(!isset($_GET["auid"])) header("Location: aukcije.php");
if(!isset($_POST["bidovanje"])) header("Location: aukcije.php");
if(!isset($_COOKIE["user"])) header("Location: login.php");
$auid = $_GET["auid"];
$korisnik = $_COOKIE["user"];
$bid = $_POST["bidovanje"];

$szQuery = "SELECT * FROM `aukcija` WHERE id = '" . $auid . "'";
$qrResult = mysql_query($szQuery) or die(mysql_error());
$qrFetch = mysql_fetch_object($qrResult);

if($bid > $qrFetch->Ponuda)
{
	$nQuery = "SELECT * FROM `" . $_UsersTable ."` WHERE Playername = '" . $korisnik ."'";
	$nResult = mysql_query($nQuery) or die(mysql_error());	
	$nrFetch = mysql_fetch_object($nResult);
	
	if($bid <= $nrFetch->NovacBanka)
	{
			$nQuery = "UPDATE `aukcija` SET Ponuda = " . $bid . ", IgracPonudio = '" . $korisnik . "' WHERE id ='" . $auid ."'";
			mysql_query($nQuery) or die(mysql_error());							
			header("Location: aukcije.php?greska=3");
		
		
	}
	else header("Location: aukcije.php?greska=2");
	
	
	
}
else header("Location: aukcije.php?greska=1");
?>