<?php

$_Host = "localhost";
$_User = "deity";
$_Pass = "Nenad1994..";

$_Database = "skillarena";

$_UsersTable = "Players";

$_Connection = mysql_connect($_Host, $_User, $_Pass) or die('Nije moguce povezivanje sa bazom');

mysql_select_db($_Database);

?>