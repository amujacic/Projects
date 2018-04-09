
<?php

ob_start();
require_once "include.php";
$vid=$_GET['vid'];
if ($vid==null and $vid=="")
{
header("location:brisi_vijesti.php");
}
else
{
mysql_query("DELETE FROM vijesti WHERE ID='$vid'") 
or die(mysql_error());  
header("location:brisi_vijesti.php");
}
ob_end_flush();
?>