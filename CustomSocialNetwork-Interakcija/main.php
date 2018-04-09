<?php
session_start();
if(empty($_SESSION['id'])){
header("location:index.php");
}

?>

<!DOCTYPE html>
<html lang="hr">
<head>
    <meta charset="utf-8">
    <title>Interakcija | Početna</title>
       
              
	<script src="js/jquery-1.7.1.js"></script>
    
      

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
<div class="six columns">
<div class="zelena">
<div class="row">
           <div class="twelve columns">
                <div>Vijesti</div>        
            </div> </div>  
        
        <?php 
		require_once "include.php";
		$result = mysql_query("SELECT * FROM vijesti ORDER BY ID DESC LIMIT 3");
  while ($row = mysql_fetch_array($result)) {
          echo "<div class='row'>";
		  echo "<div class='twelve columns'>";
		  echo "<hr>";
		  echo "<div class='block'>";		  
		  echo "<div class='ikona'><img src=" .$row['Slika'] . " /></div>";	  
		  echo "<div>";
		  echo "<span class='naslov'>";
		  echo '<b>' . $row["Naslov"] . '</b>' ;
		  echo "</span>";
		  echo "<br>";
		  echo "<span class='opis'>";
		  echo $row["Opis"];
		  echo "</span>";
		  echo "<br>";		  
		  echo "<a href='vijest.php?vid=" .$row['ID'] . "'title='Pročitaj više' STYLE='TEXT-DECORATION: NONE'>";
 		  echo "<img src='slike/vise.png' />";
  		  echo "</a>";
		  echo "<br>";
		  echo "<span class='datum'>";
		  echo "Datum:&nbsp" .$row["Datum"]. "&nbspObjavio:&nbsp" .$row["Objavio"];
		  echo "</span>";
		  echo "</div>";
		  echo "</div>";
		  echo "</div>";
		  echo "</div>";
		 
  } ?> 
     
</div>
</div>
<div class="six columns">
<div class="zelena">
<div class="row">
           <div class="twelve columns">
                <div>Novi postovi na forumu</div>        
            </div> </div>  
        
       <?php 
		require_once "include.php";
		$result = mysql_query("SELECT * FROM forum_messages ORDER BY id_msg DESC LIMIT 3");
  while ($row = mysql_fetch_array($result)) {
	  	$id= $row['poster_name'];	  
	  	$data = mysql_query("SELECT * FROM korisnici WHERE ID='$id' ") 
 		or die(mysql_error()); 
 		$info = mysql_fetch_array( $data );
		$avatar = $info['Avatar'];
		$ime = $info['Ime'];
		$prezime = $info['Prezime'];
		$name = "$ime $prezime";
		   echo "<div class='row'>";
		  echo "<div class='twelve columns'>";
		  echo "<hr>";
		  echo "<div class='block'>";		  
		  echo "<div class='ikona'><img src=" .$avatar. " /></div>";	  
		  echo "<div>";
		  echo "<span class='naslov'>";
		  echo '<b>' . $row["subject"] . '</b>' ;
		  echo "</span>";
		  echo "<br>";
		  echo "<span class='opis'>";
		  echo $row["body"];
		  echo "</span>";
		  echo "<br>";		  
		  echo "<a href='forum.php?topic=" .$row['id_topic'] . "'title='Pročitaj više' STYLE='TEXT-DECORATION: NONE'>";
 		  echo "<img src='slike/vise.png' />";
  		  echo "</a>";
		  echo "<br>";
		  echo "<span class='datum'>";
		  echo "Postao:&nbsp" .$name;
		  echo "</span>";
		  echo "</div>";
		  echo "</div>";
		  echo "</div>";
		  echo "</div>";
		 
  } ?> 
     
</div>
</div>

        
<div class="six columns">
<div class="zelena">
<div class="row">
           <div class="twelve columns">
                <div>Objave učenika</div>        
            </div> </div>  
        
        <?php 
		require_once "include.php";
		$id = $_SESSION['id'];
		$data = mysql_query("SELECT * FROM korisnici WHERE ID='$id' ") 
 		or die(mysql_error()); 
 		$info = mysql_fetch_array( $data );
		$skola = $info['Skola'];
		$result = mysql_query("SELECT * FROM objave WHERE Skola='$skola' ORDER BY ID DESC LIMIT 3");	
		
  while ($row = mysql_fetch_array($result)) {
	  $ucenik = $row['Objavio'];
	 	 $data2 = mysql_query("SELECT * FROM korisnici WHERE ID='$ucenik' ") 
 		or die(mysql_error()); 
 		$info2 = mysql_fetch_array( $data2 );
          echo "<div class='row'>";
		  echo "<div class='twelve columns'>";
		  echo "<hr>";
		  echo "<div class='block'>";		  
		  echo "<div class='ikona'><img src=" .$info2['Avatar'] . " /></div>";	  
		  echo "<div>";
		  echo "<span class='naslov'>";
		  echo '<b>' .$info2['Ime'] . ' ' . $info2['Prezime']. ' : </b>' ;
		  echo "</span>";
		  echo "<br>";
		  echo $row["Tekst"];
		  echo "<br>";	
		  echo $row["Datum"];	    
		  echo "</div>";
		  echo "</div>";
		  echo "</div>";
		  echo "</div>";
		 
  } ?> 
     
</div>
</div>
 <div class="six columns">
<div class="zelena">
<div class="row">
           <div class="twelve columns">
                <div>Školske obavijesti</div>        
            </div> </div>  
        
       <?php 
		require_once "include.php";
		$result = mysql_query("SELECT * FROM vijesti ORDER BY ID DESC LIMIT 3");
  while ($row = mysql_fetch_array($result)) {
          echo "<div class='row'>";
		  echo "<div class='twelve columns'>";
		  echo "<hr>";
		  echo "<div class='block'>";		  
		  echo "<div class='ikona'><img src=" .$row['Slika'] . " /></div>";	  
		  echo "<div>";
		  echo "<span class='naslov'>";
		  echo '<b>' . $row["Naslov"] . '</b>' ;
		  echo "</span>";
		  echo "<br>";
		  echo "<span class='opis'>";
		  echo $row["Opis"];
		  echo "</span>";
		  echo "<br>";		  
		  echo "<a href='vijest.php?vid=" .$row['ID'] . "'title='Pročitaj više' STYLE='TEXT-DECORATION: NONE'>";
 		  echo "<img src='slike/vise.png' />";
  		  echo "</a>";
		  echo "<br>";
		  echo "<span class='datum'>";
		  echo "Datum:&nbsp" .$row["Datum"]. "&nbspObjavio:&nbsp" .$row["Objavio"];
		  echo "</span>";
		  echo "</div>";
		  echo "</div>";
		  echo "</div>";
		  echo "</div>";
		 
  } ?> 
     
</div>
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