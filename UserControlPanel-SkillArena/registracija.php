<?php

function pime($chime)
{
	$provjera = 0;
    
    for($i = 0; $i < 24; $i++)
    {
        if ($chime[$i] == '_') $provjera = 1;
		
		echo $chime[$i];
    }
    return $provjera;
}

function hes($str)
{
$lenght = strlen($str);
$s1 = 1;
$s2 = 0;
for($n=0; $n<$lenght; $n++)
{
$s1 = ($s1 + ord($str[$n])) % 65521;
$s2 = ($s2 + $s1) % 65521;	

}

return ($s2 << 16) + $s1;	
}


include('baza.php');


$korisnik = $_POST["user"];
$novipw1 = $_POST["pw1"];
$novipw2 = $_POST["pw2"];
$mail = $_POST["mail"];
$spol = $_POST["spol"];
$godine = $_POST["godine"];
$drzava = $_POST["drzava"];




$szQuery = " ";
$szQuery = "SELECT * FROM `" . $_UsersTable ."` WHERE Playername = '" . $korisnik . "'";

$_qResult = mysql_query($szQuery) or die(mysql_error());


if(mysql_num_rows($_qResult) == 0)
{
	

	
		if(strcmp($novipw1,$novipw2) == 0)
		{
			if(strlen($novipw1) < 6)
			{
			header("Location: register.php?pgreska=3");
			}
			else
			{
				if(pime($korisnik) == 1)
				{
					if(!empty($mail))
					{
						$novo = mysql_real_escape_string($novipw1);
					$postavi = hes($novo);				
					$promjena = "INSERT INTO `" . $_UsersTable ."` (Playername, Password, NovacDzep, Godine, Drzava, Pol, Email, odobren)
							VALUES ('$korisnik', $postavi, 20000, $godine, $drzava, $spol, '$mail', 0)";				
					mysql_query($promjena) or die(mysql_error());				
					header("Location: register.php?pgreska=5");		
						
					}
					else header("Location: register.php?pgreska=6");
					
				}
				else header("Location: register.php?pgreska=4");
			}
		}
		else
		{		
		header("Location: register.php?pgreska=2");			
		}
		
	
	
	
}
else
{
	header("Location: register.php?pgreska=1");
	
	
}


?>