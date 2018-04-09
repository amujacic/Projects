<? 
header('Content-Type: image/png;');
include "baza.php";
$query = "SELECT * FROM `Players` WHERE Playername = '" . $_GET['name'] . "'";
$result = mysql_query($query) or die(mysql_error());
$i = mysql_num_rows($result); 

if ($i == 1) 
{
        
    $Playername=mysql_result($result,0,"Playername"); // Gets the username of the player and put it in the variable $Playername.
    $Level=mysql_result($result,0,"Level"); // Gets the money of the player and put it in the variable $Money.
    $Sati=mysql_result($result,0,"SatiIgre"); // Gets the score of the player and put it in the variable $Score.
	$Spol=mysql_result($result,0,"Pol");
	$Godine=mysql_result($result,0,"Godine");
	$oOrganizacija=mysql_result($result,0,"Clan");
	if($oOrganizacija == 0)
	$Org = "Civil";
else if($oOrganizacija == 1)
	$Org = "Policija";
else if($oOrganizacija == 2)
	$Org = "The Vinci Family";
else if($oOrganizacija == 3)
	$Org = "Black Dragon Triads";
else if($oOrganizacija == 4)
	$Org = "Groove Street Family";
else if($oOrganizacija == 5)
	$Org = "Ballas";
else if($oOrganizacija == 6)
	$Org = "Novinari";
else if($oOrganizacija == 7)
	$Org = "Marshall";
else if($oOrganizacija == 8)
	$Org = "Parking servis";
else if($oOrganizacija == 9)
	$Org = "Condor";
else if($oOrganizacija == 10)
	$Org = "Hitman";
else if($oOrganizacija == 11)
	$Org = "Blue Lagoon";
else if($oOrganizacija == 12)
	$Org = "LCN";
else if($oOrganizacija == 13)
	$Org = "Da Naga Boys";
else if($oOrganizacija == 14)
	$Org = "Taxi";
else if($oOrganizacija == 15)
	$Org = "Yakuza";
else if($oOrganizacija == 16)
	$Org = "F.B.I.";
else if($oOrganizacija == 17)
	$Org = "Black Cobra Corporation";
else if($oOrganizacija == 18)
	$Org = "Vatrogasci";
else if($oOrganizacija == 19)
	$Org = "DR";
else if($oOrganizacija == 20)
	$Org = "Russian Mafia";
else if($oOrganizacija == 21)
	$Org = "RP organizacija";
else if($oOrganizacija == 2)
	$Org = "RP organizacija";
	$Skin=mysql_result($result,0,"Skin");
	 $avatar="skinovi/" . $Skin . ".jpg";

	$od = 'potpis.png';
    $im = @imagecreatefrompng($od) or die("Cannot select the correct image. Please contact the webmaster."); 
    $text_color = imagecolorallocate($im, 239,239,239); 
   
   
   if($Spol == 1)
   	$stekst = "Muško";
  else if($Spol == 2)
  	$stekst = "Žensko";
  else
  	$stekst = "N/A";
	 
    $font = 'cb.ttf';
	
    imagettftext($im, 24, 0, 150, 54, $text_color, $font, iconv("ISO-8859-2", "UTF-8", $Playername)); 
    imagettftext($im, 14, 0, 150, 90, $text_color, $font, "Level: " .$Level); 
    imagettftext($im, 14, 0, 150, 116, $text_color, $font, "Sati igre: " .$Sati."h"); 
	imagettftext($im, 14, 0, 150, 142, $text_color, $font, "Organizacija: " . $Org);
	imagettftext($im, 14, 0, 300, 90, $text_color, $font, "Spol: ". $stekst); 
	imagettftext($im, 14, 0, 300, 116, $text_color, $font, "Starost: " . $Godine);
	
	
		$src = imagecreatefromjpeg($avatar);
	
	list($width, $height) = getimagesize($avatar);  	

$thumb = imagecreatetruecolor(110, 110);
imagecopyresampled($thumb, $src, 0, 0, 0, 0, 110, 110, $width, $height);
	

	
	
	imagecopy($im, $thumb, 25, 33, 0, 0, 110, 110);
    imagepng($im);
    imagedestroy($im);
} else echo('Taj korisnik ne postoji!'); 

mysql_close();

?> 