<?php if(!isset($_COOKIE['sessid'])) header('Location: login.php'); ?>
<?php if(!isset($_COOKIE['user'])) header('Location: login.php'); ?>
<?php include("header.php"); ?>
<?php $pretraga = $_POST["pretraga"];
		$vrsta = $_POST["imovina"];
		$vrtapret = $_POST["vrsta"];
		
		if(empty($_POST["pretraga"]))
			header("Location: aukcije.php");
		if(empty($_POST["imovina"]))
			header("Location: aukcije.php");
		if(empty($_POST["vrsta"]))
			header("Location: aukcije.php");
?>

<div class="main-content">
				<div class="main-content-inner">
					<!-- #section:basics/content.breadcrumbs -->
					<div class="breadcrumbs" id="breadcrumbs">
						<script type="text/javascript">
							try{ace.settings.check('breadcrumbs' , 'fixed')}catch(e){}
						</script>

						<ul class="breadcrumb">
							<li>
								<i class="ace-icon fa fa-home home-icon"></i>
								<a href="index.php">Naslovna</a>
							</li>
							<li class="active">Korisnik</li>
							
							<li class="active">Aktivne aukcije</li>
						</ul><!-- /.breadcrumb -->

						
					</div>

					<!-- /section:basics/content.breadcrumbs -->
					<div class="page-content">
			
						<div class="page-header">
							<h1>
								Korisnik
								<small>
									<i class="ace-icon fa fa-angle-double-right"></i>
									Aktivne aukcije
								</small>
							</h1>
						</div><!-- /.page-header -->
						<?php if($_GET['rgreska'] == 1) echo '<center><p style="color: red; font-weight: bold;">Vaša ponuda nije najveća!</p></center>';
									if($_GET['rgreska'] == 2) echo '<center><p style="color: green; font-weight: bold;">Uspješno ste odustali od vaše ponude!</p></center>';
									?>
					
						<?php
						
									include "baza.php";									
									$szQuery = "SELECT * FROM `aukcija` WHERE IgracPonudio = '" . $_COOKIE['user'] . "'";
									$qResult = mysql_query($szQuery) or die(mysql_error());
									
							if(mysql_num_rows($qResult) != 0)
							{
						?>
								<div class="row">
									<div class="col-xs-12">
								<h2>Moji bidovi</h2>
										<table id="simple-table" class="table table-striped table-bordered table-hover">
											<thead>
												<tr>
													<th class="center">#</th>
													<th>Imovina</th>													
													<th>ID</th>
													<th>Prodavač</th>
													<th>Vrsta/Model</th>
													<th>Opis</th>
													<th>Najveća ponuda</th>
													<th>Ponudio</th>
													<th>Odustani</th>
													

												</tr>
											</thead>

											<tbody>
									<?php
									
									$VehicleName = Array(
										400 => 'Landstalker', 401 => 'Bravura', 402 => 'Buffalo', 403 => 'Linerunner', 404 => 'Perenail', 405 => 'Sentinel', 406 => 'Dumper', 407 => 'Firetruck', 408 => 'Trashmaster', 409 => 'Stretch', 410 => 'Manana', 411 => 'Infernus', 412 => 'Voodoo', 413 => 'pony', 414 => 'Mule', 415 => 'Cheetah', 416 => 'Ambulance', 417 => 'Levetian', 418 => 'Boonbeam', 419 => 'Esperanto', 420 => 'Taxi', 421 => 'Washington', 422 => 'Bobcat', 423 => 'Mr whoopee', 424 => 'BF injection', 425 => 'Hunter', 426 => 'Premier', 427 => 'Enforcer', 428 => 'Securicar', 429 => 'Banshee', 430 => 'Predator', 431 => 'Bus', 432 => 'Rhino', 433 => 'Barracks', 434 => 'Hotknife', 435 => 'Artic trailer 1', 436 => 'Previon', 437 => 'Coach', 438 => 'Cabbie', 439 => 'Stallion', 440 => 'Rumpo', 441 => 'RC bandit',
										442 => 'Romero', 443 => 'Packer', 444 => 'Monster', 445 => 'Admiral', 446 => 'Squalo', 447 => 'Seasparrow', 448 => 'Pizza boy', 449 => 'Tram', 450 => 'Artic trailer 2', 451 => 'Turismo', 452 => 'Speeder', 453 => 'Reefer', 454 => 'Tropic', 455 => 'Flatbed', 456 => 'Yankee', 457 => 'Caddy', 458 => 'Solair', 459 => 'Top fun', 460 => 'Skimmer', 461 => 'PCJ 600', 462 => 'Faggio', 463 => 'Freeway', 464 => 'RC baron', 465 => 'RC raider', 466 => 'Glendale', 467 => 'Oceanic', 468 => 'Sanchez', 469 => 'Sparrow', 470 => 'Patriot', 471 => 'Quad', 472 => 'Coastgaurd', 473 => 'Dinghy', 474 => 'Hermes', 475 => 'Sabre', 476 => 'Rustler', 477 => 'ZR 350', 478 => 'Walton', 479 => 'Regina', 480 => 'Comet', 481 => 'BMX', 482 => 'Burriro', 483 => 'Camper', 484 => 'Marquis', 485 => 'Baggage', 
										486 => 'Dozer', 487 => 'Maverick', 488 => 'CNN maverick', 489 => 'Rancher', 490 => 'FBI rancher', 491 => 'Virgo', 492 => 'Greenwood', 493 => 'Jetmax', 494 => 'Hotring', 495 => 'Sandking', 496 => 'Blistac', 497 => 'Police maverick', 498 => 'Boxville', 499 => 'Benson', 500 => 'Mesa', 501 => 'RC goblin', 502 => 'Hotring a', 503 => 'Hotring b', 504 => 'Blood ring banger', 505 => 'Rancher (lure)', 506 => 'Super gt', 507 => 'Elegant', 508 => 'Journey', 509 => 'Bike', 510 => 'Mountain bike', 511 => 'Beagle', 512 => 'Cropduster', 513 => 'Stuntplane', 514 => 'Petrol', 515 => 'Roadtrain', 516 => 'Nebula', 517 => 'Majestic', 518 => 'Buccaneer', 519 => 'Shamal', 520 => 'Hydra', 521 => 'FCR 900', 522 => 'NRG 500', 523 => 'HPV 1000', 524 => 'Cement', 525 => 'Towtruck', 526 => 'Fortune',
										527 => 'Cadrona', 528 => 'FBI truck', 529 => 'Williard', 530 => 'Fork lift', 531 => 'Tractor', 532 => 'Combine', 533 => 'Feltzer', 534 => 'Remington', 535 => 'Slamvan', 536 => 'Blade', 537 => 'Freight', 538 => 'Streak', 539 => 'Vortex', 540 => 'Vincent', 541 => 'Bullet', 542 => 'Clover', 543 => 'Sadler', 544 => 'Firetruck la', 545 => 'Hustler', 546 => 'Intruder', 547 => 'Primo', 548 => 'Cargobob', 549 => 'Tampa', 550 => 'Sunrise', 551 => 'Merit', 552 => 'Utility van', 553 => 'Nevada', 554 => 'Yosemite', 555 => 'Windsor', 556 => 'Monster a', 557 => 'Monster b', 558 => 'Uranus', 559 => 'Jester', 560 => 'Sultan', 561 => 'Stratum', 562 => 'Elegy', 563 => 'Raindance', 564 => 'RC tiger', 565 => 'Flash', 566 => 'Tahoma', 567 => 'Savanna', 568 => 'Bandito', 569 => 'Freight flat',
										570 => 'Streak', 571 => 'Kart', 572 => 'Mower', 573 => 'Duneride', 574 => 'Sweeper', 575 => 'Broadway', 576 => 'Tornado', 577 => 'AT 400', 578 => 'DFT 30', 579 => 'Huntley', 580 => 'Stafford', 581 => 'BF 400', 582 => 'News van', 583 => 'Tug', 584 => 'Petrol tanker', 585 => 'Emperor', 586 => 'Wayfarer', 587 => 'Euros', 588 => 'Hotdog', 589 => 'Club', 590 => 'Freight box', 591 => 'Artic trailer 3', 592 => 'Andromada', 593 => 'Dodo', 594 => 'RC cam', 595 => 'Launch', 596 => 'Cop car ls', 597 => 'Cop car sf', 598 => 'Cop car lv', 599 => 'Ranger', 600 => 'Picador', 601 => 'Swat tank', 602 => 'Alpha', 603 => 'P', 604 => 'Glendale (damage)', 605 => 'Sadler (damage)', 606 => 'Bag box a', 607 => 'Bag box b', 608 => 'Stairs', 609 => 'Boxville (black)', 610 => 'Farm trailer', 611 => 'Utility van trailer'
										); 
									$idk = $limit2;
									
									while($rFetch = mysql_fetch_object($qResult))
									{
									
										$idk = $idk+1;
										if($rFetch->VrstaImovine == 1 )
										{
											$szQuery = "SELECT * FROM `houses` WHERE id = '" . $rFetch->IDImovine . "'";
											$qrResult = mysql_query($szQuery) or die(mysql_error());
											$aukFetch = mysql_fetch_object($qrResult);	
											
											echo'
												<tr>
													<td class="center">
													' . $idk . '	
													</td>
													<td class="center">
													Kuca
													</td>
													<td class="center">
														' . $rFetch->IDImovine . '
													</td>
													<td class="center">' . $rFetch->IgracProdaje . '</td>
													<td class="center">' . $aukFetch->type .'</td>
													<td class="center">' . $rFetch->Opis . '</td>
													<td class="center">' . $rFetch->Ponuda . '$</td>
													<td class="center">' . $rFetch->IgracPonudio . '</td>
													<td class="center"><a href="odustani.php?auid=' . $rFetch->id . '"> <button class="btn btn-danger"><i>Odustani</i></button></a></td>

												</tr>';
																				
										
										}	
										
										if($rFetch->VrstaImovine == 2 )
										{
											$szQuery = "SELECT * FROM `apartments` WHERE id = '" . $rFetch->IDImovine . "'";
											$qrResult = mysql_query($szQuery) or die(mysql_error());
											$aukFetch = mysql_fetch_object($qrResult);	
											
											echo'
												<tr>
													<td class="center">
													' . $idk . '	
													</td>
													<td class="center">
													Stan
													</td>
													<td class="center">
														' . $rFetch->IDImovine . '
													</td>
													<td class="center">' . $rFetch->IgracProdaje . '</td>
													<td class="center">Stan</td>
													<td class="center">' . $rFetch->Opis . '</td>
													<td class="center">' . $rFetch->Ponuda . '$</td>
													<td class="center">' . $rFetch->IgracPonudio . '</td>
													<td class="center"><a href="odustani.php?auid=' . $rFetch->id . '"> <button class="btn btn-danger"><i>Odustani</i></button></a></td>

												</tr>';
										
										}	
										
										if($rFetch->VrstaImovine == 3 )
										{
											$szQuery = "SELECT * FROM `cottages` WHERE id = '" . $rFetch->IDImovine . "'";
											$qrResult = mysql_query($szQuery) or die(mysql_error());
											$aukFetch = mysql_fetch_object($qrResult);	
											
											echo'
												<tr>
													<td class="center">
													' . $idk . '	
													</td>
													<td class="center">
													Vikendica
													</td>
													<td class="center">
														' . $rFetch->IDImovine . '
													</td>
													<td class="center">' . $rFetch->IgracProdaje . '</td>
													<td class="center">Vikendica</td>
													<td class="center">' . $rFetch->Opis . '</td>
													<td class="center">' . $rFetch->Ponuda . '$</td>
													<td class="center">' . $rFetch->IgracPonudio . '</td>
													<td class="center"><a href="odustani.php?auid=' . $rFetch->id . '"> <button class="btn btn-danger"><i>Odustani</i></button></a></td>

												</tr>';
										
										}	
										
										if($rFetch->VrstaImovine == 4 )
										{
											$szQuery = "SELECT * FROM `vehicles` WHERE id = '" . $rFetch->IDImovine . "'";
											$qrResult = mysql_query($szQuery) or die(mysql_error());
											$aukFetch = mysql_fetch_object($qrResult);	
											
											echo'
												<tr>
													<td class="center">
													' . $idk . '	
													</td>
													<td class="center">
													Auto
													</td>
													<td class="center">
														' . $rFetch->IDImovine . '
													</td>
													<td class="center">' . $rFetch->IgracProdaje . '</td>
													<td class="center">' . $VehicleName[$aukFetch->model] .'</td>
													<td class="center">' . $rFetch->Opis . '</td>
													<td class="center">' . $rFetch->Ponuda . '$</td>
													<td class="center">' . $rFetch->IgracPonudio . '</td>
													<td class="center"><a href="odustani.php?auid=' . $rFetch->id . '"> <button class="btn btn-danger"><i>Odustani</i></button></a></td>

												</tr>';
										
										}
										
										if($rFetch->VrstaImovine == 5 )
										{
											$szQuery = "SELECT * FROM `vehicles` WHERE id = '" . $rFetch->IDImovine . "'";
											$qrResult = mysql_query($szQuery) or die(mysql_error());
											$aukFetch = mysql_fetch_object($qrResult);	
											
											echo'
												<tr>
													<td class="center">
													' . $idk . '	
													</td>
													<td class="center">
													Auto 2
													</td>
													<td class="center">
														' . $rFetch->IDImovine . '
													</td>
													<td class="center">' . $rFetch->IgracProdaje . '</td>
													<td class="center">' . $VehicleName[$aukFetch->model] .'</td>
													<td class="center">' . $rFetch->Opis . '</td>
													<td class="center">' . $rFetch->Ponuda . '$</td>
													<td class="center">' . $rFetch->IgracPonudio . '</td>
													<td class="center"><a href="odustani.php?auid=' . $rFetch->id . '"> <button class="btn btn-danger"><i>Odustani</i></button></a></td>

												</tr>';
										
										}
										
										if($rFetch->VrstaImovine == 6 )
										{
											$szQuery = "SELECT * FROM `motorcycles` WHERE id = '" . $rFetch->IDImovine . "'";
											$qrResult = mysql_query($szQuery) or die(mysql_error());
											$aukFetch = mysql_fetch_object($qrResult);	
											
											echo'
												<tr>
													<td class="center">
													' . $idk . '	
													</td>
													<td class="center">
													Motor
													</td>
													<td class="center">
														' . $rFetch->IDImovine . '
													</td>
													<td class="center">' . $rFetch->IgracProdaje . '</td>
													<td class="center">' . $VehicleName[$aukFetch->model] .'</td>
													<td class="center">' . $rFetch->Opis . '</td>
													<td class="center">' . $rFetch->Ponuda . '$</td>
													<td class="center">' . $rFetch->IgracPonudio . '</td>
													<td class="center"><a href="odustani.php?auid=' . $rFetch->id . '"> <button class="btn btn-danger"><i>Odustani</i></button></a></td>

												</tr>';
										
										}
										
										if($rFetch->VrstaImovine == 7 )
										{
											$szQuery = "SELECT * FROM `boats` WHERE id = '" . $rFetch->IDImovine . "'";
											$qrResult = mysql_query($szQuery) or die(mysql_error());
											$aukFetch = mysql_fetch_object($qrResult);	
											
											echo'
												<tr>
													<td class="center">
													' . $idk . '	
													</td>
													<td class="center">
													Brod
													</td>
													<td class="center">
														' . $rFetch->IDImovine . '
													</td>
													<td class="center">' . $rFetch->IgracProdaje . '</td>
													<td class="center">' . $VehicleName[$aukFetch->model] .'</td>
													<td class="center">' . $rFetch->Opis . '</td>
													<td class="center">' . $rFetch->Ponuda . '$</td>
													<td class="center">' . $rFetch->IgracPonudio . '</td>
													<td class="center"><a href="odustani.php?auid=' . $rFetch->id . '"> <button class="btn btn-danger"><i>Odustani</i></button></a></td>

												</tr>';
										
										}
										
										if($rFetch->VrstaImovine == 8 )
										{
											$szQuery = "SELECT * FROM `airplanes` WHERE id = '" . $rFetch->IDImovine . "'";
											$qrResult = mysql_query($szQuery) or die(mysql_error());
											$aukFetch = mysql_fetch_object($qrResult);	
											
											echo'
												<tr>
													<td class="center">
													' . $idk . '	
													</td>
													<td class="center">
													Letjelica
													</td>
													<td class="center">
														' . $rFetch->IDImovine . '
													</td>
													<td class="center">' . $rFetch->IgracProdaje . '</td>
													<td class="center">' . $VehicleName[$aukFetch->model] .'</td>
													<td class="center">' . $rFetch->Opis . '</td>
													<td class="center">' . $rFetch->Ponuda . '$</td>
													<td class="center">' . $rFetch->IgracPonudio . '</td>
													<td class="center"><a href="odustani.php?auid=' . $rFetch->id . '"> <button class="btn btn-danger"><i>Odustani</i></button></a></td>

												</tr>';
										
										}
												
										
										
									}
									
									
									
									
									?>
											
												
												
										
										

												
											</tbody>
										</table>
									
									</div><!-- /.span -->
								</div><!-- /.row -->
								<hr>
								<h2>Aktivne aukcije</h2>
							<?php } ?>
						<div class="row">
							<div class="col-xs-12">
						
							<form action="aukcijep.php" method="POST">
                                <input type="text" name="pretraga" placeholder="Pretraga aukcija..." required>
								<label>
									<span class="block">
										 <select name="imovina" class="form-control">
										 <option value="1">Kuća</option>
										 <option value="2">Stan</option>		
										 <option value="3">Vikendica</option>		
										 <option value="4">Auto</option>		
										 <option value="6">Motor</option>		
										 <option value="7">Brod</option>		
										 <option value="8">Avion</option>											 
										</select>															
									</span>
								</label>
								<label>
									<span class="block">
										 <select name="vrsta" class="form-control">
										 <option value="1">Prodavač</option>	
										 <option value="2">Ponuda</option>			
										 <option value="3">ID</option>		
															 
										</select>															
									</span>
								</label>
                                <input type="submit" class="btn btn-success" value="Pretraga" >
