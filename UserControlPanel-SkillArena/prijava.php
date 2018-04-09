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

$_userName = $_POST["user"];
$_passWord = $_POST["pass"];

$szEscapedUser = mysql_real_escape_string($_userName);
$szEscapedPass = mysql_real_escape_string($_passWord);


$szQuery = " ";
$szQuery = "SELECT * FROM `" . $_UsersTable ."` WHERE Playername = '" . $szEscapedUser . "' AND Password = '" . hes($szEscapedPass) . "'";

$_qResult = mysql_query($szQuery) or die(mysql_error());


if(mysql_num_rows($_qResult) != 0)
{
	$_qFetch = mysql_fetch_object($_qResult);

	if($_qFetch->Password == hes($szEscapedPass))
	{
		
		$nQuery = "SELECT * FROM `banovani` WHERE Playername ='" . $szEscapedUser ."'";
		$nResult = mysql_query($nQuery) or die(mysql_error());	
		if(mysql_num_rows($nResult) == 0)
		{
			Success($szEscapedUser, $_POST["zapamti"]);
			header("Location: index.php");	
		}
		else header("Location: login.php?prijava=ne3");			
	
	}
	else
	{
		
		header("Location: login.php?prijava=ne");
		
		
	}
}
else
{
	header("Location: login.php?prijava=ne");
	
	
}


function Success($charname, $pamti)
{
	
	$szSessID = substr(str_shuffle(str_repeat('ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789',20)),0,20);
	if($pamti != 1)
	{
	setcookie("sessid", $szSessID, time()+3600);
	setcookie("user", $charname, time()+3600);
	}
	else
	{
		setcookie("sessid", $szSessID, time() + (10 * 365 * 24 * 60 * 60));
		setcookie("user", $charname, time() + (10 * 365 * 24 * 60 * 60));
		
	}
	


}
?>