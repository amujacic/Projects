<?php
include('baza.php');
if(!isset($_GET["auid"])) header("Location: aukcije.php");
if(!isset($_COOKIE["user"])) header("Location: login.php");
$auid = $_GET["auid"];
$korisnik = $_COOKIE["user"];
$VehiclePrice = Array(
										400=>130000,
										402=>300000,
										405=>130000,
										411=>10000000,
										412=>200000,
										415=>970000,
										419=>140000,
										429=>450000,
										439=>85000,
										445=>150000,
										451=>5000000,
										459=>110000,
										466=>150000,
										467=>120000,
										474=>200000,
										475=>250000,
										477=>390000,
										480=>370000,
										489=>550000,
										491=>350000,
										492=>80000,
										496=>650000,
										500=>250000,
										506=>290000,
										507=>150000,
										516=>40000,
										526=>50000,
										527=>65000,
										529=>75000,
										533=>195000,
										535=>350000,
										536=>150000,
										541=>4000000,
										542=>100000,
										545=>950000,
										546=>650000,
										550=>200000,
										551=>170000,
										554=>150000,
										555=>300000,
										558=>500000,
										559=>450000,
										560=>8000000,
										561=>290000,
										562=>620000,
										565=>700000,
										566=>230000,
										567=>245000,
										575=>450000,
										579=>850000,
										580=>230000,
										585=>150000,
										587=>950000,
										589=>500000,
										602=>850000,
										603=>190000,
										600=>90000
									);
$szQuery = "SELECT * FROM `aukcija` WHERE id = '" . $auid . "'";
$qrResult = mysql_query($szQuery) or die(mysql_error());
$rFetch = mysql_fetch_object($qrResult);

if($korisnik == $rFetch->IgracPonudio)
{
									if($rFetch->VrstaImovine == 1 )
										{
											$szQuery = "SELECT * FROM `houses` WHERE id = '" . $rFetch->IDImovine . "'";
											$qrResult = mysql_query($szQuery) or die(mysql_error());
											$aukFetch = mysql_fetch_object($qrResult);	
											$bid = $aukFetch->price/2;
																				
										
										}	
										
										if($rFetch->VrstaImovine == 2 )
										{
											$szQuery = "SELECT * FROM `apartments` WHERE id = '" . $rFetch->IDImovine . "'";
											$qrResult = mysql_query($szQuery) or die(mysql_error());
											$aukFetch = mysql_fetch_object($qrResult);	
											$bid = $aukFetch->price/2;
										
										}	
										
										if($rFetch->VrstaImovine == 3 )
										{
											$szQuery = "SELECT * FROM `cottages` WHERE id = '" . $rFetch->IDImovine . "'";
											$qrResult = mysql_query($szQuery) or die(mysql_error());
											$aukFetch = mysql_fetch_object($qrResult);	
											
											$bid = $aukFetch->price/2;
										
										}	
										
										if($rFetch->VrstaImovine == 4 )
										{
											$szQuery = "SELECT * FROM `vehicles` WHERE id = '" . $rFetch->IDImovine . "'";
											$qrResult = mysql_query($szQuery) or die(mysql_error());
											$aukFetch = mysql_fetch_object($qrResult);	
											
											$bid = $VehiclePrice[$aukFetch->model]/2;
										
										}
										
										if($rFetch->VrstaImovine == 5 )
										{
											$szQuery = "SELECT * FROM `vehicles` WHERE id = '" . $rFetch->IDImovine . "'";
											$qrResult = mysql_query($szQuery) or die(mysql_error());
											$aukFetch = mysql_fetch_object($qrResult);	
											
											$bid = $VehiclePrice[$aukFetch->model]/2;
										
										}
										
										if($rFetch->VrstaImovine == 6 )
										{
											$szQuery = "SELECT * FROM `motorcycles` WHERE id = '" . $rFetch->IDImovine . "'";
											$qrResult = mysql_query($szQuery) or die(mysql_error());
											$aukFetch = mysql_fetch_object($qrResult);	
											
											$bid = $aukFetch->price/2;
										
										}
										
										if($rFetch->VrstaImovine == 7 )
										{
											$szQuery = "SELECT * FROM `boats` WHERE id = '" . $rFetch->IDImovine . "'";
											$qrResult = mysql_query($szQuery) or die(mysql_error());
											$aukFetch = mysql_fetch_object($qrResult);	
											
											$bid = $aukFetch->price/2;
										
										}
										
										if($rFetch->VrstaImovine == 8 )
										{
											$szQuery = "SELECT * FROM `airplanes` WHERE id = '" . $rFetch->IDImovine . "'";
											$qrResult = mysql_query($szQuery) or die(mysql_error());
											$aukFetch = mysql_fetch_object($qrResult);	
											
											$bid = $aukFetch->price/2;
										
										}
			
			
			$nQuery = "UPDATE `aukcija` SET Ponuda = " . $bid . ", IgracPonudio = 'Država' WHERE id ='" . $auid ."'";
			mysql_query($nQuery) or die(mysql_error());							
			header("Location: aukcije.php?rgreska=2");
	
	
}
else header("Location: aukcije.php?rgreska=1");
?>