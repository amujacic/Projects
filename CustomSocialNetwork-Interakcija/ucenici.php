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
    <title>Interakcija | Učenici</title>

<script type="text/javascript" src="js/jquery.js"></script>
<script src="js/js_ucenici.js"> </script>
<script type="text/javascript" src="//use.typekit.net/vue1oix.js"></script>
<script type="text/javascript">try{Typekit.load();}catch(e){}</script>
<script>

$(document).ready(function() {

	$('#content').scrollPagination({

		nop     : 20, // The number of posts per scroll to be loaded
		offset  : 0, // Initial offset, begins at 0 in this case
		error   : '', // When the user reaches the end this is the message that is
		                            // displayed. You can change this if you want.
		delay   : 500, // When you scroll down the posts will load after a delayed amount of time.
		               // This is mainly for usability concerns. You can alter this as you see fit
		scroll  : true // The main bit, if set to false posts will not load as the user scrolls. 
		               // but will still load if the user clicks.
		
	});
	
});

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

       
      
<div class="twelve columns">
   <div class="row">

           <div class="twelve columns">

                <div>Lista učenika</div>

                <hr>
				 <div class="block">

                    

                    <div class = "color">
 
<div id="content">
	
	

</div>



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
