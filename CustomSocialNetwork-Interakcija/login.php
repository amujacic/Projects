
<?php

ob_start();
require_once "include.php";
// Define $myusername and $mypassword
$myusername=$_POST['email'];
$mypassword=$_POST['pass'];
$pas=$_POST['pass'];
// To protect MySQL injection (more detail about MySQL injection)
$myusername = stripslashes($myusername);
$mypassword = stripslashes($mypassword);
$myusername = mysql_real_escape_string($myusername);
$mypassword = mysql_real_escape_string($mypassword);
$mypassword=md5($mypassword);
$sql="SELECT * FROM korisnici WHERE Mail='$myusername' and Password='$mypassword'";
$result=mysql_query($sql);
$row = mysql_fetch_array($result);
$id = $row["ID"];
$rank = $row["Rank"];
$ime = $row['Ime'];
$spol = $row['Spol'];
$prezime = $row['Prezime'];
$avatar = $row['Avatar'];
$user = "$id";
$user2 = "$ime $prezime";
$user3 = utf8_decode("$ime $prezime");
// Mysql_num_row is counting table row
$count=mysql_num_rows($result);

// If result matched $myusername and $mypassword, table row must be 1 row
if($count==1){
// Register $myusername, $mypassword and redirect to file "login_success.php"
session_start();
$_SESSION['id'] = $id;
$_SESSION['username'] = $user;
$_SESSION['imeiprezime'] = $user2;
$_SESSION['rank'] = $rank;

$idi="SELECT * FROM forum_members WHERE member_name='$id'";
$rezultat=mysql_query($idi);
$red = mysql_fetch_array($rezultat);
$broj=mysql_num_rows($rezultat);
if($broj == 0)
mysql_query("INSERT INTO forum_members(id_member, member_name, real_name, passwd, email_address, gender, is_activated, id_group, avatar)VALUES('$id','$id', '$user3', '$mypassword', '$myusername', '$spol', '1', '$rank', '$avatar')") or die("Greška pri registraciji: ".mysql_error()); 
//define the integration functions
require_once('forum/smf_2_api.php');


smfapi_login($id);


header("location:main.php");
if(isset($_POST['zapamti'])) {
                //set the cookies for 1 day, ie, 1*24*60*60 secs
                //change it to something like 30*24*60*60 to remember user for 30 days
                setcookie('username', $myusername, time() + 1*24*60*60);
                setcookie('password', $mypassword, time() + 1*24*60*60);
				setcookie('id', $id, time() + 1*24*60*60);
            } else {
                //destroy any previously set cookie
                setcookie('username', '', time() - 1*24*60*60);
                setcookie('password', '', time() - 1*24*60*60);
				setcookie('id', '', time() - 1*24*60*60);
            }



}
else {
header("location:index.php?remarks=mp");
}

ob_end_flush();
?>