<?php
include('baza.php');
if(!isset($_GET["sid"])) header("Location: pdonator.php?greska=da");
if(!isset($_POST["user"])) header("Location: pdonator.php?greska=da");
if(!isset($_POST["Level"])) header("Location: pdonator.php?greska=da");
if(!isset($_POST["Respekti"])) header("Location: pdonator.php?greska=da");
if(!isset($_POST["Vip"])) header("Location: pdonator.php?greska=da");
if(!isset($_POST["NovacDzep"])) header("Location: pdonator.php?greska=da");
if(!isset($_POST["NovacBanka"])) header("Location: pdonator.php?greska=da");
if(!isset($_POST["DvaV"])) header("Location: pdonator.php?greska=da");
if(!isset($_POST["Mobilni"])) header("Location: pdonator.php?greska=da");
if($_GET["hash"] != "kk71930dl") header("Location: pdonator.php?greska=da");
$idkor = $_GET["sid"];
$User = $_POST["user"];
$Level = $_POST["Level"];
$Respekti = $_POST["Respekti"];
$Vip = $_POST["Vip"];
$NovacDzep = $_POST["NovacDzep"];
$NovacBanka = $_POST["NovacBanka"];
$DvaV = $_POST["DvaV"];
$Mobilni = $_POST["Mobilni"];
$promjena = "UPDATE `" . $_UsersTable ."` SET Playername = '" . $User  . "', Level = '" . $Level  . "', Respekti = '" . $Respekti  . "', Vip = '" . $Vip  . "', NovacDzep = '" . $NovacDzep  . "', NovacBanka = '" . $NovacBanka  . "', DvaV = '" . $DvaV  . "', Mobilni = '" . $Mobilni  . "'  WHERE ID = '" . $idkor . "'";	
mysql_query($promjena) or die(mysql_error());
header("Location: pdonator.php?greska=ne");
?>