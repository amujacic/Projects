<?php

session_start();
$id = $_SESSION['id'];
require_once('forum/smf_2_api.php');
smfapi_logout($id);
session_destroy();
setcookie('username', '', time() - 1*24*60*60);
setcookie('password', '', time() - 1*24*60*60);
setcookie('id', '', time() - 1*24*60*60);
//define the integration functions

header("location:index.php");
?>