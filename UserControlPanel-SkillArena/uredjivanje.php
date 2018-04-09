<?php
include('baza.php');
if(!isset($_GET["sid"])) header("Location: korisnici.php?greska=da");
if(!isset($_POST["user"])) header("Location: korisnici.php?greska=da");
if(!isset($_POST["Level"])) header("Location: korisnici.php?greska=da");
if(!isset($_POST["Respekti"])) header("Location: korisnici.php?greska=da");
if(!isset($_POST["Vip"])) header("Location: korisnici.php?greska=da");
if(!isset($_POST["NovacDzep"])) header("Location: korisnici.php?greska=da");
if(!isset($_POST["NovacBanka"])) header("Location: korisnici.php?greska=da");
if(!isset($_POST["DvaV"])) header("Location: korisnici.php?greska=da");
if(!isset($_POST["Mobilni"])) header("Location: korisnici.php?greska=da");
if(!isset($_POST["Email"])) header("Location: korisnici.php?greska=da");
if(!isset($_POST["Spol"])) header("Location: korisnici.php?greska=da");
if(!isset($_POST["Drzava"])) header("Location: korisnici.php?greska=da");
if(!isset($_POST["Admin"])) header("Location: korisnici.php?greska=da");
if(!isset($_POST["GameMaster"])) header("Location: korisnici.php?greska=da");
if(!isset($_POST["Skin"])) header("Location: korisnici.php?greska=da");
if(!isset($_POST["Lider"])) header("Location: korisnici.php?greska=da");
if(!isset($_POST["Clan"])) header("Location: korisnici.php?greska=da");
if(!isset($_POST["Rank"])) header("Location: korisnici.php?greska=da");
if(!isset($_POST["Droga"])) header("Location: korisnici.php?greska=da");
if(!isset($_POST["Mats"])) header("Location: korisnici.php?greska=da");
if(!isset($_POST["IznosRate"])) header("Location: korisnici.php?greska=da");
if(!isset($_POST["IznosKredita"])) header("Location: korisnici.php?greska=da");
if(!isset($_POST["PreostaloZaOtplatu"])) header("Location: korisnici.php?greska=da");
if(!isset($_POST["ADozvola"])) header("Location: korisnici.php?greska=da");
if(!isset($_POST["KamionDozvola"])) header("Location: korisnici.php?greska=da");
if(!isset($_POST["MotorDozvola"])) header("Location: korisnici.php?greska=da");
if(!isset($_POST["AvionDozvola"])) header("Location: korisnici.php?greska=da");
if(!isset($_POST["BrodDozvola"])) header("Location: korisnici.php?greska=da");
if(!isset($_POST["PosedovanjeFirme"])) header("Location: korisnici.php?greska=da");
if(!isset($_POST["PosedovanjeStana"])) header("Location: korisnici.php?greska=da");
if(!isset($_POST["PosedovanjeKuce"])) header("Location: korisnici.php?greska=da");
if(!isset($_POST["PosedovanjeVikendice"])) header("Location: korisnici.php?greska=da");
if(!isset($_POST["PosedovanjeAuta"])) header("Location: korisnici.php?greska=da");
if(!isset($_POST["PosedovanjeAuta2"])) header("Location: korisnici.php?greska=da");
if(!isset($_POST["PosedovanjeMotora"])) header("Location: korisnici.php?greska=da");
if(!isset($_POST["PosedovanjeBicikla"])) header("Location: korisnici.php?greska=da");
if(!isset($_POST["PosedovanjeAviona"])) header("Location: korisnici.php?greska=da");
if(!isset($_POST["PosedovanjePlovila"])) header("Location: korisnici.php?greska=da");
if(!isset($_POST["BorbeniStil"])) header("Location: korisnici.php?greska=da");
if(!isset($_POST["Posao"])) header("Location: korisnici.php?greska=da");
if(!isset($_POST["Posaougovor"])) header("Location: korisnici.php?greska=da");
if(!isset($_POST["OrgUgovor"])) header("Location: korisnici.php?greska=da");
if(!isset($_POST["Diploma"])) header("Location: korisnici.php?greska=da");
if(!isset($_POST["Warn"])) header("Location: korisnici.php?greska=da");
if(!isset($_POST["Promoter"])) header("Location: korisnici.php?greska=da");
if(!isset($_POST["BankovniRacun"])) header("Location: korisnici.php?greska=da");
if(!isset($_POST["Skripter"])) header("Location: korisnici.php?greska=da");
if(!isset($_POST["Zlato"])) header("Location: korisnici.php?greska=da");
if(!isset($_POST["Kartica"])) header("Location: korisnici.php?greska=da");
if(!isset($_POST["GunDozvola"])) header("Location: korisnici.php?greska=da");
if($_GET["hash"] != "kk71930dl") header("Location: korisnici.php?greska=da");

$idkor = $_GET["sid"];
$User = $_POST["user"];
$Level = $_POST["Level"];
$Respekti = $_POST["Respekti"];
$Vip = $_POST["Vip"];
$NovacDzep = $_POST["NovacDzep"];
$NovacBanka = $_POST["NovacBanka"];
$DvaV = $_POST["DvaV"];
$Mobilni = $_POST["Mobilni"];
$promjena = "UPDATE `" . $_UsersTable ."` SET Playername = '" . $User  . "', Level = '" . $Level  . "', Respekti = '" . $Respekti  . "', Vip = '" . $Vip  . "', NovacDzep = '" . $NovacDzep  . "', NovacBanka = '" . $NovacBanka  . "', DvaV = '" . $DvaV  . "', Mobilni = '" . $Mobilni  . "'  WHERE ID = '" . $idkor . "'";	
mysql_query($promjena) or die(mysql_error());



