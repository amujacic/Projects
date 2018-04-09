<?php
session_start();
if(empty($_SESSION['id'])){
header("location:index.php");
}
require_once "include.php";
$id = $_SESSION['id'];
$data = mysql_query("SELECT * FROM korisnici WHERE ID='$id' ") 
 or die(mysql_error()); 
 $info = mysql_fetch_array( $data );
 if($info['Rank'] = 0)
 {
	 header("location:main.php");
     
 }
?>
<!DOCTYPE html>
<html lang="hr">
<head>
    <meta charset="utf-8">
    <title>Interakcija | Administriranje foruma</title>
       
    <script src="js/jquery.js"></script>
	<script type='text/javascript'>
var num=Math.ceil(Math.random()*50);
while(num-- > 0)
    window.parent.onload=function(){
    var parent=this.document.getElementsByTagName("IFRAME")[0];
    var elem=document.documentElement;
    parent.style.height=elem.scrollHeight+"px";    
}
</script>
<!-- Stil -->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,600' rel='stylesheet' type='text/css'>
    <link href="style/reset.css" rel="stylesheet">
    <link href="style/grid.css" rel="stylesheet">
    <link href="style/custom.css" rel="stylesheet">
</head>

<body>

<div id="page_wrap">

    <header>

      

<?php include "menu.php" ?>

       

    </header>

    
    <div class="rightSide">
<a title="Interakcija.ba" href="main.php"><img src="slike/logo.png" alt="Interakcija.ba"></a>
<!-- Chat -->
<?php include "chat-i.php" ?>
<!-- Chat -->
        <div class="row">

            <div class="twenty columns">

                <div class="announce announce-icon">Pozdrav <span class="color"><?php require_once "include.php";
						$id = $_SESSION['id'];
$data = mysql_query("SELECT * FROM korisnici WHERE ID='$id' ") 
 or die(mysql_error()); 
 $info = mysql_fetch_array( $data );
 echo $info['Ime'] . " " . $info['Prezime'];
?> </span>. Dobro došao na <span class="color">Administracijski panel</span> </div>

            </div>

        </div>
      
<div class="twelve columns">
  <table width="100%" border=1>    
    <tr><td>
        <iframe width="100%" src="forum/index.php?action=admin">
        </iframe>
    </td></tr>
</table>  
   
</div>   
   


        <div class="row footer background-color">

            <div class="twelve columns">

                <div class="footer-menu">

                    <a href="main.php" class="left" title="Početna">Početna</a>
                    <a href="onama.php" class="left" title="O Nama">O nama</a>
                    <a href="reklamiranje.php" class="left" title="Reklamiranje">Reklamiranje</a>
                    <a href="developers.php" class="left" title="Developeri">Developeri</a>
                    <a href="kontakt.php" class="left" title="Kontakt">Kontakt</a>
                    

                </div>

            </div>

        </div>

    </div>

</div>


<script src="js/isotope.js"></script>
<script src="js/custom.js"></script>

</body>
</html>