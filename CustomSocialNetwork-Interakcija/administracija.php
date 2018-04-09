<?php
session_start();
if(empty($_SESSION['id'])){
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
    <title>Interakcija | Administracija</title>
       
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
						$id = $_SESSION['id'];
$data = mysql_query("SELECT * FROM korisnici WHERE ID='$id' ") 
 or die(mysql_error()); 
 $info = mysql_fetch_array( $data );
 echo $info['Ime'] . " " . $info['Prezime'];
?> </span>. Dobro došao na <span class="color">Administracijski panel</span> </div>

            </div>

        </div>
<div class="six columns">
<div class="zelena">
<div class="row">
           <div class="twelve columns">
                <div>Administrator obavještenja</div>        
            </div> </div>  
        
        <?php 
		require_once "include.php";
		$result = mysql_query("SELECT * FROM admin_obavjestenja ORDER BY ID DESC LIMIT 3");
  while ($row = mysql_fetch_array($result)) {
          echo "<div class='row'>";
		  echo "<div class='twelve columns'>";
		  echo "<hr>";
		  echo "<div class='block'>";
		  echo "<div class='white-color ikona'></div>";
		  echo "<div>";
		  echo "<span class='naslov'>";
		  echo '<b>' . $row["Naslov"] . ': </b>' ;
		  echo "</span>";
		  echo "<br>";
		  echo $row["Tekst"];
		  echo "<br>";
		  echo "</div>";
		  echo "</div>";
		  echo "</div>";
		  echo "</div>";
		 
  } ?> 
     
</div>
</div>
 <div class="six columns">
  <div class="crvena">
  <div class="row">

           <div class="twelve columns">

                <div>Statistika korisnika</div>

                <hr>
				 <div class="block">

                    

                    <div>
                        <b>Ukupno korisnika :</b> <span class="p-color">1</span><br>
                        <b>Online korisnika :</b> <span class="p-color">1</span><br>
                        <b>Banovanih korisnika :</b> <span class="p-color">1</span><br>
                    </div>

                </div>
                

            </div>

           

        </div>
         <div class="row">

           <div class="twenty columns">

             
               <div>Statistika škola</div>

                <hr>
				 <div class="block">

                    

                    <div>
                        <b>Ukupno škola :</b> <span class="p-color">1</span><br>
                        <b>Ukupno gradova :</b> <span class="p-color">1</span><br>
                        <b>Školskih obavijesti :</b> <span class="p-color">1</span><br>
                    </div>

                </div>

            </div>

            

        </div>
        <div class="row">

           <div class="twenty columns">

               

                <div>Ostalo</div>

                <hr>
				 <div class="block">

                    

                    <div>
                        <b>Ukupno vijesti :</b> <span class="p-color">1</span><br>
                        <b>Ukupno korisničkih obavijesti :</b> <span class="p-color">1</span><br>
                        <b>Ukupno Admin obavještenja :</b> <span class="p-color">1</span><br>
                    </div>

                </div>

            </div>

            

        </div>

        
 </div>
</div>       
<div class="twelve columns">
   <div class="row">

           <div class="twelve columns">

                <div>Administriranje novosti</div>

                <hr>
				 <div class="block">

                    

                    <div class = "color">
                        <b>Dodavanje novosti:   </b> <a href="dodaj_vijest.php" title="Dodaj vijest"><span class="p-color">Klik</span></a><br>
                        <b>Brisanje novosti:    </b> <a href="brisi_vijesti.php" title="Briši novosti"><span class="p-color">Klik</span></a><br>
                        <b>Uređivanje novosti:  </b> <a href="uredi_vijesti.php" title="Uredi novosti"><span class="p-color">Klik</span></a><br>
                    </div>

                </div>
                

            </div>

           

        </div> 
   
</div>   
<div class="twelve columns">
   <div class="row">

           <div class="twelve columns">

                <div>Administriranje foruma</div>

                <hr>
				 <div class="block">

                    

                    <div class = "color">
                        <b>Administriranje foruma:   </b> <a href="forum_admin.php" title="Forum admin"><span class="p-color">Klik</span></a><br>
                    </div>

                </div>
                

            </div>

           

        </div> 
   
</div>    
<div class="twelve columns">
   <div class="row">

           <div class="twelve columns">

                <div>Administriranje korisnika</div>

                <hr>
				 <div class="block">

                    

                    <div class = "color">
                        <b>Dodavanje korisnika:   </b> <span class="p-color">Klik</span><br>
                        <b>Brisanje korisnika:    </b> <span class="p-color">Klik</span><br>
                        <b>Banovanje korisnika:  </b> <span class="p-color">Klik</span><br>
                        <b>Pregled korisnika:  </b> <span class="p-color">Klik</span><br>
                    </div>

                </div>
                

            </div>

           

        </div> 
   
</div>     
<div class="twelve columns">
   <div class="row">

           <div class="twelve columns">

                <div>Administriranje škole</div>

                <hr>
				 <div class="block">

                    

                    <div class = "color">
                        <b>Dodavanje škole:   </b> <span class="p-color">Klik</span><br>
                        <b>Brisanje škole:    </b> <span class="p-color">Klik</span><br>                        
                        <b>Pregled škola:  </b> <span class="p-color">Klik</span><br>
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