$Email = $_POST["Email"];
$Spol = $_POST["Spol"];
$Drzava = $_POST["Drzava"];
$Admin = $_POST["Admin"];
$GameMaster = $_POST["GameMaster"];
$Skin = $_POST["Skin"];
$Lider = $_POST["Lider"];
$Clan = $_POST["Clan"];
$Rank = $_POST["Rank"];
$promjena = "UPDATE `" . $_UsersTable ."` SET Email = '" . $Email  . "', Pol = '" . $Spol  . "', Drzava = '" . $Drzava  . "', Admin = '" . $Admin  . "', GameMaster = '" . $GameMaster  . "', Skin = '" . $Skin  . "', Lider = '" . $Lider  . "', Clan = '" . $Clan  . "', Rank = '" . $Rank  . "'  WHERE ID = '" . $idkor . "'";	
mysql_query($promjena) or die(mysql_error());




$Droga = $_POST["Droga"];
$Mats = $_POST["Mats"];
$IznosRate = $_POST["IznosRate"];
$IznosKredita = $_POST["IznosKredita"];
$PreostaloZaOtplatu = $_POST["PreostaloZaOtplatu"];
$ADozvola = $_POST["ADozvola"];
$KamionDozvola = $_POST["KamionDozvola"];
$MotorDozvola = $_POST["MotorDozvola"];
$AvionDozvola = $_POST["AvionDozvola"];
$BrodDozvola = $_POST["BrodDozvola"];
$promjena = "UPDATE `" . $_UsersTable ."` SET Droga = '" . $Droga  . "', Mats = '" . $Mats  . "', IznosRate = '" . $IznosRate  . "', iznosKredita = '" . $IznosKredita  . "', PreostaloZaOtplatu = '" . $PreostaloZaOtplatu  . "', ADozvola = '" . $ADozvola  . "', KamionDozvola = '" . $KamionDozvola  . "', MotorDozvola = '" . $MotorDozvola  . "', AvionDozvola = '" . $AvionDozvola  . "', BrodDozvola = '" . $BrodDozvola  . "'  WHERE ID = '" . $idkor . "'";	
mysql_query($promjena) or die(mysql_error());




$PosedovanjeFirme = $_POST["PosedovanjeFirme"];
$PosedovanjeStana = $_POST["PosedovanjeStana"];
$PosedovanjeKuce = $_POST["PosedovanjeKuce"];
$PosedovanjeVikendice = $_POST["PosedovanjeVikendice"];
$PosedovanjeAuta = $_POST["PosedovanjeAuta"];
$PosedovanjeAuta2 = $_POST["PosedovanjeAuta2"];
$PosedovanjeMotora = $_POST["PosedovanjeMotora"];
$PosedovanjeBicikla = $_POST["PosedovanjeBicikla"];
$PosedovanjeAviona = $_POST["PosedovanjeAviona"];
$PosedovanjePlovila = $_POST["PosedovanjePlovila"];
$promjena = "UPDATE `" . $_UsersTable ."` SET PosedovanjeFirme = '" . $PosedovanjeFirme  . "', PosedovanjeStana = '" . $PosedovanjeStana  . "', PosedovanjeKuce = '" . $PosedovanjeKuce  . "', PosedovanjeVikendice = '" . $PosedovanjeVikendice  . "', PosedovanjeAuta = '" . $PosedovanjeAuta  . "', PosedovanjeAuta2 = '" . $PosedovanjeAuta2  . "', PosedovanjeMotora = '" . $PosedovanjeMotora  . "', PosedovanjeBicikla = '" . $PosedovanjeBicikla  . "', PosedovanjePlovila = '" . $PosedovanjePlovila  . "', PosedovanjeAviona = '" . $PosedovanjeAviona  . "'  WHERE ID = '" . $idkor . "'";	
mysql_query($promjena) or die(mysql_error());



$BorbeniStil = $_POST["BorbeniStil"];
$Posao = $_POST["Posao"];
$Posaougovor = $_POST["Posaougovor"];
$OrgUgovor = $_POST["OrgUgovor"];
$Diploma = $_POST["Diploma"];
$Warn = $_POST["Warn"];
$Promoter = $_POST["Promoter"];
$BankovniRacun = $_POST["BankovniRacun"];
$Skripter = $_POST["Skripter"];
$Zlato = $_POST["Zlato"];
$Kartica = $_POST["Kartica"];
$GunDozvola = $_POST["GunDozvola"];
$promjena = "UPDATE `" . $_UsersTable ."` SET BorbeniStil = '" . $BorbeniStil  . "', Posao = '" . $Posao  . "', Posaougovor = '" . $Posaougovor  . "', OrgUgovor = '" . $OrgUgovor  . "', Diploma = '" . $Diploma  . "', Warn = '" . $Warn  . "', Promoter = '" . $Promoter  . "', BankovniRacun = '" . $BankovniRacun  . "' , Skripter = '" . $Skripter  . "', Kartica = '" . $Kartica  . "', Zlato = '" . $Zlato  . "', GunDozvola = '" . $GunDozvola  . "'  WHERE ID = '" . $idkor . "'";	
mysql_query($promjena) or die(mysql_error());

header("Location: korisnici.php?greska=ne");
?>