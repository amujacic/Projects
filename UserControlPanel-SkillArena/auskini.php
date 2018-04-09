<?php
include('baza.php');
if(!isset($_COOKIE["user"])) header("Location: login.php");
if(!isset($_GET["auid"])) header("Location: mojeponude.php");
$korisnik = $_COOKIE["user"];
$auid = $_GET["auid"];
$testQuery = "SELECT * FROM `aukcija` WHERE id = '" . $auid . "'";
$testResult = mysql_query($testQuery) or die(mysql_error());
$testFetch = mysql_fetch_object($testResult);	
if($korisnik == $testFetch->IgracProdaje)
{
$nQuery = "DELETE FROM `aukcija` WHERE id ='" . $auid ."' AND IgracProdaje ='" . $korisnik ."'";
$nResult = mysql_query($nQuery) or die(mysql_error());
$nFetch = mysql_fetch_object($nResult);			
header("Location: mojeponude.php");				
}
?>