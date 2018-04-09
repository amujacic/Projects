<?php
session_start();
require_once "include.php";

    $ime=$_POST['ime'];
    $prezime=$_POST['prezime'];
    $spol=$_POST['spol'];
    $dan=$_POST['dan'];
	$mjesec=$_POST['mjesec'];
	$godina=$_POST['godina'];
	$datum = "$dan.$mjesec.$godina";
    $skola=$_POST['skola'];
    $grad=$_POST['grad'];
    $mail=$_POST['mail'];
	$razred=$_POST['razred'];
	$drzava=$_POST['drzava'];
	$odjeljenje=$_POST['odjeljenje'];
    $mypassword=$_POST['password'];	
	if($skola == 1)
		$skolan = 'Gimnazija "Meša Selimović"';
	if($skola == 1 & $odjeljenje == "i")
		$smjer = "Mat. - informatički";
	else if($skola == 1 & $odjeljenje == "a")
		$smjer = "Jezički";
	else $smjer = "Opšti";
	if($spol == 1)
		$avatar = "slike/avatari/avatar-m.png";
	else
		$avatar = "slike/avatari/avatar-z.png";
	//<-------------Provjere -------------->
	if($dan == 0 || $mjesec == 0 || $godina == 0) die(header("location: index.php?greska=datum"));
	if(filter_var( $mail, FILTER_VALIDATE_EMAIL ) == FALSE) die(header("location: index.php?greska=mail"));
	$result = mysql_query("SELECT * FROM korisnici");
  	while ($row = mysql_fetch_array($result)) {
	if($row['Mail'] == $mail) die(header("location: index.php?greska=km")); 
  	}
	if(strlen($mypassword) <= 6) die(header("location: index.php?greska=password"));
	
	//<-------------MySQL unos -------------->
	$password=md5($mypassword);
    mysql_query("INSERT INTO korisnici(Mail, Password, Ime, Prezime, Spol, Datum, Skola, Grad, Razred, Odjeljenje, `Skola-n`, Smjer, Drzava, Avatar)VALUES('$mail', '$password', '$ime', '$prezime', '$spol', '$datum', '$skola', '$grad', '$razred', '$odjeljenje', '$skolan', '$smjer', '$drzava', '$avatar')") or die("Greška pri registraciji: ".mysql_error()); 
    header("location: index.php?remarks=success");
    mysql_close($con);
?>