<?php
session_start();
if(!session_is_registered(email)){
header("location:index.php");
}
require_once "include.php";
$mail = $_SESSION['email'];
$data = mysql_query("SELECT * FROM korisnici WHERE Mail='$mail' ") 
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
    <title>Interakcija | Uređivanje novosti</title>
       
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
        <div class="row">

            <div class="twenty columns">

                <div class="announce announce-icon">Pozdrav <span class="color"><?php require_once "include.php";
						$mail = $_SESSION['email'];
$data = mysql_query("SELECT * FROM korisnici WHERE Mail='$mail' ") 
 or die(mysql_error()); 
 $info = mysql_fetch_array( $data );
 echo $info['Ime'] . " " . $info['Prezime'];
?> </span>. Dobro došao na <span class="color">Administracijski panel</span> </div>

            </div>

        </div>
      
<div class="twelve columns">
   <div class="row">

           <div class="twelve columns">

                <div>Uredi vijest</div>

                <hr>
				 <div class="block">

                    

                    <div class = "color">
                  
 <?php 
 require_once "include.php";
 $vid=$_GET['vid'];
 if ($vid==null and $vid=="")
{
header("location:uredi_vijesti.php");
}
else
{
 $data = mysql_query("SELECT * FROM vijesti WHERE ID='$vid'") 
 or die(mysql_error()); 
$info = mysql_fetch_array( $data );
$slika = $info['Slika'];
$naslov = $info['Naslov'];
$opis = $info['Opis'];
$datum = $info['Datum'];
$objavio = $info['Objavio'];
$tekst = $info['Tekst'];
Print "<form method='post' action='uredi_v.php?vid=" .$vid ."'>";
  Print "<p>";
   Print " <input type='text' name='naslov' id='naslov' value='$naslov' required />";
 Print " </p><br>";
  Print "<p>";
   Print " <input type='text' name='opis' id='opis' value='$opis' required/>";
  Print "</p><br>";
  Print "<p>";
   Print " <input type='text' name='objavio' id='objavio' value='$objavio' required/>";
 Print "</p><br>";
  Print "<p>";
  Print "  <input type='text' name='datum' id='datum' value='$datum' required/>";
 Print " </p><br>";
  Print "<p>";
   Print " <textarea name='tekst' cols='100' rows='10' id='tekst' required>$tekst</textarea>";
  Print "</p><br>";
  Print "<p>";
   Print "<input type ='text' value='$slika' name='slika' id='slika' required />";
  Print "</p><br>";
  Print "<p>";
  Print "<input type='submit' value='Uredi vijest' class='background-color gray-box-submit comment-sender'>";
  Print "</p>";
  Print "</form>"; 
}
 ?> 




 <?php
$remarks=$_GET['remarks'];
if ($remarks==null and $remarks=="")
{
echo '';
}
if ($remarks=='success')
{
echo '<font color="green">Vijest uspješno uređena!</font>';
}
?>	<br><br><br>
                    </div>

                </div>
                

            </div>

           

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