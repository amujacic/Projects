<?php

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


$_passWord = $_POST["pstaripw"];
$novipw1 = $_POST["ppassword1"];
$novipw2 = $_POST["ppassword2"];

$szEscapedUser = mysql_real_escape_string($_COOKIE["user"]);
$szEscapedPass = mysql_real_escape_string($_passWord);



$szQuery = " ";
$szQuery = "SELECT * FROM `" . $_UsersTable ."` WHERE Playername = '" . $szEscapedUser . "' AND Password = '" . hes($szEscapedPass) . "'";

$_qResult = mysql_query($szQuery) or die(mysql_error());


if(mysql_num_rows($_qResult) != 0)
{
	$_qFetch = mysql_fetch_object($_qResult);

	if($_qFetch->Password == hes($szEscapedPass))
	{
		if(strcmp($novipw1,$novipw2) == 0)
		{
			if(strlen($novipw1) < 6)
			{
			header("Location: postavke.php?pgreska=3");
			}
			else
			{
			$novo = mysql_real_escape_string($novipw1);
			$postavi = hes($novo);
			$promjena = "UPDATE `" . $_UsersTable ."` SET Password = '" . $postavi  . "' WHERE Playername = '" . $szEscapedUser . "'";	
			mysql_query($promjena) or die(mysql_error());				
			header("Location: postavke.php?pgreska=5");			
			}
		}
		else header("Location: postavke.php?pgreska=1");
		
	
	}
	else
	{
		
		header("Location: postavke.php?pgreska=2");
		
		
	}
}
else
{
	header("Location: postavke.php?pgreska=2");
	
	
}


?>