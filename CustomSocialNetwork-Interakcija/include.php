<?php

session_start();


$host = "localhost";

$username = "root";

$password = "";

$db = "interakcija";

@mysql_connect($host,$username,$password) or die ("error");

@mysql_select_db($db) or die("error");

?>