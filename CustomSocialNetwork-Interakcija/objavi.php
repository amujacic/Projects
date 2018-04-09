<?php
ob_start();
require_once "include.php";

    $tekst=$_POST['objava'];    
    $objavio=$_GET['pid'];
    $datum=date("Y-m-d");    
    $location="profil.php?pid=$objavio"; 
	$data2 = mysql_query("SELECT * FROM korisnici WHERE ID='$objavio' ") 
 	or die(mysql_error()); 
 	$info2 = mysql_fetch_array( $data2 );
	$skola = $info2['Skola'];
    mysql_query("INSERT INTO objave(Tekst, Objavio, Datum, Skola)VALUES('$tekst', '$objavio', '$datum', '$skola')");
    header("location: $location");

ob_end_flush();
?>