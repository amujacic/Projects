<?php
ob_start();
require_once "include.php";
	$vid=$_GET['vid'];
    $naslov=$_POST['naslov'];
    $opis=$_POST['opis'];
    $tekst=$_POST['tekst'];
    $slika=$_POST['slika'];
    $objavio=$_POST['objavio'];
    $datum=$_POST['datum'];     	
	mysql_query("UPDATE vijesti SET Naslov='$naslov', Opis='$opis', Tekst='$tekst', Slika='$slika', Objavio='$objavio', Datum='$datum' WHERE ID='$vid'");
    header("location: uredi_vijesti.php");
ob_end_flush();
?>