<?php
session_start();
if(empty($_SESSION['id'])){
header("location:index.php");
}
$topic = '';
$topic = $_GET['topic'];
?>

<!DOCTYPE html>
<html lang="hr">
<head>
    <meta charset="utf-8">
    <title>Interakcija | Forum</title>
       
              
	<script src="js/jquery-1.7.1.js"></script>
  <script language="JavaScript">
<!--
function calcHeight()
{
  //find the height of the internal page
  var the_height=
    document.getElementById('the_iframe').contentWindow.
      document.body.scrollHeight+20;

  //change the height of the iframe
  document.getElementById('the_iframe').height=
      the_height;
	  $("#forum").height(the_height+20);
	  $("#subLevel").height(the_height+20);
	  
	 
}
//-->
</script>
      

<!-- Stil -->
<link href='http://fonts.googleapis.com/css?family=Libre+Baskerville&subset=latin,latin-ext' rel='stylesheet' type='text/css'>
    <link href="style/reset.css" rel="stylesheet">
    <link href="style/grid.css" rel="stylesheet">
    <link href="style/custom.css" rel="stylesheet">    
    <link href="css/nivo.css" rel="stylesheet">
<!-- Stil -->    
    
</head>

<body>

<div id="page_wrap">

    <header>

      
<!-- menu -->
<?php include "menu.php" ?>
<!-- menu -->
       

    </header>

    
    <div class="rightSide">
<a title="Interakcija.ba" href="main.php"><img src="slike/logo.png" alt="Interakcija.ba"></a>
<!-- Chat -->
<?php include "chat-i.php" ?>
<!-- Chat -->
        <div class="row">

            <div class="twenty columns">

                <div class="announce">Pozdrav <span class="color"><?php  echo $_SESSION['imeiprezime'];?> </span>. Uživaj u svom školovanju sa: <span class="color">Interakcija.ba</span></div>

            </div>

        </div>

<div id="forum">

<iframe id="the_iframe" 
	onLoad="calcHeight();" 	
	scrolling="NO" 
	frameborder="1" 
	height="1"
    width="100%" <?php 
	if($topic != '')
	{
	$src = "src='forum/index.php?topic=$topic'";
	echo $src;
	}
	else
	{
	echo 'src="forum/index.php"';
	}?>></iframe>

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

<script src="js/caroufredsel.js"></script>
<script src="js/nivo.js"></script>
<script src="js/jquery.mousewheel.js"></script>
<script src="js/tinyscrollbar.js"></script>
<script src="js/custom.js"></script>
                      
</body>
</html>