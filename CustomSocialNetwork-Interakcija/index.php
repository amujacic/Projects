<?php
session_start();
if(!empty($_SESSION['id'])){
header("location: main.php");
}
require_once "include.php";
function _check_db($username, $password) {   
$myusername = stripslashes($username);
$mypassword = stripslashes($password);
$myusername = mysql_real_escape_string($myusername);
$mypassword = mysql_real_escape_string($mypassword);
$sql="SELECT * FROM korisnici WHERE Mail='$myusername' and Password='$mypassword'";
$result=mysql_query($sql);
$row = mysql_fetch_array($result);
$id = $row["ID"];
// Mysql_num_row is counting table row
$count=mysql_num_rows($result);;
 
if($count == 1)
        return true;
    else
        return false;
}
if(_check_db($_COOKIE['username'], $_COOKIE['password'])) {
                $_SESSION['id'] = $_COOKIE['id'];session_register("email");session_register("pass");
                header("location: main.php");
                die();
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<link rel=stylesheet type="text/css" href="/style/index.css"/>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Interakcija | interakcija.ba</title>
</head>

<body>

</body>
</html><!DOCTYPE html>
<html lang="hr">
<head>
    <meta charset="utf-8">
    <title>Interakcija | interakcija.ba</title>
       
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


        <nav>

            <ul id="menu">
                <li>
                    
                    <div class="menu-specs">
                        
                    </div>
                    
                </li>
                 <li>
                    <div class="menu-abs-bg background-color"></div>
                    <div class="home-icon menu-specs">
                        <a href="main.php" title="Početna">Početna</a>
                        <span>Početna strana Interakcije</span>
                    </div>
                    
                </li>
        </ul>

        </nav>  

    </header>

    
    <div class="rightSide">
<a title="Interakcija.ba" href="main.php"><img src="slike/logo.png" alt="Interakcija.ba"></a>
        <div class="row">

            <div class="twelve columns">

                <div class="announce">Dobro došli na <span class="color">Interakcija.ba</span>. Da bi se priključio najboljoj zajednici koja povezuje društvo i školu <span class="color"> Registruj se!</span></div>

            </div>

        </div>
<div class="row">

           <div class="six columns">

                <div class="title profil-icon">Prijava</div>

                <hr>

                

            </div>

            <div class="six columns">

                <div class="title postavke-icon">Registracija</div>

                <hr>

                

            </div>


        </div>
        <div class="row">

           <div class="six columns">

               

              
                   <form method="post" action="login.php">

                    <input type="text" name="email" placeholder="E-mail" id="email" required><br></br>
                    <input type="password" name="pass" placeholder="Password" id="pass" required><br></br>
                    <label for="zapamti">Zapamti me: </label>
  					<input type="checkbox" name="zapamti" id="zapamti" /><br></br>
                    <input name="submit" type="submit" value="" class="login-btn"><br></br>
                
<?php
$remarks=$_GET['remarks'];
if ($remarks==null and $remarks=="")
{
echo '';
}
if ($remarks=='mp')
{
echo '<font color="red">Pogrešan E-mail / Password! Probajte ponovo!</font>';
}
?>	
                
                </form>

           



            </div>

            <div class="six columns">

               <form method="post" action="registracija.php">
					
                    <input type="text" name="ime" id="ime" placeholder="Ime" required>
                    <input type="text" name="prezime" id="prezime" placeholder="Prezime" required><br></br><label for="spol">Spol:</label>
  <select name="spol" id="spol">
    <option value="1" selected="selected">Muško</option>
    <option value="2">Žensko</option>
  </select><br></br>
  <label for="Dan">Datum:</label><br></br>
  <select name="dan" id="dan" required>
<option value="0"> - Dan - </option>
<option value="1">1</option>
<option value="2">2</option>
<option value="3">3</option>
<option value="4">4</option>
<option value="5">5</option>
<option value="6">6</option>
<option value="7">7</option>
<option value="8">8</option>
<option value="9">9</option>
<option value="10">10</option>
<option value="11">11</option>
<option value="12">12</option>
<option value="13">13</option>
<option value="14">14</option>
<option value="15">15</option>
<option value="16">16</option>
<option value="17">17</option>
<option value="18">18</option>
<option value="19">19</option>
<option value="20">20</option>
<option value="21">21</option>
<option value="22">22</option>
<option value="23">23</option>
<option value="24">24</option>
<option value="25">25</option>
<option value="26">26</option>
<option value="27">27</option>
<option value="28">28</option>
<option value="29">29</option>
<option value="30">30</option>
<option value="31">31</option>
</select> 
<select name="mjesec" id="mjesec" required>
<option value="0"> - Mjesec - </option>
<option value="1">Januar</option>
<option value="2">Februar</option>
<option value="3">Mart</option>
<option value="4">April</option>
<option value="5">Maj</option>
<option value="6">Juni</option>
<option value="7">Juli</option>
<option value="8">August</option>
<option value="9">Septembar</option>
<option value="10">Oktobar</option>
<option value="11">Novembar</option>
<option value="12">Decembar</option>
</select> 
<select name="godina" id="godina" required>
<option value="0"> - Godina - </option>
<option value="2004">2004</option>
<option value="2003">2003</option>
<option value="2002">2002</option>
<option value="2001">2001</option>
<option value="2000">2000</option>
<option value="1999">1999</option>
<option value="1998">1998</option>
<option value="1997">1997</option>
<option value="1996">1996</option>
<option value="1995">1995</option>
<option value="1994">1994</option>
<option value="1993">1993</option>
<option value="1992">1992</option>
<option value="1991">1991</option>
<option value="1990">1990</option>
<option value="1989">1989</option>
<option value="1988">1988</option>
<option value="1987">1987</option>
<option value="1986">1986</option>
<option value="1985">1985</option>
<option value="1984">1984</option>
<option value="1983">1983</option>
<option value="1982">1982</option>
<option value="1981">1981</option>
<option value="1980">1980</option>
<option value="1979">1979</option>
<option value="1978">1978</option>
<option value="1977">1977</option>
<option value="1976">1976</option>
<option value="1975">1975</option>
<option value="1974">1974</option>
<option value="1973">1973</option>
<option value="1972">1972</option>
<option value="1971">1971</option>
<option value="1970">1970</option>
<option value="1969">1969</option>
<option value="1968">1968</option>
<option value="1967">1967</option>
<option value="1966">1966</option>
<option value="1965">1965</option>
<option value="1964">1964</option>
<option value="1963">1963</option>
<option value="1962">1962</option>
<option value="1961">1961</option>
<option value="1960">1960</option>
<option value="1959">1959</option>
<option value="1958">1958</option>
<option value="1957">1957</option>
<option value="1956">1956</option>
<option value="1955">1955</option>
<option value="1954">1954</option>
<option value="1953">1953</option>
<option value="1952">1952</option>
<option value="1951">1951</option>
<option value="1950">1950</option>
<option value="1949">1949</option>
<option value="1948">1948</option>
<option value="1947">1947</option>
<option value="1946">1946</option>
<option value="1945">1945</option>
<option value="1944">1944</option>
<option value="1943">1943</option>
<option value="1942">1942</option>
<option value="1941">1941</option>
<option value="1940">1940</option>
<option value="1939">1939</option>
<option value="1938">1938</option>
<option value="1937">1937</option>
<option value="1936">1936</option>
<option value="1935">1935</option>
<option value="1934">1934</option>
<option value="1933">1933</option>
<option value="1932">1932</option>
<option value="1931">1931</option>
<option value="1930">1930</option>
<option value="1929">1929</option>
<option value="1928">1928</option>
<option value="1927">1927</option>
<option value="1926">1926</option>
<option value="1925">1925</option>
<option value="1924">1924</option>
<option value="1923">1923</option>
<option value="1922">1922</option>
<option value="1921">1921</option>
<option value="1920">1920</option>
<option value="1919">1919</option>
<option value="1918">1918</option>
<option value="1917">1917</option>
<option value="1916">1916</option>
<option value="1915">1915</option>
<option value="1914">1914</option>
<option value="1913">1913</option>
<option value="1912">1912</option>
<option value="1911">1911</option>
<option value="1910">1910</option>
<option value="1909">1909</option>
<option value="1908">1908</option>
<option value="1907">1907</option>
<option value="1906">1906</option>
<option value="1905">1905</option>
<option value="1904">1904</option>
<option value="1903">1903</option>
<option value="1902">1902</option>
<option value="1901">1901</option>
<option value="1900">1900</option>
</select><br></br>
                    <label for="drzava">Država:</label>
  
  <select name="drzava" id="drzava" > 
    <option value="Bosna i Hercegovina">Bosna i Hercegovina</option>
  </select><br></br>
                    <label for="grad">Grad:</label>
  <select name="grad" id="grad">
    <option value="Tuzla" selected="selected">Tuzla</option>
  </select><br></br>
                    <label for="skola">Škola:</label>
  <select name="skola" id="skola">
    <option value="1" selected="selected">Gimnazija "Meša Selimović"</option>
  </select><br></br>
  <label for="razred">Razred:</label>
  <select name="razred" id="razred">
    <option value="1" selected="selected">I</option>
    <option value="2">II</option>
    <option value="3">III</option>
    <option value="4">IV</option>
  </select>
  <select name="odjeljenje" id="odjeljenje">
    <option value="a" selected="selected">a</option>
    <option value="b">b</option>
    <option value="c">c</option>
    <option value="d">d</option>
    <option value="e">e</option>
    <option value="f">f</option>
    <option value="g">g</option>
    <option value="h">h</option>
    <option value="i">i</option>
    <option value="j">j</option>
    <option value="k">k</option>
  </select><br></br>
                    <input type="email" name="mail" id="mail" placeholder="E-mail" required><br></br>
                    <input type="password" name="password" id="password"  placeholder="Password"required><br></br>
                  
                    <input type="submit" value="" class="reg-btn">
						 <br></br>
						 
						 <?php
$remarks=$_GET['remarks'];
if ($remarks==null and $remarks=="")
{
echo '';
}
if ($remarks=='success')
{
echo '<font color="green">Registracija uspješna! Molimo prijavite se</font>';
}
?>	
<?php
$remarks=$_GET['greska'];
if ($remarks==null and $remarks=="")
{
echo '';
}
if ($remarks=='datum')
{
echo '<font color="red">Molimo ispravno unesite datum!</font>';
}
if ($remarks=='mail')
{
echo '<font color="red">Molimo ispravno unesite Mail!</font>';
}
if ($remarks=='km')
{
echo '<font color="red">Taj mail se već koristi!</font>';
}
if ($remarks=='password')
{
echo '<font color="red">Password mora biti duži od 6 karaktera!</font>';
}
?>
               
                </form>

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




<script src="js/custom.js"></script>

</body>
</html>