</form>
<br><br>
								<div class="row">
									<div class="col-xs-12">
									<?php if($_GET['greska'] == 1) echo '<center><p style="color: red; font-weight: bold;">Morate ponuditi više od prošle ponude!</p></center>';
									if($_GET['greska'] == 2) echo '<center><p style="color: red; font-weight: bold;">Nemate toliko novca na bankovnom računu!</p></center>';
									if($_GET['greska'] == 3) echo '<center><p style="color: green; font-weight: bold;"> Uspješno ste bidovali na aukciju, sačekajte da prodavač prihvati vašu ponudu! Osigurajte pare na računu kako bi prodaja bila uspješna!</p></center>';
									?>
										<table id="simple-table" class="table table-striped table-bordered table-hover">
											<thead>
												<tr>
													<th class="center">#</th>
													<th>Imovina</th>													
													<th>ID</th>
													<th>Prodavač</th>
													<th>Vrsta/Model</th>
													<th>Opis</th>
													<th>Najveća ponuda</th>
													<th>Ponudio</th>
													<th>Prodaja</th>
													

												</tr>
											</thead>

											<tbody>
									<?php
									include "baza.php";
									echo $vrsta . " " . $vrstapret . " " . $pretraga;
									if($vrsta == 4)
										$vrsta = "4,5";
									if($vrstapret == 1)
									{
										$szQuery = "SELECT * FROM `aukcija` WHERE VrstaImovine in(" . $vrsta .") AND IgracProdaje = '" . $pretraga ."'";
									}
									if($vrstapret == 2)
									{
										$szQuery = "SELECT * FROM `aukcija` WHERE VrstaImovine = " . $vrsta ." AND Ponuda < '" . $pretraga ."'";
									}
									if($vrstapret == 3)
									{
										$szQuery = "SELECT * FROM `aukcija` WHERE VrstaImovine = " . $vrsta ." AND id = '" . $pretraga ."'";
									}
									$qResult = mysql_query($szQuery) or die(mysql_error());
									$VehicleName = Array(
										400 => 'Landstalker', 401 => 'Bravura', 402 => 'Buffalo', 403 => 'Linerunner', 404 => 'Perenail', 405 => 'Sentinel', 406 => 'Dumper', 407 => 'Firetruck', 408 => 'Trashmaster', 409 => 'Stretch', 410 => 'Manana', 411 => 'Infernus', 412 => 'Voodoo', 413 => 'pony', 414 => 'Mule', 415 => 'Cheetah', 416 => 'Ambulance', 417 => 'Levetian', 418 => 'Boonbeam', 419 => 'Esperanto', 420 => 'Taxi', 421 => 'Washington', 422 => 'Bobcat', 423 => 'Mr whoopee', 424 => 'BF injection', 425 => 'Hunter', 426 => 'Premier', 427 => 'Enforcer', 428 => 'Securicar', 429 => 'Banshee', 430 => 'Predator', 431 => 'Bus', 432 => 'Rhino', 433 => 'Barracks', 434 => 'Hotknife', 435 => 'Artic trailer 1', 436 => 'Previon', 437 => 'Coach', 438 => 'Cabbie', 439 => 'Stallion', 440 => 'Rumpo', 441 => 'RC bandit',
										442 => 'Romero', 443 => 'Packer', 444 => 'Monster', 445 => 'Admiral', 446 => 'Squalo', 447 => 'Seasparrow', 448 => 'Pizza boy', 449 => 'Tram', 450 => 'Artic trailer 2', 451 => 'Turismo', 452 => 'Speeder', 453 => 'Reefer', 454 => 'Tropic', 455 => 'Flatbed', 456 => 'Yankee', 457 => 'Caddy', 458 => 'Solair', 459 => 'Top fun', 460 => 'Skimmer', 461 => 'PCJ 600', 462 => 'Faggio', 463 => 'Freeway', 464 => 'RC baron', 465 => 'RC raider', 466 => 'Glendale', 467 => 'Oceanic', 468 => 'Sanchez', 469 => 'Sparrow', 470 => 'Patriot', 471 => 'Quad', 472 => 'Coastgaurd', 473 => 'Dinghy', 474 => 'Hermes', 475 => 'Sabre', 476 => 'Rustler', 477 => 'ZR 350', 478 => 'Walton', 479 => 'Regina', 480 => 'Comet', 481 => 'BMX', 482 => 'Burriro', 483 => 'Camper', 484 => 'Marquis', 485 => 'Baggage', 
										486 => 'Dozer', 487 => 'Maverick', 488 => 'CNN maverick', 489 => 'Rancher', 490 => 'FBI rancher', 491 => 'Virgo', 492 => 'Greenwood', 493 => 'Jetmax', 494 => 'Hotring', 495 => 'Sandking', 496 => 'Blistac', 497 => 'Police maverick', 498 => 'Boxville', 499 => 'Benson', 500 => 'Mesa', 501 => 'RC goblin', 502 => 'Hotring a', 503 => 'Hotring b', 504 => 'Blood ring banger', 505 => 'Rancher (lure)', 506 => 'Super gt', 507 => 'Elegant', 508 => 'Journey', 509 => 'Bike', 510 => 'Mountain bike', 511 => 'Beagle', 512 => 'Cropduster', 513 => 'Stuntplane', 514 => 'Petrol', 515 => 'Roadtrain', 516 => 'Nebula', 517 => 'Majestic', 518 => 'Buccaneer', 519 => 'Shamal', 520 => 'Hydra', 521 => 'FCR 900', 522 => 'NRG 500', 523 => 'HPV 1000', 524 => 'Cement', 525 => 'Towtruck', 526 => 'Fortune',
										527 => 'Cadrona', 528 => 'FBI truck', 529 => 'Williard', 530 => 'Fork lift', 531 => 'Tractor', 532 => 'Combine', 533 => 'Feltzer', 534 => 'Remington', 535 => 'Slamvan', 536 => 'Blade', 537 => 'Freight', 538 => 'Streak', 539 => 'Vortex', 540 => 'Vincent', 541 => 'Bullet', 542 => 'Clover', 543 => 'Sadler', 544 => 'Firetruck la', 545 => 'Hustler', 546 => 'Intruder', 547 => 'Primo', 548 => 'Cargobob', 549 => 'Tampa', 550 => 'Sunrise', 551 => 'Merit', 552 => 'Utility van', 553 => 'Nevada', 554 => 'Yosemite', 555 => 'Windsor', 556 => 'Monster a', 557 => 'Monster b', 558 => 'Uranus', 559 => 'Jester', 560 => 'Sultan', 561 => 'Stratum', 562 => 'Elegy', 563 => 'Raindance', 564 => 'RC tiger', 565 => 'Flash', 566 => 'Tahoma', 567 => 'Savanna', 568 => 'Bandito', 569 => 'Freight flat',
										570 => 'Streak', 571 => 'Kart', 572 => 'Mower', 573 => 'Duneride', 574 => 'Sweeper', 575 => 'Broadway', 576 => 'Tornado', 577 => 'AT 400', 578 => 'DFT 30', 579 => 'Huntley', 580 => 'Stafford', 581 => 'BF 400', 582 => 'News van', 583 => 'Tug', 584 => 'Petrol tanker', 585 => 'Emperor', 586 => 'Wayfarer', 587 => 'Euros', 588 => 'Hotdog', 589 => 'Club', 590 => 'Freight box', 591 => 'Artic trailer 3', 592 => 'Andromada', 593 => 'Dodo', 594 => 'RC cam', 595 => 'Launch', 596 => 'Cop car ls', 597 => 'Cop car sf', 598 => 'Cop car lv', 599 => 'Ranger', 600 => 'Picador', 601 => 'Swat tank', 602 => 'Alpha', 603 => 'P', 604 => 'Glendale (damage)', 605 => 'Sadler (damage)', 606 => 'Bag box a', 607 => 'Bag box b', 608 => 'Stairs', 609 => 'Boxville (black)', 610 => 'Farm trailer', 611 => 'Utility van trailer'
										); 
									$idk = 0;
									
									while($rFetch = mysql_fetch_object($qResult))
									{
									
										$idk = $idk+1;
										if($rFetch->VrstaImovine == 1 )
										{
											$szQuery = "SELECT * FROM `houses` WHERE id = '" . $rFetch->IDImovine . "'";
											$qrResult = mysql_query($szQuery) or die(mysql_error());
											$aukFetch = mysql_fetch_object($qrResult);	
											
											echo'
												<tr>
													<td class="center">
													' . $idk . '	
													</td>
													<td class="center">
													Kuca
													</td>
													<td class="center">
														' . $rFetch->IDImovine . '
													</td>
													<td class="center">' . $rFetch->IgracProdaje . '</td>
													<td class="center">' . $aukFetch->type .'</td>
													<td class="center">' . $rFetch->Opis . '</td>
													<td class="center">' . $rFetch->Ponuda . '$</td>
													<td class="center">' . $rFetch->IgracPonudio . '</td>
													<td class="center"><a href="#openModal-auid=' . $rFetch->id . '"> <button class="btn btn-success"><i>Biduj</i></button></a></td>

												</tr>';
										echo '
										
										<div id="openModal-auid=' . $rFetch->id . '" class="modalDialog">
										<div>
											<a href="#close" title="Close" class="close">X</a>
											<h2>Bidovanje</h2>
											<br>
											<p style="color:#438EB9; font-weight:bold;">ID Kuće: <span style="color:black">' . $rFetch->IDImovine  . '</span></p>
											<p style="color:#438EB9; font-weight:bold;">Vrsta kuće: <span style="color:black">' . $aukFetch->type  . '</span></p>
											<p style="color:#438EB9; font-weight:bold;">Prodavac: <span style="color:black">' . $rFetch->IgracProdaje  . '</span></p>
											<p style="color:#438EB9; font-weight:bold;">Najveća ponuda:  <span style="color:black">' . $rFetch->Ponuda  . ' $</span></p>
											<p style="color:#438EB9; font-weight:bold;">Opis: <span style="color:black">' . $rFetch->Opis  . '</span></p>
											<p style="color:#438EB9; font-weight:bold;">Vaša ponuda:</p> <form action="ponudi.php?auid=' . $rFetch->id .'" method="POST"><fieldset><label class="block clearfix">
														<span class="block input-icon input-icon-right">
															<input type="text" name="bidovanje" class="form-control" placeholder="Unesite iznos" />															
														</span>
													</label>    
											<center><p><button type="submit" class="btn btn-success"><i>Ponudi</i></button></p></center></fieldset></form>
										</div>
										</div>
																			
										';
										
										
										}	
										
										if($rFetch->VrstaImovine == 2 )
										{
											$szQuery = "SELECT * FROM `apartments` WHERE id = '" . $rFetch->IDImovine . "'";
											$qrResult = mysql_query($szQuery) or die(mysql_error());
											$aukFetch = mysql_fetch_object($qrResult);	
											
											echo'
												<tr>
													<td class="center">
													' . $idk . '	
													</td>
													<td class="center">
													Stan
													</td>
													<td class="center">
														' . $rFetch->IDImovine . '
													</td>
													<td class="center">' . $rFetch->IgracProdaje . '</td>
													<td class="center">Stan</td>
													<td class="center">' . $rFetch->Opis . '</td>
													<td class="center">' . $rFetch->Ponuda . '$</td>
													<td class="center">' . $rFetch->IgracPonudio . '</td>
													<td class="center"><a href="#openModal-auid=' . $rFetch->id . '"> <button class="btn btn-success"><i>Biduj</i></button></a></td>

												</tr>';
										echo '
										
										<div id="openModal-auid=' . $rFetch->id . '" class="modalDialog">
										<div>
											<a href="#close" title="Close" class="close">X</a>
											<h2>Bidovanje</h2>
											<br>
											<p style="color:#438EB9; font-weight:bold;">ID Stana: <span style="color:black">' . $rFetch->IDImovine  . '</span></p>
											<p style="color:#438EB9; font-weight:bold;">Vrsta Stana: <span style="color:black">Stan</span></p>
											<p style="color:#438EB9; font-weight:bold;">Prodavac: <span style="color:black">' . $rFetch->IgracProdaje  . '</span></p>
											<p style="color:#438EB9; font-weight:bold;">Najveća ponuda:  <span style="color:black">' . $rFetch->Ponuda  . ' $</span></p>
											<p style="color:#438EB9; font-weight:bold;">Opis: <span style="color:black">' . $rFetch->Opis  . '</span></p>
											<p style="color:#438EB9; font-weight:bold;">Vaša ponuda:</p> <form action="ponudi.php?auid=' . $rFetch->id .'" method="POST"><fieldset><label class="block clearfix">
														<span class="block input-icon input-icon-right">
															<input type="text" name="bidovanje" class="form-control" placeholder="Unesite iznos" />															
														</span>
													</label>    
											<center><p><button type="submit" class="btn btn-success"><i>Ponudi</i></button></p></center></fieldset></form>
										</div>
										</div>
																			
										';
										}	
										
										if($rFetch->VrstaImovine == 3 )
										{
											$szQuery = "SELECT * FROM `cottages` WHERE id = '" . $rFetch->IDImovine . "'";
											$qrResult = mysql_query($szQuery) or die(mysql_error());
											$aukFetch = mysql_fetch_object($qrResult);	
											
											echo'
												<tr>
													<td class="center">
													' . $idk . '	
													</td>
													<td class="center">
													Vikendica
													</td>
													<td class="center">
														' . $rFetch->IDImovine . '
													</td>
													<td class="center">' . $rFetch->IgracProdaje . '</td>
													<td class="center">Vikendica</td>
													<td class="center">' . $rFetch->Opis . '</td>
													<td class="center">' . $rFetch->Ponuda . '$</td>
													<td class="center">' . $rFetch->IgracPonudio . '</td>
													<td class="center"><a href="#openModal-auid=' . $rFetch->id . '"> <button class="btn btn-success"><i>Biduj</i></button></a></td>

												</tr>';
										echo '
										
										<div id="openModal-auid=' . $rFetch->id . '" class="modalDialog">
										<div>
											<a href="#close" title="Close" class="close">X</a>
											<h2>Bidovanje</h2>
											<br>
											<p style="color:#438EB9; font-weight:bold;">ID Vikendice: <span style="color:black">' . $rFetch->IDImovine  . '</span></p>
											<p style="color:#438EB9; font-weight:bold;">Vrsta Vikendice: <span style="color:black">Vikendica</span></p>
											<p style="color:#438EB9; font-weight:bold;">Prodavac: <span style="color:black">' . $rFetch->IgracProdaje  . '</span></p>
											<p style="color:#438EB9; font-weight:bold;">Najveća ponuda:  <span style="color:black">' . $rFetch->Ponuda  . ' $</span></p>
											<p style="color:#438EB9; font-weight:bold;">Opis: <span style="color:black">' . $rFetch->Opis  . '</span></p>
											<p style="color:#438EB9; font-weight:bold;">Vaša ponuda:</p> <form action="ponudi.php?auid=' . $rFetch->id .'" method="POST"><fieldset><label class="block clearfix">
														<span class="block input-icon input-icon-right">
															<input type="text" name="bidovanje" class="form-control" placeholder="Unesite iznos" />															
														</span>
													</label>    
											<center><p><button type="submit" class="btn btn-success"><i>Ponudi</i></button></p></center></fieldset></form>
										</div>
										</div>
																			
										';
										}	
										
										if($rFetch->VrstaImovine == 4 )
										{
											$szQuery = "SELECT * FROM `vehicles` WHERE id = '" . $rFetch->IDImovine . "'";
											$qrResult = mysql_query($szQuery) or die(mysql_error());
											$aukFetch = mysql_fetch_object($qrResult);	
											
											echo'
												<tr>
													<td class="center">
													' . $idk . '	
													</td>
													<td class="center">
													Auto
													</td>
													<td class="center">
														' . $rFetch->IDImovine . '
													</td>
													<td class="center">' . $rFetch->IgracProdaje . '</td>
													<td class="center">' . $VehicleName[$aukFetch->model] .'</td>
													<td class="center">' . $rFetch->Opis . '</td>
													<td class="center">' . $rFetch->Ponuda . '$</td>
													<td class="center">' . $rFetch->IgracPonudio . '</td>
													<td class="center"><a href="#openModal-auid=' . $rFetch->id . '"> <button class="btn btn-success"><i>Biduj</i></button></a></td>

												</tr>';
										echo '
										
										<div id="openModal-auid=' . $rFetch->id . '" class="modalDialog">
										<div>
											<a href="#close" title="Close" class="close">X</a>
											<h2>Bidovanje</h2>
											<br>
											<p style="color:#438EB9; font-weight:bold;">ID Auta: <span style="color:black">' . $rFetch->IDImovine  . '</span></p>
											<p style="color:#438EB9; font-weight:bold;">Vrsta Auta: <span style="color:black">' . $VehicleName[$aukFetch->model]  . '</span></p>
											<p style="color:#438EB9; font-weight:bold;">Prodavac: <span style="color:black">' . $rFetch->IgracProdaje  . '</span></p>
											<p style="color:#438EB9; font-weight:bold;">Najveća ponuda:  <span style="color:black">' . $rFetch->Ponuda  . ' $</span></p>
											<p style="color:#438EB9; font-weight:bold;">Opis: <span style="color:black">' . $rFetch->Opis  . '</span></p>
											<p style="color:#438EB9; font-weight:bold;">Vaša ponuda:</p> <form action="ponudi.php?auid=' . $rFetch->id .'" method="POST"><fieldset><label class="block clearfix">
														<span class="block input-icon input-icon-right">
															<input type="text" name="bidovanje" class="form-control" placeholder="Unesite iznos" />															
														</span>
													</label>    
											<center><p><button type="submit" class="btn btn-success"><i>Ponudi</i></button></p></center></fieldset></form>
										</div>
										</div>
																			
										';
										}
										
										if($rFetch->VrstaImovine == 5 )
										{
											$szQuery = "SELECT * FROM `vehicles` WHERE id = '" . $rFetch->IDImovine . "'";
											$qrResult = mysql_query($szQuery) or die(mysql_error());
											$aukFetch = mysql_fetch_object($qrResult);	
											
											echo'
												<tr>
													<td class="center">
													' . $idk . '	
													</td>
													<td class="center">
													Auto 2
													</td>
													<td class="center">
														' . $rFetch->IDImovine . '
													</td>
													<td class="center">' . $rFetch->IgracProdaje . '</td>
													<td class="center">' . $VehicleName[$aukFetch->model] .'</td>
													<td class="center">' . $rFetch->Opis . '</td>
													<td class="center">' . $rFetch->Ponuda . '$</td>
													<td class="center">' . $rFetch->IgracPonudio . '</td>
													<td class="center"><a href="#openModal-auid=' . $rFetch->id . '"> <button class="btn btn-success"><i>Biduj</i></button></a></td>

												</tr>';
										echo '
										
										<div id="openModal-auid=' . $rFetch->id . '" class="modalDialog">
										<div>
											<a href="#close" title="Close" class="close">X</a>
											<h2>Bidovanje</h2>
											<br>
											<p style="color:#438EB9; font-weight:bold;">ID Auta: <span style="color:black">' . $rFetch->IDImovine  . '</span></p>
											<p style="color:#438EB9; font-weight:bold;">Vrsta Auta: <span style="color:black">' . $VehicleName[$aukFetch->model]  . '</span></p>
											<p style="color:#438EB9; font-weight:bold;">Prodavac: <span style="color:black">' . $rFetch->IgracProdaje  . '</span></p>
											<p style="color:#438EB9; font-weight:bold;">Najveća ponuda:  <span style="color:black">' . $rFetch->Ponuda  . ' $</span></p>
											<p style="color:#438EB9; font-weight:bold;">Opis: <span style="color:black">' . $rFetch->Opis  . '</span></p>
											<p style="color:#438EB9; font-weight:bold;">Vaša ponuda:</p> <form action="ponudi.php?auid=' . $rFetch->id .'" method="POST"><fieldset><label class="block clearfix">
														<span class="block input-icon input-icon-right">
															<input type="text" name="bidovanje" class="form-control" placeholder="Unesite iznos" />															
														</span>
													</label>    
											<center><p><button type="submit" class="btn btn-success"><i>Ponudi</i></button></p></center></fieldset></form>
										</div>
										</div>
																			
										';
										}
										
										if($rFetch->VrstaImovine == 6 )
										{
											$szQuery = "SELECT * FROM `motorcycles` WHERE id = '" . $rFetch->IDImovine . "'";
											$qrResult = mysql_query($szQuery) or die(mysql_error());
											$aukFetch = mysql_fetch_object($qrResult);	
											
											echo'
												<tr>
													<td class="center">
													' . $idk . '	
													</td>
													<td class="center">
													Motor
													</td>
													<td class="center">
														' . $rFetch->IDImovine . '
													</td>
													<td class="center">' . $rFetch->IgracProdaje . '</td>
													<td class="center">' . $VehicleName[$aukFetch->model] .'</td>
													<td class="center">' . $rFetch->Opis . '</td>
													<td class="center">' . $rFetch->Ponuda . '$</td>
													<td class="center">' . $rFetch->IgracPonudio . '</td>
													<td class="center"><a href="#openModal-auid=' . $rFetch->id . '"> <button class="btn btn-success"><i>Biduj</i></button></a></td>

												</tr>';
										echo '
										
										<div id="openModal-auid=' . $rFetch->id . '" class="modalDialog">
										<div>
											<a href="#close" title="Close" class="close">X</a>
											<h2>Bidovanje</h2>
											<br>
											<p style="color:#438EB9; font-weight:bold;">ID Motora: <span style="color:black">' . $rFetch->IDImovine  . '</span></p>
											<p style="color:#438EB9; font-weight:bold;">Vrsta Motora: <span style="color:black">' . $VehicleName[$aukFetch->model]  . '</span></p>
											<p style="color:#438EB9; font-weight:bold;">Prodavac: <span style="color:black">' . $rFetch->IgracProdaje  . '</span></p>
											<p style="color:#438EB9; font-weight:bold;">Najveća ponuda:  <span style="color:black">' . $rFetch->Ponuda  . ' $</span></p>
											<p style="color:#438EB9; font-weight:bold;">Opis: <span style="color:black">' . $rFetch->Opis  . '</span></p>
											<p style="color:#438EB9; font-weight:bold;">Vaša ponuda:</p> <form action="ponudi.php?auid=' . $rFetch->id .'" method="POST"><fieldset><label class="block clearfix">
														<span class="block input-icon input-icon-right">
															<input type="text" name="bidovanje" class="form-control" placeholder="Unesite iznos" />															
														</span>
													</label>    
											<center><p><button type="submit" class="btn btn-success"><i>Ponudi</i></button></p></center></fieldset></form>
										</div>
										</div>
																			
										';
										}
										
										if($rFetch->VrstaImovine == 7 )
										{
											$szQuery = "SELECT * FROM `boats` WHERE id = '" . $rFetch->IDImovine . "'";
											$qrResult = mysql_query($szQuery) or die(mysql_error());
											$aukFetch = mysql_fetch_object($qrResult);	
											
											echo'
												<tr>
													<td class="center">
													' . $idk . '	
													</td>
													<td class="center">
													Brod
													</td>
													<td class="center">
														' . $rFetch->IDImovine . '
													</td>
													<td class="center">' . $rFetch->IgracProdaje . '</td>
													<td class="center">' . $VehicleName[$aukFetch->model] .'</td>
													<td class="center">' . $rFetch->Opis . '</td>
													<td class="center">' . $rFetch->Ponuda . '$</td>
													<td class="center">' . $rFetch->IgracPonudio . '</td>
													<td class="center"><a href="#openModal-auid=' . $rFetch->id . '"> <button class="btn btn-success"><i>Biduj</i></button></a></td>

												</tr>';
										echo '
										
										<div id="openModal-auid=' . $rFetch->id . '" class="modalDialog">
										<div>
											<a href="#close" title="Close" class="close">X</a>
											<h2>Bidovanje</h2>
											<br>
											<p style="color:#438EB9; font-weight:bold;">ID Broda: <span style="color:black">' . $rFetch->IDImovine  . '</span></p>
											<p style="color:#438EB9; font-weight:bold;">Vrsta Broda: <span style="color:black">' . $VehicleName[$aukFetch->model]  . '</span></p>
											<p style="color:#438EB9; font-weight:bold;">Prodavac: <span style="color:black">' . $rFetch->IgracProdaje  . '</span></p>
											<p style="color:#438EB9; font-weight:bold;">Najveća ponuda:  <span style="color:black">' . $rFetch->Ponuda  . ' $</span></p>
											<p style="color:#438EB9; font-weight:bold;">Opis: <span style="color:black">' . $rFetch->Opis  . '</span></p>
											<p style="color:#438EB9; font-weight:bold;">Vaša ponuda:</p> <form action="ponudi.php?auid=' . $rFetch->id .'" method="POST"><fieldset><label class="block clearfix">
														<span class="block input-icon input-icon-right">
															<input type="text" name="bidovanje" class="form-control" placeholder="Unesite iznos" />															
														</span>
													</label>    
											<center><p><button type="submit" class="btn btn-success"><i>Ponudi</i></button></p></center></fieldset></form>
										</div>
										</div>
																			
										';
										}
										
										if($rFetch->VrstaImovine == 8 )
										{
											$szQuery = "SELECT * FROM `airplanes` WHERE id = '" . $rFetch->IDImovine . "'";
											$qrResult = mysql_query($szQuery) or die(mysql_error());
											$aukFetch = mysql_fetch_object($qrResult);	
											
											echo'
												<tr>
													<td class="center">
													' . $idk . '	
													</td>
													<td class="center">
													Letjelica
													</td>
													<td class="center">
														' . $rFetch->IDImovine . '
													</td>
													<td class="center">' . $rFetch->IgracProdaje . '</td>
													<td class="center">' . $VehicleName[$aukFetch->model] .'</td>
													<td class="center">' . $rFetch->Opis . '</td>
													<td class="center">' . $rFetch->Ponuda . '$</td>
													<td class="center">' . $rFetch->IgracPonudio . '</td>
													<td class="center"><a href="#openModal-auid=' . $rFetch->id . '"> <button class="btn btn-success"><i>Biduj</i></button></a></td>

												</tr>';
										echo '
										
										<div id="openModal-auid=' . $rFetch->id . '" class="modalDialog">
										<div>
											<a href="#close" title="Close" class="close">X</a>
											<h2>Bidovanje</h2>
											<br>
											<p style="color:#438EB9; font-weight:bold;">ID Aviona: <span style="color:black">' . $rFetch->IDImovine  . '</span></p>
											<p style="color:#438EB9; font-weight:bold;">Vrsta Aviona: <span style="color:black">' . $VehicleName[$aukFetch->model]  . '</span></p>
											<p style="color:#438EB9; font-weight:bold;">Prodavac: <span style="color:black">' . $rFetch->IgracProdaje  . '</span></p>
											<p style="color:#438EB9; font-weight:bold;">Najveća ponuda:  <span style="color:black">' . $rFetch->Ponuda  . ' $</span></p>
											<p style="color:#438EB9; font-weight:bold;">Opis: <span style="color:black">' . $rFetch->Opis  . '</span></p>
											<p style="color:#438EB9; font-weight:bold;">Vaša ponuda:</p> <form action="ponudi.php?auid=' . $rFetch->id .'" method="POST"><fieldset><label class="block clearfix">
														<span class="block input-icon input-icon-right">
															<input type="text" name="bidovanje" class="form-control" placeholder="Unesite iznos" />															
														</span>
													</label>    
											<center><p><button type="submit" class="btn btn-success"><i>Ponudi</i></button></p></center></fieldset></form>
										</div>
										</div>
																			
										';
										}
												
										
										
									}
									
									
									
									
									?>
											
												
												
										
										

												
											</tbody>
										</table>
										
										
									</div><!-- /.span -->
								</div><!-- /.row -->
								<!-- PAGE CONTENT BEGINS -->
								
							
					</div><!-- /.page-content -->
				</div>
			</div><!-- /.main-content -->
			
			</div>
														</div>

<?php include("footer.php"); ?>