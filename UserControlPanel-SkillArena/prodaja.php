<?php if(!isset($_COOKIE['sessid'])) header('Location: login.php'); ?>
<?php if(!isset($_COOKIE['user'])) header('Location: login.php'); ?>
<?php include("header.php"); ?>

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
							
							<li class="active">Prodaja imovine</li>
						</ul><!-- /.breadcrumb -->

						
					</div>

					<!-- /section:basics/content.breadcrumbs -->
					<div class="page-content">
			
						<div class="page-header">
							<h1>
								Korisnik
								<small>
									<i class="ace-icon fa fa-angle-double-right"></i>
									Prodaja imovine
								</small>
							</h1>
						</div><!-- /.page-header -->
						
						<div class="row">
							<div class="col-xs-12">
								<!-- PAGE CONTENT BEGINS -->
								<center><p style="color: red; font-weight: bold;"> NAPOMENA: Pri prodaji imovine državi plaća vam se pola vrijednosti!</p></center>
								<div class="row">
									<div class="col-xs-12">
									<?php if($_GET['greska'] == "da") echo '<center><p style="color: red; font-weight: bold;">GREŠKA!!</p></center>';
									if($_GET['greska'] == "ne") echo '<center><p style="color: green; font-weight: bold;"> Uspješno ste prodali imovinu, pare su vam legle na bankovni račun!</p></center>';
									?>
										<table id="simple-table" class="table table-striped table-bordered table-hover">
											<thead>
												<tr>
													<th class="center">#</th>
													<th>Imovina</th>
													<th>Posjeduje</th>
													<th>ID</th>
													<th>Vrsta/Model</th>

													<th>
													
														Vrijednost
													</th>
													<th>Prodaja</th>
													

												</tr>
											</thead>

											<tbody>
									<?php
									include "baza.php";
									$szQuery = "SELECT * FROM `" . $_UsersTable ."` WHERE Playername = '" . $_COOKIE['user'] . "'";
									$qResult = mysql_query($szQuery) or die(mysql_error());
									$nFetch = mysql_fetch_object($qResult);
									$kucaid = $nFetch->PosedovanjeKuce;
									$stanid = $nFetch->PosedovanjeStana;
									$vikendicaid = $nFetch->PosedovanjeVikendice;
									$autoid = $nFetch->PosedovanjeAuta;
									$auto2id = $nFetch->PosedovanjeAuta2;
									$brodid = $nFetch->PosedovanjePlovila;
									$letjelicaid = $nFetch->PosedovanjeAviona;
									$motorid = $nFetch->PosedovanjeMotora;
									$kprodaj = '<a href=""><button class="btn btn-grey"><i>Prodaj</i></button></a>';
									$sprodaj = '<a href=""><button class="btn btn-grey"><i>Prodaj</i></button></a>';
									$vprodaj = '<a href=""><button class="btn btn-grey"><i>Prodaj</i></button></a>';
									$a1prodaj = '<a href=""><button class="btn btn-grey"><i>Prodaj</i></button></a>';
									$a2prodaj = '<a href=""><button class="btn btn-grey"><i>Prodaj</i></button></a>';
									$bprodaj = '<a href=""><button class="btn btn-grey"><i>Prodaj</i></button></a>';
									$mprodaj = '<a href=""><button class="btn btn-grey"><i>Prodaj</i></button></a>';
									$lprodaj = '<a href=""><button class="btn btn-grey"><i>Prodaj</i></button></a>';
									 
									if($kucaid != -1)
									{
									$szQuery = "SELECT * FROM `houses` WHERE id = '" . $kucaid . "'";
									$qResult = mysql_query($szQuery) or die(mysql_error());
									$kFetch = mysql_fetch_object($qResult);	
									$kprodaj = '<a href="prodaj.php?vid=1&sid=' . $nFetch->PosedovanjeKuce . '"><button class="btn btn-success"><i>Prodaj</i></button></a>';
									}
									if($stanid != -1)
									{
									$szQuery = "SELECT * FROM `apartments` WHERE id = '" . $stanid . "'";
									$qResult = mysql_query($szQuery) or die(mysql_error());
									$sFetch = mysql_fetch_object($qResult);	
									$sprodaj = '<a href="prodaj.php?vid=2&sid=' . $nFetch->PosedovanjeStana . '"><button class="btn btn-success"><i>Prodaj</i></button></a>';
									}
									if($vikendicaid != -1)
									{
									$szQuery = "SELECT * FROM `cottages` WHERE id = '" . $vikendicaid . "'";
									$qResult = mysql_query($szQuery) or die(mysql_error());
									$vFetch = mysql_fetch_object($qResult);	
									$vprodaj = '<a href="prodaj.php?vid=3&sid=' . $nFetch->PosedovanjeVikendice . '"><button class="btn btn-success"><i>Prodaj</i></button></a>';
									}
									if($autoid != -1)
									{
									$szQuery = "SELECT * FROM `vehicles` WHERE id = '" . $autoid . "'";
									$qResult = mysql_query($szQuery) or die(mysql_error());
									$aFetch = mysql_fetch_object($qResult);	
									$a1prodaj = '<a href="prodaj.php?vid=4&sid=' . $nFetch->PosedovanjeAuta . '"><button class="btn btn-success"><i>Prodaj</i></button></a>';
									}
									if($auto2id != -1)
									{
									$szQuery = "SELECT * FROM `vehicles` WHERE id = '" . $auto2id . "'";
									$qResult = mysql_query($szQuery) or die(mysql_error());
									$a2Fetch = mysql_fetch_object($qResult);	
									$a2prodaj = '<a href="prodaj.php?vid=5&sid=' . $nFetch->PosedovanjeAuta2 . '"><button class="btn btn-success"><i>Prodaj</i></button></a>';
									}
									if($motorid != -1)
									{
									$szQuery = "SELECT * FROM `motorcycles` WHERE id = '" . $motorid . "'";
									$qResult = mysql_query($szQuery) or die(mysql_error());
									$mFetch = mysql_fetch_object($qResult);	
									$mprodaj = '<a href="prodaj.php?vid=6&sid=' . $nFetch->PosedovanjeMotora . '"><button class="btn btn-success"><i>Prodaj</i></button></a>';
									}
									if($brodid != -1)
									{
									$szQuery = "SELECT * FROM `boats` WHERE id = '" . $brodid . "'";
									$qResult = mysql_query($szQuery) or die(mysql_error());
									$bFetch = mysql_fetch_object($qResult);	
									$bprodaj = '<a href="prodaj.php?vid=7&sid=' . $nFetch->PosedovanjePlovila . '"><button class="btn btn-success"><i>Prodaj</i></button></a>';
									}
									if($letjelicaid != -1)
									{
									$szQuery = "SELECT * FROM `airplanes` WHERE id = '" . $letjelicaid . "'";
									$qResult = mysql_query($szQuery) or die(mysql_error());
									$lFetch = mysql_fetch_object($qResult);	
									$lprodaj = '<a href="prodaj.php?vid=1&sid=' . $nFetch->PosedovanjeAviona . '"><button class="btn btn-success"><i>Prodaj</i></button></a>';
									}
									
									$VehicleName = Array(
										400 => 'Landstalker', 401 => 'Bravura', 402 => 'Buffalo', 403 => 'Linerunner', 404 => 'Perenail', 405 => 'Sentinel', 406 => 'Dumper', 407 => 'Firetruck', 408 => 'Trashmaster', 409 => 'Stretch', 410 => 'Manana', 411 => 'Infernus', 412 => 'Voodoo', 413 => 'pony', 414 => 'Mule', 415 => 'Cheetah', 416 => 'Ambulance', 417 => 'Levetian', 418 => 'Boonbeam', 419 => 'Esperanto', 420 => 'Taxi', 421 => 'Washington', 422 => 'Bobcat', 423 => 'Mr whoopee', 424 => 'BF injection', 425 => 'Hunter', 426 => 'Premier', 427 => 'Enforcer', 428 => 'Securicar', 429 => 'Banshee', 430 => 'Predator', 431 => 'Bus', 432 => 'Rhino', 433 => 'Barracks', 434 => 'Hotknife', 435 => 'Artic trailer 1', 436 => 'Previon', 437 => 'Coach', 438 => 'Cabbie', 439 => 'Stallion', 440 => 'Rumpo', 441 => 'RC bandit',
										442 => 'Romero', 443 => 'Packer', 444 => 'Monster', 445 => 'Admiral', 446 => 'Squalo', 447 => 'Seasparrow', 448 => 'Pizza boy', 449 => 'Tram', 450 => 'Artic trailer 2', 451 => 'Turismo', 452 => 'Speeder', 453 => 'Reefer', 454 => 'Tropic', 455 => 'Flatbed', 456 => 'Yankee', 457 => 'Caddy', 458 => 'Solair', 459 => 'Top fun', 460 => 'Skimmer', 461 => 'PCJ 600', 462 => 'Faggio', 463 => 'Freeway', 464 => 'RC baron', 465 => 'RC raider', 466 => 'Glendale', 467 => 'Oceanic', 468 => 'Sanchez', 469 => 'Sparrow', 470 => 'Patriot', 471 => 'Quad', 472 => 'Coastgaurd', 473 => 'Dinghy', 474 => 'Hermes', 475 => 'Sabre', 476 => 'Rustler', 477 => 'ZR 350', 478 => 'Walton', 479 => 'Regina', 480 => 'Comet', 481 => 'BMX', 482 => 'Burriro', 483 => 'Camper', 484 => 'Marquis', 485 => 'Baggage', 
										486 => 'Dozer', 487 => 'Maverick', 488 => 'CNN maverick', 489 => 'Rancher', 490 => 'FBI rancher', 491 => 'Virgo', 492 => 'Greenwood', 493 => 'Jetmax', 494 => 'Hotring', 495 => 'Sandking', 496 => 'Blistac', 497 => 'Police maverick', 498 => 'Boxville', 499 => 'Benson', 500 => 'Mesa', 501 => 'RC goblin', 502 => 'Hotring a', 503 => 'Hotring b', 504 => 'Blood ring banger', 505 => 'Rancher (lure)', 506 => 'Super gt', 507 => 'Elegant', 508 => 'Journey', 509 => 'Bike', 510 => 'Mountain bike', 511 => 'Beagle', 512 => 'Cropduster', 513 => 'Stuntplane', 514 => 'Petrol', 515 => 'Roadtrain', 516 => 'Nebula', 517 => 'Majestic', 518 => 'Buccaneer', 519 => 'Shamal', 520 => 'Hydra', 521 => 'FCR 900', 522 => 'NRG 500', 523 => 'HPV 1000', 524 => 'Cement', 525 => 'Towtruck', 526 => 'Fortune',
										527 => 'Cadrona', 528 => 'FBI truck', 529 => 'Williard', 530 => 'Fork lift', 531 => 'Tractor', 532 => 'Combine', 533 => 'Feltzer', 534 => 'Remington', 535 => 'Slamvan', 536 => 'Blade', 537 => 'Freight', 538 => 'Streak', 539 => 'Vortex', 540 => 'Vincent', 541 => 'Bullet', 542 => 'Clover', 543 => 'Sadler', 544 => 'Firetruck la', 545 => 'Hustler', 546 => 'Intruder', 547 => 'Primo', 548 => 'Cargobob', 549 => 'Tampa', 550 => 'Sunrise', 551 => 'Merit', 552 => 'Utility van', 553 => 'Nevada', 554 => 'Yosemite', 555 => 'Windsor', 556 => 'Monster a', 557 => 'Monster b', 558 => 'Uranus', 559 => 'Jester', 560 => 'Sultan', 561 => 'Stratum', 562 => 'Elegy', 563 => 'Raindance', 564 => 'RC tiger', 565 => 'Flash', 566 => 'Tahoma', 567 => 'Savanna', 568 => 'Bandito', 569 => 'Freight flat',
										570 => 'Streak', 571 => 'Kart', 572 => 'Mower', 573 => 'Duneride', 574 => 'Sweeper', 575 => 'Broadway', 576 => 'Tornado', 577 => 'AT 400', 578 => 'DFT 30', 579 => 'Huntley', 580 => 'Stafford', 581 => 'BF 400', 582 => 'News van', 583 => 'Tug', 584 => 'Petrol tanker', 585 => 'Emperor', 586 => 'Wayfarer', 587 => 'Euros', 588 => 'Hotdog', 589 => 'Club', 590 => 'Freight box', 591 => 'Artic trailer 3', 592 => 'Andromada', 593 => 'Dodo', 594 => 'RC cam', 595 => 'Launch', 596 => 'Cop car ls', 597 => 'Cop car sf', 598 => 'Cop car lv', 599 => 'Ranger', 600 => 'Picador', 601 => 'Swat tank', 602 => 'Alpha', 603 => 'P', 604 => 'Glendale (damage)', 605 => 'Sadler (damage)', 606 => 'Bag box a', 607 => 'Bag box b', 608 => 'Stairs', 609 => 'Boxville (black)', 610 => 'Farm trailer', 611 => 'Utility van trailer'
										); 
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
									
									?>
											
												<tr>
													<td class="center">
													1	
													</td>
													<td class="center">
													Kuca
													</td>
													<td class="center">
														<?php if($nFetch->PosedovanjeKuce == -1) echo "<span style='color:red'>Ne</span>"; else echo "<span style='color:green'>Da</span>";  ?>
													</td>
													<td class="center">
														<?php echo $nFetch->PosedovanjeKuce ?>
													</td>
													<td class="center"><?php if($nFetch->PosedovanjeKuce == -1) echo "<span style='color:red'>Nema</span>"; else echo $kFetch->type;  ?></td>
													<td class="center"><?php if($nFetch->PosedovanjeKuce == -1) echo "<span style='color:red'>Nema</span>"; else echo $kFetch->price . "$";  ?></td>
													<td class="center"><?php echo $kprodaj ?></td>

												</tr>
												
												<tr>
													<td class="center">
													2	
													</td>
													<td class="center">
													Stan
													</td>
													<td class="center">
														<?php if($nFetch->PosedovanjeStana == -1) echo "<span style='color:red'>Ne</span>"; else echo "<span style='color:green'>Da</span>";  ?>
													</td>
													<td class="center">
														<?php echo $nFetch->PosedovanjeStana ?>
													</td>
													<td class="center"><?php if($nFetch->PosedovanjeStana == -1) echo "<span style='color:red'>Nema</span>"; else echo "Stan";  ?></td>
													<td class="center"><?php if($nFetch->PosedovanjeStana == -1) echo "<span style='color:red'>Nema</span>"; else echo $sFetch->price . "$";  ?></td>
													<td class="center"><?php echo $sprodaj ?></td>

												</tr>
												
												<tr>
													<td class="center">
													3	
													</td>
													<td class="center">
													Vikendica
													</td>
													<td class="center">
														<?php if($nFetch->PosedovanjeVikendice == -1) echo "<span style='color:red'>Ne</span>"; else echo "<span style='color:green'>Da</span>";  ?>
													</td>
													<td class="center">
														<?php echo $nFetch->PosedovanjeVikendice ?>
													</td>
													<td class="center"><?php if($nFetch->PosedovanjeVikendice == -1) echo "<span style='color:red'>Nema</span>"; else echo "Vikendica";  ?></td>
													<td class="center"><?php if($nFetch->PosedovanjeVikendice == -1) echo "<span style='color:red'>Nema</span>"; else echo $vFetch->price . "$";  ?></td>
													<td class="center"><?php echo $vprodaj ?></td>

												</tr>
												
												<tr>
													<td class="center">
													4	
													</td>
													<td class="center">
													Auto
													</td>
													<td class="center">
														<?php if($nFetch->PosedovanjeAuta == -1) echo "<span style='color:red'>Ne</span>"; else echo "<span style='color:green'>Da</span>";  ?>
													</td>
													<td class="center">
														<?php echo $nFetch->PosedovanjeAuta ?>
													</td>
													<td class="center"><?php if($nFetch->PosedovanjeAuta == -1) echo "<span style='color:red'>Nema</span>"; else echo $VehicleName[$aFetch->model];  ?></td>
													<td class="center"><?php if($nFetch->PosedovanjeAuta == -1) echo "<span style='color:red'>Nema</span>"; else echo $VehiclePrice[$aFetch->model] . "$";  ?></td>
													<td class="center"><?php echo $a1prodaj ?></td>

												</tr>
												
												<tr>
													<td class="center">
													5	
													</td>
													<td class="center">
													Auto 2
													</td>
													<td class="center">
														<?php if($nFetch->PosedovanjeAuta2 == -1) echo "<span style='color:red'>Ne</span>"; else echo "<span style='color:green'>Da</span>";  ?>
													</td>
													<td class="center">
														<?php echo $nFetch->PosedovanjeAuta2 ?>
													</td>
													<td class="center"><?php if($nFetch->PosedovanjeAuta2 == -1) echo "<span style='color:red'>Nema</span>"; else echo $VehicleName[$a2Fetch->model];  ?></td>
													<td class="center"><?php if($nFetch->PosedovanjeAuta2 == -1) echo "<span style='color:red'>Nema</span>"; else echo $VehiclePrice[$a2Fetch->model] . "$";  ?></td>
													<td class="center"><?php echo $a2prodaj ?></td>

												</tr>
												
												<tr>
													<td class="center">
													6	
													</td>
													<td class="center">
													Motor
													</td>
													<td class="center">
														<?php if($nFetch->PosedovanjeMotora == -1) echo "<span style='color:red'>Ne</span>"; else echo "<span style='color:green'>Da</span>";  ?>
													</td>
													<td class="center">
														<?php echo $nFetch->PosedovanjeMotora ?>
													</td>
													<td class="center"><?php if($nFetch->PosedovanjeMotora == -1) echo "<span style='color:red'>Nema</span>"; else echo $VehicleName[$mFetch->model];  ?></td>
													<td class="center"><?php if($nFetch->PosedovanjeMotora == -1) echo "<span style='color:red'>Nema</span>"; else echo $mFetch->price . "$";  ?></td>
													<td class="center"><?php echo $mprodaj ?></td>

												</tr>
												
												<tr>
													<td class="center">
													7	
													</td>
													<td class="center">
													Brod
													</td>
													<td class="center">
														<?php if($nFetch->PosedovanjePlovila == -1) echo "<span style='color:red'>Ne</span>"; else echo "<span style='color:green'>Da</span>";  ?>
													</td>
													<td class="center">
														<?php echo $nFetch->PosedovanjePlovila ?>
													</td>
													<td class="center"><?php if($nFetch->PosedovanjePlovila == -1) echo "<span style='color:red'>Nema</span>"; else echo $VehicleName[$bFetch->model];  ?></td>
													<td class="center"><?php if($nFetch->PosedovanjePlovila == -1) echo "<span style='color:red'>Nema</span>"; else echo $bFetch->price . "$";  ?></td>
													<td class="center"><?php echo $bprodaj ?></td>

												</tr>
												
												<tr>
													<td class="center">
													8	
													</td>
													<td class="center">
													Letjelica
													</td>
													<td class="center">
														<?php if($nFetch->PosedovanjeAviona == -1) echo "<span style='color:red'>Ne</span>"; else echo "<span style='color:green'>Da</span>";  ?>
													</td>
													<td class="center">
														<?php echo $nFetch->PosedovanjeAviona ?>
													</td>
													<td class="center"><?php if($nFetch->PosedovanjeAviona == -1) echo "<span style='color:red'>Nema</span>"; else echo $VehicleName[$lFetch->model];  ?></td>
													<td class="center"><?php if($nFetch->PosedovanjeAviona == -1) echo "<span style='color:red'>Nema</span>"; else echo $lFetch->price . "$";  ?></td>
													<td class="center"><?php echo $lprodaj ?></td>

												</tr>
										

												
											</tbody>
										</table>
									</div><!-- /.span -->
								</div><!-- /.row -->

							
					</div><!-- /.page-content -->
				</div>
			</div><!-- /.main-content -->
			
			</div>
														</div>

<?php include("footer.php"); ?>