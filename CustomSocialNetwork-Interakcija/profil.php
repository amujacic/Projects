<?php
session_start();
if(empty($_SESSION['id'])){
header("location:index.php");
}
require_once "include.php";
$pid=$_GET['pid'];
$result = mysql_query("SELECT * FROM korisnici WHERE ID='$pid'");
$row = mysql_fetch_array($result);
if($row['Aktiviran'] == 0) header("location:404-korisnik.php");
?>
<!DOCTYPE html>
<html lang="hr">
<head>
    <meta charset="utf-8">
    <title>Interakcija | Profil</title>
       
    <script src="js/jquery.js"></script>

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

<div class="four columns">
<div class="zelena">
<div class="row">

           <div class="twelve columns">
                <div>Informacije</div>        
            </div> </div>  
        
       <?php 
		require_once "include.php";
		$pid=$_GET['pid'];
		$result = mysql_query("SELECT * FROM korisnici WHERE ID='$pid'");
  while ($row = mysql_fetch_array($result)) {
          echo "<div class='row'>";
		  echo "<div class='twelve columns'>";
		  echo "<hr>";
		  echo "<div class='block'>";	
		  echo "<a href=" . $row["Avatar"] ." 'title='Avatar'>";	  
		  echo "<div class='ikona'><img src=" .$row['Avatar'] . " /></div>";	
		  echo "</a>";		 
		  echo "<span class='naslov'>";
		  echo '<b>' . $row["Ime"] . ' ' . $row["Prezime"] . ' </b>' ;
		  echo "</span>";
		  echo "<br>";
		  echo $row["Skola-n"];
		  echo "<br>";			    
		   echo "</div>";
		  echo "</div>";
		  echo "</div>";
		 
  } ?> 
   <?php 
		require_once "include.php";
		$pid=$_GET['pid'];
		$result = mysql_query("SELECT * FROM korisnici WHERE ID='$pid'");
  while ($row = mysql_fetch_array($result)) {
          echo "<div class='row'>";
		  echo "<div class='twelve columns'>";
		  echo "<hr>";
		  echo "<div class='block'>";		  			 
		  echo "<span class='naslov'>";
		  echo '<b>' . $row["Grad"] . ', ' . $row["Drzava"] . ' </b>' ;
		  echo "</span>";
		  echo "<br>";
		  echo $row["Datum"];	
		  echo "<br>";
		  echo $row["Mail"];	  
		  echo "<br>";		  	    
		   echo "</div>";
		  echo "</div>";
		  echo "</div>";
		 
  } ?> 
  
     <?php 
		require_once "include.php";
		$pid=$_GET['pid'];
		$result = mysql_query("SELECT * FROM korisnici WHERE ID='$pid'");
  while ($row = mysql_fetch_array($result)) {
          echo "<div class='row'>";
		  echo "<div class='twelve columns'>";
		  echo "<hr>";
		  echo "<div class='block'>";		  			 
		  echo "<span class='naslov'>";		 
		  echo $row["Skola-n"];
		  echo "<br>";
		  echo '<b>' . $row["Razred"] . ' ' . $row["Odjeljenje"] . ' </b>' ;
		  echo "</span>";
		  echo "<br>";
		  echo $row["Smjer"];		  
		  echo "<br>";			    
		   echo "</div>";
		  echo "</div>";
		  echo "</div>";
		 
  } ?> 
     
</div>
</div>

  
<div class="eight columns">
<div class="zelena">
<div class="row">
           <div class="twelve columns">
                <div>Objave</div>   
                <hr>     
            </div> </div>  
<?php
if($_SESSION['id'] == $_GET['pid'])
{
echo "<div class='row'>";
echo "<div class='twelve columns'>";
echo "<form id='objavi' name='objavi' method='post' action='objavi.php?pid=" . $_GET['pid'] . "'>";
?>
<textarea id="objava" name="objava"  placeholder="Napisite nešto..."></textarea><br><br>
<?php
echo "<input name='submit' type='submit' class='objava-btn' value='' >";
echo "</form></div> </div>  ";
}
?>
            
        <?php 
		require_once "include.php";
		$pid=$_GET['pid'];
		$result = mysql_query("SELECT * FROM objave WHERE Objavio='$pid' ORDER BY ID DESC LIMIT 5");
		$result2 = mysql_query("SELECT * FROM korisnici WHERE ID='$pid'");
		$row2 = mysql_fetch_array($result2);
		  while ($row = mysql_fetch_array($result)) {
          echo "<div class='row'>";
		  echo "<div class='twelve columns'>";
		  echo "<hr>";
		  echo "<div class='block'>";		  
		  echo "<div class='ikona'><img src=" .$row2['Avatar'] . " /></div>";	  
		  echo "<div>";
		  echo "<span class='naslov'>";
		  echo '<b>' .$row2['Ime'] . ' ' . $row2['Prezime']. ' : </b>' ;
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