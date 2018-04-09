<?php
include('baza.php');
if(!isset($_COOKIE["user"])) header("Location: login.php");
if(!isset($_GET["auid"])) header("Location: mojeponude.php");
$korisnik = $_COOKIE["user"];
$auid = $_GET["auid"];
$testQuery = "SELECT * FROM `aukcija` WHERE id = '" . $auid . "'";
$testResult = mysql_query($testQuery) or die(mysql_error());
$testFetch = mysql_fetch_object($testResult);	
if($testFetch->IgracPonudio != "Država")
{
if($korisnik == $testFetch->IgracProdaje)
{
$sqlQuery = "SELECT * FROM `" . $_UsersTable ."` WHERE Playername = '" . $testFetch->IgracPonudio . "'";
$sqlResult = mysql_query($sqlQuery) or die(mysql_error());
$sqlFetch = mysql_fetch_object($sqlResult);
if($sqlFetch->NovacBanka > $testFetch->Ponuda)
{
	$dane = "Ne";
		if($testFetch->VrstaImovine == 1 && $sqlFetch->PosedovanjeKuce == -1)
		{
			$szQuery = "UPDATE `" . $_UsersTable ."` SET PosedovanjeKuce = -1 , NovacBanka = NovacBanka + " . $testFetch->Ponuda . " WHERE Playername = '" . $testFetch->IgracProdaje . "'";
			mysql_query($szQuery) or die(mysql_error());
		
			
			$szQuery = "UPDATE `" . $_UsersTable ."` SET PosedovanjeKuce = " . $testFetch->IDImovine . " , NovacBanka = NovacBanka - " . $testFetch->Ponuda . " WHERE Playername = '" . $testFetch->IgracPonudio . "'";
			mysql_query($szQuery) or die(mysql_error());
			
			$szQuery = "UPDATE `houses` SET ownername = '" . $testFetch->IgracPonudio . "'  WHERE id = '" . $testFetch->IDImovine . "'";
			mysql_query($szQuery) or die(mysql_error());
			
			$szQuery = "DELETE FROM `aukcija` WHERE id = '" . $auid . "'";
			mysql_query($szQuery) or die(mysql_error());
			$dane = "Da";
			header ("Location: mojeponude.php?greska=3");	
			
			
		}
		else header ("Location: mojeponude.php?greska=2");	
		
		if($testFetch->VrstaImovine == 2 && $sqlFetch->PosedovanjeStana == -1)
		{
			$szQuery = "UPDATE `" . $_UsersTable ."` SET PosedovanjeStana = -1 , NovacBanka = NovacBanka + " . $testFetch->Ponuda . " WHERE Playername = '" . $testFetch->IgracProdaje . "'";
			mysql_query($szQuery) or die(mysql_error());
		
			
			$szQuery = "UPDATE `" . $_UsersTable ."` SET PosedovanjeStana = " . $testFetch->IDImovine . " , NovacBanka = NovacBanka - " . $testFetch->Ponuda . " WHERE Playername = '" . $testFetch->IgracPonudio . "'";
			mysql_query($szQuery) or die(mysql_error());
			
			$szQuery = "UPDATE `apartments` SET ownername = '" . $testFetch->IgracPonudio . "'  WHERE id = '" . $testFetch->IDImovine . "'";
			mysql_query($szQuery) or die(mysql_error());
			
			$szQuery = "DELETE FROM `aukcija` WHERE id = '" . $auid . "'";
			mysql_query($szQuery) or die(mysql_error());
			$dane = "Da";
			header ("Location: mojeponude.php?greska=3");	
			
			
		}
		else header ("Location: mojeponude.php?greska=2");	
		
		if($testFetch->VrstaImovine == 3 && $sqlFetch->PosedovanjeVikendice == -1)
		{
			$szQuery = "UPDATE `" . $_UsersTable ."` SET PosedovanjeVikendice = -1 , NovacBanka = NovacBanka + " . $testFetch->Ponuda . " WHERE Playername = '" . $testFetch->IgracProdaje . "'";
			mysql_query($szQuery) or die(mysql_error());
		
			
			$szQuery = "UPDATE `" . $_UsersTable ."` SET PosedovanjeVikendice = " . $testFetch->IDImovine . " , NovacBanka = NovacBanka - " . $testFetch->Ponuda . " WHERE Playername = '" . $testFetch->IgracPonudio . "'";
			mysql_query($szQuery) or die(mysql_error());
			
			$szQuery = "UPDATE `cottages` SET ownername = '" . $testFetch->IgracPonudio . "'  WHERE id = '" . $testFetch->IDImovine . "'";
			mysql_query($szQuery) or die(mysql_error());
			
			$szQuery = "DELETE FROM `aukcija` WHERE id = '" . $auid . "'";
			mysql_query($szQuery) or die(mysql_error());
			
			$dane = "Da";
			
			header ("Location: mojeponude.php?greska=3");	
			
			
		}
		//else header ("Location: mojeponude.php?greska=2");	
		
		if($testFetch->VrstaImovine == 4 || $testFetch->VrstaImovine == 5 )
		{
			if($sqlFetch->DvaA == 0 && $sqlFetch->PosedovanjeAuta != -1)
			{
			header ("Location: mojeponude.php?greska=2");				
			}
			if($sqlFetch->DvaA == 1 && $sqlFetch->PosedovanjeAuta != -1 && $sqlFetch->PosedovanjeAuta2 != -1)
			{
			header ("Location: mojeponude.php?greska=2");				
			}
			if($sqlFetch->DvaA == 1 && $sqlFetch->PosedovanjeAuta != -1 && $sqlFetch->PosedovanjeAuta2 == -1)
			{
					if($testFetch->VrstaImovine == 4 )	
					{
					$szQuery = "UPDATE `" . $_UsersTable ."` SET PosedovanjeAuta = -1 , NovacBanka = NovacBanka + " . $testFetch->Ponuda . " WHERE Playername = '" . $testFetch->IgracProdaje . "'";
					mysql_query($szQuery) or die(mysql_error());	
					}
					if($testFetch->VrstaImovine == 5 )	
					{
					$szQuery = "UPDATE `" . $_UsersTable ."` SET PosedovanjeAuta2 = -1 , NovacBanka = NovacBanka + " . $testFetch->Ponuda . " WHERE Playername = '" . $testFetch->IgracProdaje . "'";
					mysql_query($szQuery) or die(mysql_error());	
					}		
					$szQuery = "UPDATE `" . $_UsersTable ."` SET PosedovanjeAuta2 = " . $testFetch->IDImovine . " , NovacBanka = NovacBanka - " . $testFetch->Ponuda . " WHERE Playername = '" . $testFetch->IgracPonudio . "'";
					mysql_query($szQuery) or die(mysql_error());
					
					$szQuery = "UPDATE `vehicles` SET ownername = '" . $testFetch->IgracPonudio . "'  WHERE id = '" . $testFetch->IDImovine . "'";
			mysql_query($szQuery) or die(mysql_error());
					
					$szQuery = "DELETE FROM `aukcija` WHERE id = '" . $auid . "'";
					mysql_query($szQuery) or die(mysql_error());	
			$dane = "Da";					
			header ("Location: mojeponude.php?greska=3");	
				
			}
			if($sqlFetch->DvaA == 1 && $sqlFetch->PosedovanjeAuta == -1 && $sqlFetch->PosedovanjeAuta2 != -1)
			{
					if($testFetch->VrstaImovine == 4 )	
					{
					$szQuery = "UPDATE `" . $_UsersTable ."` SET PosedovanjeAuta = -1 , NovacBanka = NovacBanka + " . $testFetch->Ponuda . " WHERE Playername = '" . $testFetch->IgracProdaje . "'";
					mysql_query($szQuery) or die(mysql_error());	
					}
					if($testFetch->VrstaImovine == 5 )	
					{
					$szQuery = "UPDATE `" . $_UsersTable ."` SET PosedovanjeAuta2 = -1 , NovacBanka = NovacBanka + " . $testFetch->Ponuda . " WHERE Playername = '" . $testFetch->IgracProdaje . "'";
					mysql_query($szQuery) or die(mysql_error());	
					}		
					$szQuery = "UPDATE `" . $_UsersTable ."` SET PosedovanjeAuta = " . $testFetch->IDImovine . " , NovacBanka = NovacBanka - " . $testFetch->Ponuda . " WHERE Playername = '" . $testFetch->IgracPonudio . "'";
					mysql_query($szQuery) or die(mysql_error());
					
					$szQuery = "UPDATE `vehicles` SET ownername = '" . $testFetch->IgracPonudio . "'  WHERE id = '" . $testFetch->IDImovine . "'";
			mysql_query($szQuery) or die(mysql_error());
					
					$szQuery = "DELETE FROM `aukcija` WHERE id = '" . $auid . "'";
					mysql_query($szQuery) or die(mysql_error());	
			$dane = "Da";					
			header ("Location: mojeponude.php?greska=3");	
				
			}
			if($sqlFetch->DvaA == 1 && $sqlFetch->PosedovanjeAuta == -1 && $sqlFetch->PosedovanjeAuta2 == -1)
			{
					if($testFetch->VrstaImovine == 4 )	
					{
					$szQuery = "UPDATE `" . $_UsersTable ."` SET PosedovanjeAuta = -1 , NovacBanka = NovacBanka + " . $testFetch->Ponuda . " WHERE Playername = '" . $testFetch->IgracProdaje . "'";
					mysql_query($szQuery) or die(mysql_error());	
					}
					if($testFetch->VrstaImovine == 5 )	
					{
					$szQuery = "UPDATE `" . $_UsersTable ."` SET PosedovanjeAuta2 = -1 , NovacBanka = NovacBanka + " . $testFetch->Ponuda . " WHERE Playername = '" . $testFetch->IgracProdaje . "'";
					mysql_query($szQuery) or die(mysql_error());	
					}		
					$szQuery = "UPDATE `" . $_UsersTable ."` SET PosedovanjeAuta = " . $testFetch->IDImovine . " , NovacBanka = NovacBanka - " . $testFetch->Ponuda . " WHERE Playername = '" . $testFetch->IgracPonudio . "'";
					mysql_query($szQuery) or die(mysql_error());
					
					$szQuery = "UPDATE `vehicles` SET ownername = '" . $testFetch->IgracPonudio . "'  WHERE id = '" . $testFetch->IDImovine . "'";
			mysql_query($szQuery) or die(mysql_error());
					
					$szQuery = "DELETE FROM `aukcija` WHERE id = '" . $auid . "'";
					mysql_query($szQuery) or die(mysql_error());	
			$dane = "Da";					
			header ("Location: mojeponude.php?greska=3");	
				
			}
			if($sqlFetch->DvaA == 0 && $sqlFetch->PosedovanjeAuta == -1)
			{
					if($testFetch->VrstaImovine == 4 )	
					{
					$szQuery = "UPDATE `" . $_UsersTable ."` SET PosedovanjeAuta = -1 , NovacBanka = NovacBanka + " . $testFetch->Ponuda . " WHERE Playername = '" . $testFetch->IgracProdaje . "'";
					mysql_query($szQuery) or die(mysql_error());	
					}
					if($testFetch->VrstaImovine == 5 )	
					{
					$szQuery = "UPDATE `" . $_UsersTable ."` SET PosedovanjeAuta2 = -1 , NovacBanka = NovacBanka + " . $testFetch->Ponuda . " WHERE Playername = '" . $testFetch->IgracProdaje . "'";
					mysql_query($szQuery) or die(mysql_error());	
					}		
					$szQuery = "UPDATE `" . $_UsersTable ."` SET PosedovanjeAuta = " . $testFetch->IDImovine . " , NovacBanka = NovacBanka - " . $testFetch->Ponuda . " WHERE Playername = '" . $testFetch->IgracPonudio . "'";
					mysql_query($szQuery) or die(mysql_error());
					
					$szQuery = "UPDATE `vehicles` SET ownername = '" . $testFetch->IgracPonudio . "'  WHERE id = '" . $testFetch->IDImovine . "'";
			mysql_query($szQuery) or die(mysql_error());
					
					$szQuery = "DELETE FROM `aukcija` WHERE id = '" . $auid . "'";
					mysql_query($szQuery) or die(mysql_error());	
			$dane = "Da";					
			header ("Location: mojeponude.php?greska=3");	
				
			}
			
			
		}
		
		
		if($testFetch->VrstaImovine == 6 && $sqlFetch->PosedovanjeMotora == -1)
		{
			$szQuery = "UPDATE `" . $_UsersTable ."` SET PosedovanjeMotora = -1 , NovacBanka = NovacBanka + " . $testFetch->Ponuda . " WHERE Playername = '" . $testFetch->IgracProdaje . "'";
			mysql_query($szQuery) or die(mysql_error());
		
			
			$szQuery = "UPDATE `" . $_UsersTable ."` SET PosedovanjeMotora = " . $testFetch->IDImovine . " , NovacBanka = NovacBanka - " . $testFetch->Ponuda . " WHERE Playername = '" . $testFetch->IgracPonudio . "'";
			mysql_query($szQuery) or die(mysql_error());
			
			$szQuery = "UPDATE `motorcycles` SET ownername = '" . $testFetch->IgracPonudio . "'  WHERE id = '" . $testFetch->IDImovine . "'";
			mysql_query($szQuery) or die(mysql_error());
			
			$szQuery = "DELETE FROM `aukcija` WHERE id = '" . $auid . "'";
			mysql_query($szQuery) or die(mysql_error());
			$dane = "Da";
			header ("Location: mojeponude.php?greska=3");	
			
			
		}
		//else header ("Location: mojeponude.php?greska=2");
		
		
		if($testFetch->VrstaImovine == 7 && $sqlFetch->PosedovanjePlovila == -1)
		{
			$szQuery = "UPDATE `" . $_UsersTable ."` SET PosedovanjePlovila = -1 , NovacBanka = NovacBanka + " . $testFetch->Ponuda . " WHERE Playername = '" . $testFetch->IgracProdaje . "'";
			mysql_query($szQuery) or die(mysql_error());
		
			
			$szQuery = "UPDATE `" . $_UsersTable ."` SET PosedovanjePlovila = " . $testFetch->IDImovine . " , NovacBanka = NovacBanka - " . $testFetch->Ponuda . " WHERE Playername = '" . $testFetch->IgracPonudio . "'";
			mysql_query($szQuery) or die(mysql_error());
			
			$szQuery = "UPDATE `boats` SET ownername = '" . $testFetch->IgracPonudio . "'  WHERE id = '" . $testFetch->IDImovine . "'";
			mysql_query($szQuery) or die(mysql_error());
			
			$szQuery = "DELETE FROM `aukcija` WHERE id = '" . $auid . "'";
			mysql_query($szQuery) or die(mysql_error());
			$dane = "Da";
			header ("Location: mojeponude.php?greska=3");	
			
			
		}

		
		
		if($testFetch->VrstaImovine == 8 && $sqlFetch->PosedovanjeAviona == -1)
		{
			$szQuery = "UPDATE `" . $_UsersTable ."` SET PosedovanjeAviona = -1 , NovacBanka = NovacBanka + " . $testFetch->Ponuda . " WHERE Playername = '" . $testFetch->IgracProdaje . "'";
			mysql_query($szQuery) or die(mysql_error());
		
			
			$szQuery = "UPDATE `" . $_UsersTable ."` SET PosedovanjeAviona = " . $testFetch->IDImovine . " , NovacBanka = NovacBanka - " . $testFetch->Ponuda . " WHERE Playername = '" . $testFetch->IgracPonudio . "'";
			mysql_query($szQuery) or die(mysql_error());
			
			$szQuery = "UPDATE `airplanes` SET ownername = '" . $testFetch->IgracPonudio . "'  WHERE id = '" . $testFetch->IDImovine . "'";
			mysql_query($szQuery) or die(mysql_error());
			
			$szQuery = "DELETE FROM `aukcija` WHERE id = '" . $auid . "'";
			mysql_query($szQuery) or die(mysql_error());
			$dane = "Da";
			header ("Location: mojeponude.php?greska=3");	
			
			
		}
	
	
	if($dane == "Ne")
		header ("Location: mojeponude.php?greska=2");	
	
}
else header ("Location: mojeponude.php?greska=1");			
		
}

}
else  header("Location: mojeponude.php?greska=4");
?>