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


$umail = $_POST["rmail"];
$_userName = $_POST["ruser"];
$szEscapedUser = mysql_real_escape_string($_userName);



$szQuery = " ";
$szQuery = "SELECT * FROM `" . $_UsersTable ."` WHERE Playername = '" . $szEscapedUser . "' AND Email = '" . $umail . "'";

$_qResult = mysql_query($szQuery) or die(mysql_error());


if(mysql_num_rows($_qResult) != 0)
{
	$_qFetch = mysql_fetch_object($_qResult);

		
			$novo = substr(str_shuffle("abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPRSTUVWXYZ0123456789"),0,8);
			
			$to      = $_qFetch->Email;
			$subject = '[SA:RPG] UCP - Resetovan password';
			$message = "Postovani " . $szEscapedUser . ",\n vas password na Skill Arena RPG serveru je resetovan putem User Control Panela.\n\n\nVas novi password glasi: " . $novo . "\n\n\n Sada se mozete prijaviti na server i UCP koristeci taj password. Ako ga zelite promjeniti to mozete uraditi pomocu UCP-a.\n\n\n Vas Skill Arena Team";
			$headers = 'From: ucp@sa-rpg.com' . "\r\n" .
				'Reply-To: ucp@sa-rpg.com' . "\r\n" .
				'X-Mailer: PHP/' . phpversion();

			mail($to, $subject, $message, $headers);
			$postavi = hes($novo);		
			$promjena = "UPDATE `" . $_UsersTable ."` SET Password = '" . $postavi  . "' WHERE Playername = '" . $szEscapedUser . "'";	
			mysql_query($promjena) or die(mysql_error());				
			header("Location: rpw.php?rgreska=5");			
	
}
else
{
	header("Location: rpw.php?rgreska=1");
	
	
}


?>