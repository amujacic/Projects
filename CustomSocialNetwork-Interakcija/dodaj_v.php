<?php
ob_start();
require_once "include.php";

    $naslov=$_POST['naslov'];
    $opis=$_POST['opis'];
    $tekst=$_POST['tekst'];
    $slika=$_POST['slika'];
    $objavio=$_POST['objavio'];
    $datum=$_POST['datum'];    
    
    mysql_query("INSERT INTO vijesti(Naslov, Opis, Tekst, Slika, Objavio, Datum)VALUES('$naslov', '$opis', '$tekst', '$slika', '$objavio', '$datum')");
    header("location: dodaj_vijest.php?remarks=success");

ob_end_flush();
?>