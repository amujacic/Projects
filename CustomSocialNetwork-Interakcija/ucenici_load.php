<?php

require_once "include.php";

$offset = is_numeric($_POST['offset']) ? $_POST['offset'] : die();
$postnumbers = is_numeric($_POST['number']) ? $_POST['number'] : die();
$id = $_SESSION['id'];
$data = mysql_query("SELECT * FROM korisnici WHERE ID='$id' ") 
 or die(mysql_error()); 
 $info = mysql_fetch_array( $data );
 $skola = $info['Skola'];  
$run = mysql_query("SELECT * FROM korisnici WHERE Skola = '$skola' AND Aktiviran='1' ORDER BY Razred DESC LIMIT ".$postnumbers." OFFSET ".$offset);
$run2 = mysql_query("SELECT * FROM korisnici WHERE Skola = '$skola' AND Aktiviran='1' ORDER BY Razred DESC LIMIT ".$postnumbers." OFFSET ".$offset);
$row3 = mysql_fetch_array($run2);
if($row3['Skola'] == $skola) 
{
Print "<table class='tabela'>"; 
 Print "<tr>";
 Print "<th><span class='c-color'>Ime i prezime:&nbsp </span></th> ";
 Print "<th><span class='c-color'>Razred:&nbsp </span></th> ";
 Print "<th><span class='c-color'>Odjeljenje: &nbsp</span></th> ";
 Print "<th><span class='c-color'>Smjer:&nbsp </span></th> ";
 Print "<th><span class='c-color'>Profil:&nbsp</span></th> ";
 Print "</tr>";
 

while($row = mysql_fetch_array($run)) {
	
		
	Print "<tr>"; 
 Print "<td>".$row['Ime'] . " " .$row['Prezime'] . "</td>&nbsp&nbsp&nbsp&nbsp&nbsp "; 
 Print "<td>".$row['Razred'] . "</td>&nbsp&nbsp&nbsp&nbsp&nbsp ";
 Print "<td>".$row['Odjeljenje'] . "</td> &nbsp&nbsp&nbsp&nbsp&nbsp";
 Print "<td>".$row['Smjer'] . " </td>&nbsp&nbsp&nbsp&nbsp&nbsp";
 Print "<td><a href='profil.php?pid=".$row['ID'] . "'><img src='slike/profil.png' /></a> </td>&nbsp&nbsp&nbsp&nbsp&nbsp";
 Print "</tr>"; 
}
Print "</table>";
}
?>

