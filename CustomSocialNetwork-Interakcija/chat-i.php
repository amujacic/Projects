<!-- Chat -->
   <script type="text/javascript" src="js/chat.js"></script>
   <link type="text/css" rel="stylesheet" media="all" href="style/chat.css" />
   <!-- Chat -->   
<div id="subLevel" class="border-color background-color">
<div id="opener" class="border-left-color border-top-color"><div class="opener-plus"></div></div>
<br></br>
 <?php 
		require_once "include.php";
		$id = $_SESSION['id'];
		$data = mysql_query("SELECT * FROM korisnici WHERE ID='$id' ") 
 		or die(mysql_error()); 
 		$info = mysql_fetch_array( $data );
		$skola = $info['Skola'];
		$result = mysql_query("SELECT * FROM korisnici WHERE Skola='$skola' AND ID!='$id' ORDER BY ID DESC");	
		
  while ($row = mysql_fetch_array($result)) {	 
	$id = $row['ID'];
	$ime = $row['Ime'];
	$prezime = $row['Prezime'];
	$imeiprezime = "$ime $prezime";
	      echo "<a href='javascript:void(0)' onclick='javascript:chatWith(\"$id\", \"$imeiprezime\"); javascript:zatvori();'>";
		  echo "<div class='twelve columns'>";		  
		  echo "<div class='block'>";		  
		  echo "<div class='ikona-s'><img src=" .$row['Avatar'] . " /></div>";	  
		  echo "<div>";
		  echo "<span class='naslov-s'>";
		  echo '<b>' .$row['Ime'] . ' ' . $row['Prezime']. '  </b>' ;
		  echo "</span>";
		  echo "<br>";
		  echo "<span class='ispod-s'>";
		  echo $row['Razred'] . ' ' . $row['Odjeljenje']. ', '. $row['Smjer'] ;
		  echo "</span>";
		  echo "<hr>";		 	    
		  echo "</div>";
		  echo "</div>";
		  echo "</div>";
		  echo "</a>";
		  
		 
  } ?> 
</div>