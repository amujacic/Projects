<?php
if(!isset($_POST["user"])) header("Location: index.php");
if(!isset($_COOKIE["user"])) header("Location: index.php");
include('baza.php');
$korisnik = $_POST["user"];
$razlog = $_POST["razlog"];
$adminime = $_COOKIE["user"];


$szQuery = " ";
$szQuery = "SELECT * FROM `" . $_UsersTable ."` WHERE Playername = '" . $korisnik . "'";

$_qResult = mysql_query($szQuery) or die(mysql_error());
$qFetch = mysql_fetch_object($_qResult);
			$iid = $qFetch->ID;
			echo $iid;
if(mysql_num_rows($_qResult) == 1)
{
	
			
			$promjena = "INSERT INTO `banovani` (cid, Playername, Reason, Adminname, active, time)
							VALUES ($iid, '$korisnik', '$razlog', '$adminime', 1, now())";				
					mysql_query($promjena) or die(mysql_error());	
				
			header("Location: dodajban.php?rgreska=5");			
	
}
else
{
	header("Location: dodajban.php?rgreska=1");
	
	
}


?>