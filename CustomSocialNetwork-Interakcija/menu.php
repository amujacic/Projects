  <nav>

            <ul id="menu">
                <li>
                    <div class="menu-abs-bg background-color"></div>
                    <div class="home-icon menu-specs">
                        <a href="main.php" title="Početna">Početna</a>
                        <span>Početna strana Interakcije</span>
                    </div>
                    
                </li>
                <li>
                    <div class="menu-abs-bg background-color"></div>
                    <div class="profil-icon menu-specs">
                    
                        <?php require_once "include.php";
						$id = $_SESSION['id'];
$data = mysql_query("SELECT * FROM korisnici WHERE ID='$id' ") 
 or die(mysql_error()); 
 $info = mysql_fetch_array( $data );
 echo "<a href='profil.php?pid=" .$info['ID'] . "'title='Profil'>";
 echo $info['Ime'] . " " . $info['Prezime'];
  echo "</a>";
?> 
                        <span>Pregled vašeg profila</span>
                    </div>
                    </li>
                <li>
                    <div class="menu-abs-bg background-color"></div>
                    <div class="skola-icon menu-specs">
                        <?php require_once "include.php";
						$id = $_SESSION['id'];
$data = mysql_query("SELECT * FROM korisnici WHERE ID='$id' ") 
 or die(mysql_error()); 
 $info = mysql_fetch_array( $data );
 echo "<a href='skola.php?sid=1' title='Škola'>";
 echo "Škola";
  echo "</a>";
?> 
                        <span>Pregled škole</span>
                    </div>
                </li>
                <li>
                    <div class="menu-abs-bg background-color"></div>
                    <div class="ucenici-icon menu-specs">
                        <?php require_once "include.php";
						$id = $_SESSION['id'];
$data = mysql_query("SELECT * FROM korisnici WHERE ID='$id' ") 
 or die(mysql_error()); 
 $info = mysql_fetch_array( $data );
 echo "<a href='ucenici.php' title='Učenici'>";
 echo "Učenici";
  echo "</a>";
?> 
                        <span>Pregled učenika vaše škole</span>
                    </div>
                  
                </li>
                 <li>
                    <div class="menu-abs-bg background-color"></div>
                    <div class="forum-icon menu-specs">
                        <a href="forum.php" title="forum">Forum</a>
                        <span>Interakcija.ba forum</span>
                    </div>
                </li>
                <li>
                    <div class="menu-abs-bg background-color"></div>
                    <div class="postavke-icon menu-specs">
                        <a href="postavke.php" title="Postavke">Postavke</a>
                        <span>Prilagodite interakciju sebi...</span>
                    </div>
                </li>                
                        <?php require_once "include.php";
						$id = $_SESSION['id'];
$data = mysql_query("SELECT * FROM korisnici WHERE ID='$id' ") 
 or die(mysql_error()); 
 $info = mysql_fetch_array( $data );
 if($info['Rank'] >= 1)
 {
	 echo "<li>";
     echo "<div class='menu-abs-bg background-color'></div>";
     echo "<div class='admin-icon menu-specs'>";
 	 echo "<a href='administracija.php' title='Administracija'>";
 	 echo "Administracija";
  	 echo "</a>";
	 echo "<span>Administriranje sajta</span>";
     echo "</div>";
     echo "</li>";
     
 }
?> 

<li>                      
                    <div class="menu-abs-bg background-color"></div>
                    <div class="odjava-icon menu-specs">
                        <a href="odjava.php" title="Odjava">Odjava</a>
                        <span>Odjava sa interakcije</span>
                    </div>
                </li>
            </ul><!-- Menu ENDS -->

        </nav><!-- Nav ENDS -->