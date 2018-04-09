<?php if(!isset($_COOKIE['sessid'])) header('Location: login.php'); ?>
<?php if(!isset($_COOKIE['user'])) header('Location: login.php'); ?>
<?php 
require "baza.php";
$szQuery = "SELECT * FROM `" . $_UsersTable ."` WHERE Playername = '" . $_COOKIE['user'] . "'";
$qResult = mysql_query($szQuery) or die(mysql_error());
$qFetch = mysql_fetch_object($qResult);
$rank = $qFetch->Admin;
if($qFetch->Vlasnik != 0)
	$rank = 1338;
if($qFetch->Skripter != 0)
	$rank = 1337;
if($rank < 1 ) header('Location: index.php'); ?>
<?php if(empty($_GET["sid"]))
		header("Location: korisnici.php");
	else $sid = $_GET["sid"]; 

	if($_GET["hash"] != "kk71930dl")
		header("Location: korisnici.php");
	
?>
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
							<li class="active">Admin panel</li>
							
							<li class="active">Uređivanje korisnika</li>
						</ul><!-- /.breadcrumb -->

						
					</div>

					<!-- /section:basics/content.breadcrumbs -->
					<div class="page-content">
			
						<div class="page-header">
							<h1>
								Admin panel
								<small>
									<i class="ace-icon fa fa-angle-double-right"></i>
									Uređivanje korisnika
								</small>
							</h1>
						</div><!-- /.page-header -->
						
						<div class="row">
							<div class="col-xs-12">
								<!-- PAGE CONTENT BEGINS -->
							<?php 
							$szQuery = "SELECT * FROM `" . $_UsersTable ."` WHERE ID = '" . $sid . "'";
							$qResult = mysql_query($szQuery) or die(mysql_error());
							$qFetch = mysql_fetch_object($qResult);
							$link = "uredjivanje.php?sid=" . $sid ."&hash=kk71930dl";
							?>
								<div class="row">

									<div class="col-xs-3">

											<div class="space-6"></div>

											<form action="<?php echo $link ?>" method="post">
												<fieldset> 
													<label class="block clearfix">
														<span class="block input-icon input-icon-right">
														Korisničko ime:
															<input type="text" name="user" class="form-control" value="<?php echo $qFetch->Playername ?>" />															
														</span>
													</label>

													E-mail
													<label class="block clearfix">
														<span class="block input-icon input-icon-right">
															<input type="text" name="Email" class="form-control" value="<?php echo $qFetch->Email ?>" />
												
														</span>
													</label>
													Spol:
													<label class="block clearfix">
														<span class="block input-icon input-icon-right">
															<input type="text" name="Spol" class="form-control" value="<?php echo $qFetch->Pol ?>" />
													
														</span>
													</label>
													
													Država:
													<label class="block clearfix">
														<span class="block input-icon input-icon-right">
															<input type="text" name="Drzava" class="form-control" value="<?php echo $qFetch->Drzava ?>" />
															
														</span>
													</label>
													
													<label class="block clearfix">
														<span class="block input-icon input-icon-right">
														Novac:
															<input type="text" name="NovacDzep" class="form-control" value="<?php echo $qFetch->NovacDzep ?>" />															
														</span>
													</label>
													
													<label class="block clearfix">
														<span class="block input-icon input-icon-right">
														Admin:
															<input type="text" name="Admin" class="form-control" value="<?php echo $qFetch->Admin ?>" />															
														</span>
													</label>
													
									
													
													<label class="block clearfix">
														<span class="block input-icon input-icon-right">
														Level:
															<input type="text" name="Level" class="form-control" value="<?php echo $qFetch->Level ?>" />															
														</span>
													</label>
													
													<label class="block clearfix">
														<span class="block input-icon input-icon-right">
														GameMaster:
															<input type="text" name="GameMaster" class="form-control" value="<?php echo $qFetch->GameMaster ?>" />															
														</span>
													</label>
													
													<label class="block clearfix">
														<span class="block input-icon input-icon-right">
														Skin:
															<input type="text" name="Skin" class="form-control" value="<?php echo $qFetch->Skin ?>" />															
														</span>
													</label>
													
												
													
													<label class="block clearfix">
														<span class="block input-icon input-icon-right">
														Lider:
															<input type="text" name="Lider" class="form-control" value="<?php echo $qFetch->Lider ?>" />															
														</span>
													</label>
													
													<label class="block clearfix">
														<span class="block input-icon input-icon-right">
														Član:
															<input type="text" name="Clan" class="form-control" value="<?php echo $qFetch->Clan ?>" />															
														</span>
													</label>
													
													<label class="block clearfix">
														<span class="block input-icon input-icon-right">
														Rank:
															<input type="text" name="Rank" class="form-control" value="<?php echo $qFetch->Rank ?>" />															
														</span>
													</label>
													
											
													
													<label class="block clearfix">
														<span class="block input-icon input-icon-right">
														Novac banka:
															<input type="text" name="NovacBanka" class="form-control" value="<?php echo $qFetch->NovacBanka ?>" />															
														</span>
													</label>
													
													
													
													
													
													
											</div>
											
											<div class="col-xs-3">
											
											<label class="block clearfix">
														<span class="block input-icon input-icon-right">
														Respekti:
															<input type="text" name="Respekti" class="form-control" value="<?php echo $qFetch->Respekti ?>" />															
														</span>
													</label>

									
													
													<label class="block clearfix">
														<span class="block input-icon input-icon-right">
														Droga:
															<input type="text" name="Droga" class="form-control" value="<?php echo $qFetch->Droga ?>" />															
														</span>
													</label>
													
													<label class="block clearfix">
														<span class="block input-icon input-icon-right">
														Mats:
															<input type="text" name="Mats" class="form-control" value="<?php echo $qFetch->Mats ?>" />															
														</span>
													</label>
													
													
													
													<label class="block clearfix">
														<span class="block input-icon input-icon-right">
														Sati igre:
															<input type="text" name="SatiIgre" class="form-control" value="<?php echo $qFetch->SatiIgre ?>" />															
														</span>
													</label>
													
													<label class="block clearfix">
														<span class="block input-icon input-icon-right">
														Iznos rate:
															<input type="text" name="IznosRate" class="form-control" value="<?php echo $qFetch->IznosRate ?>" />															
														</span>
													</label>
													
													<label class="block clearfix">
														<span class="block input-icon input-icon-right">
														Iznos kredita:
															<input type="text" name="IznosKredita" class="form-control" value="<?php echo $qFetch->iznosKredita ?>" />															
														</span>
													</label>
													
													<label class="block clearfix">
														<span class="block input-icon input-icon-right">
														Preostalo za otplatu:
															<input type="text" name="PreostaloZaOtplatu" class="form-control" value="<?php echo $qFetch->PreostaloZaOtplatu ?>" />															
														</span>
													</label>
													
													<label class="block clearfix">
														<span class="block input-icon input-icon-right">
														A Dozvola:
															<input type="text" name="ADozvola" class="form-control" value="<?php echo $qFetch->ADozvola ?>" />															
														</span>
													</label>
													
													<label class="block clearfix">
														<span class="block input-icon input-icon-right">
														Kamion dozvola:
															<input type="text" name="KamionDozvola" class="form-control" value="<?php echo $qFetch->KamionDozvola ?>" />															
														</span>
													</label>
													
													<label class="block clearfix">
														<span class="block input-icon input-icon-right">
														Avion dozvola:
															<input type="text" name="AvionDozvola" class="form-control" value="<?php echo $qFetch->AvionDozvola ?>" />															
														</span>
													</label>
													
													<label class="block clearfix">
														<span class="block input-icon input-icon-right">
														Motor dozvola:
															<input type="text" name="MotorDozvola" class="form-control" value="<?php echo $qFetch->MotorDozvola ?>" />															
														</span>
													</label>
													
													<label class="block clearfix">
														<span class="block input-icon input-icon-right">
														Brod dozvola:
															<input type="text" name="BrodDozvola" class="form-control" value="<?php echo $qFetch->BrodDozvola ?>" />															
														</span>
													</label>
													
													
													
													<label class="block clearfix">
														<span class="block input-icon input-icon-right">
														Posedovanje firme:
															<input type="text" name="PosedovanjeFirme" class="form-control" value="<?php echo $qFetch->PosedovanjeFirme ?>" />															
														</span>
													</label>
													
												
													
													
													
													
													
												
											
											</div>

											<div class="col-xs-3">
											
											<label class="block clearfix">
														<span class="block input-icon input-icon-right">
														Borbeni stil:
															<input type="text" name="BorbeniStil" class="form-control" value="<?php echo $qFetch->BorbeniStil ?>" />															
														</span>
													</label>

													
													<label class="block clearfix">
														<span class="block input-icon input-icon-right">
														Posao:
															<input type="text" name="Posao" class="form-control" value="<?php echo $qFetch->Posao ?>" />															
														</span>
													</label>
													
													<label class="block clearfix">
														<span class="block input-icon input-icon-right">
														Posedovanje kuce:
															<input type="text" name="PosedovanjeKuce" class="form-control" value="<?php echo $qFetch->PosedovanjeKuce ?>" />															
														</span>
													</label>
													
													<label class="block clearfix">
														<span class="block input-icon input-icon-right">
														Posedovanje stana:
															<input type="text" name="PosedovanjeStana" class="form-control" value="<?php echo $qFetch->PosedovanjeStana ?>" />															
														</span>
													</label>
													
													<label class="block clearfix">
														<span class="block input-icon input-icon-right">
														Posedovanje vikendice:
															<input type="text" name="PosedovanjeVikendice" class="form-control" value="<?php echo $qFetch->PosedovanjeVikendice ?>" />															
														</span>
													</label>
													
													<label class="block clearfix">
														<span class="block input-icon input-icon-right">
														Posedovanje auta:
															<input type="text" name="PosedovanjeAuta" class="form-control" value="<?php echo $qFetch->PosedovanjeAuta ?>" />															
														</span>
													</label>
													
													<label class="block clearfix">
														<span class="block input-icon input-icon-right">
														Posedovanje auta2:
															<input type="text" name="PosedovanjeAuta2" class="form-control" value="<?php echo $qFetch->PosedovanjeAuta2 ?>" />															
														</span>
													</label>
													
													<label class="block clearfix">
														<span class="block input-icon input-icon-right">
														Posedovanje motora:
															<input type="text" name="PosedovanjeMotora" class="form-control" value="<?php echo $qFetch->PosedovanjeMotora ?>" />															
														</span>
													</label>
													
													<label class="block clearfix">
														<span class="block input-icon input-icon-right">
														Posedovanje broda:
															<input type="text" name="PosedovanjePlovila" class="form-control" value="<?php echo $qFetch->PosedovanjePlovila ?>" />															
														</span>
													</label>
													
													<label class="block clearfix">
														<span class="block input-icon input-icon-right">
														Posedovanje bicikla:
															<input type="text" name="PosedovanjeBicikla" class="form-control" value="<?php echo $qFetch->PosedovanjeBicikla ?>" />															
														</span>
													</label>
													
													<label class="block clearfix">
														<span class="block input-icon input-icon-right">
														Posedovanje aviona:
															<input type="text" name="PosedovanjeAviona" class="form-control" value="<?php echo $qFetch->PosedovanjeAviona ?>" />															
														</span>
													</label>
													
													<label class="block clearfix">
														<span class="block input-icon input-icon-right">
														Organizacija ugovor:
															<input type="text" name="OrgUgovor" class="form-control" value="<?php echo $qFetch->OrgUgovor ?>" />															
														</span>
													</label>
													
													
													
													
											
											</div>
											<div class="col-xs-3">
											
											<label class="block clearfix">
														<span class="block input-icon input-icon-right">
														Diploma:
															<input type="text" name="Diploma" class="form-control" value="<?php echo $qFetch->Diploma ?>" />															
														</span>
													</label>
													
													<label class="block clearfix">
														<span class="block input-icon input-icon-right">
														Warn:
															<input type="text" name="Warn" class="form-control" value="<?php echo $qFetch->Warn ?>" />															
														</span>
													</label>
													
													<label class="block clearfix">
														<span class="block input-icon input-icon-right">
														Bankovni račun:
															<input type="text" name="BankovniRacun" class="form-control" value="<?php echo $qFetch->BankovniRacun ?>" />															
														</span>
													</label>
													
													<label class="block clearfix">
														<span class="block input-icon input-icon-right">
														Posao ugovor:
															<input type="text" name="Posaougovor" class="form-control" value="<?php echo $qFetch->Posaougovor ?>" />															
														</span>
													</label>
													
													<label class="block clearfix">
														<span class="block input-icon input-icon-right">
														Promoter:
															<input type="text" name="Promoter" class="form-control" value="<?php echo $qFetch->Promoter ?>" />															
														</span>
													</label>
													
													<label class="block clearfix">
														<span class="block input-icon input-icon-right">
														VIP:
															<input type="text" name="Vip" class="form-control" value="<?php echo $qFetch->Vip ?>" />															
														</span>
													</label>
													
													<label class="block clearfix">
														<span class="block input-icon input-icon-right">
														Skripter:
															<input type="text" name="Skripter" class="form-control" value="<?php echo $qFetch->Skripter ?>" />															
														</span>
													</label>
													
													<label class="block clearfix">
														<span class="block input-icon input-icon-right">
														Dva vozila:
															<input type="text" name="DvaV" class="form-control" value="<?php echo $qFetch->DvaV ?>" />															
														</span>
													</label>
													
													<label class="block clearfix">
														<span class="block input-icon input-icon-right">
														Zlato:
															<input type="text" name="Zlato" class="form-control" value="<?php echo $qFetch->Zlato ?>" />															
														</span>
													</label>
													
														<label class="block clearfix">
														<span class="block input-icon input-icon-right">
														Gun dozvola:
															<input type="text" name="GunDozvola" class="form-control" value="<?php echo $qFetch->GunDozvola ?>" />															
														</span>
													</label>
													
													<label class="block clearfix">
														<span class="block input-icon input-icon-right">
														Mobilni:
															<input type="text" name="Mobilni" class="form-control" value="<?php echo $qFetch->Mobilni ?>" />															
														</span>
													</label>
													
													<label class="block clearfix">
														<span class="block input-icon input-icon-right">
														Kartica:
															<input type="text" name="Kartica" class="form-control" value="<?php echo $qFetch->Kartica ?>" />															
														</span>
													</label>

													
													
													
											
											
													<div class="space"></div>

													<div class="clearfix">
														

														<button type="submit" class="width-35 pull-right btn btn-sm btn-success">
															<i class="ace-icon fa fa-key"></i>
															<span class="bigger-110">Spremi</span>
														</button>
													</div>

													<div class="space-4"></div>
													</fieldset>
												
											</form>
												</div>
											<?php if($_GET['pgreska'] == 1) echo '<center><p style="color: red; font-weight: bold;"> To ime se već koristi!</p></center>';
												  if($_GET['pgreska'] == 2) echo '<center><p style="color: red; font-weight: bold;"> Passwordi se ne podudaraju!</p></center>';
												  if($_GET['pgreska'] == 3) echo '<center><p style="color: red; font-weight: bold;"> Password mora biti duzi od 6 karaktera!</p></center>';
												  if($_GET['pgreska'] == 4) echo '<center><p style="color: red; font-weight: bold;"> Morate koristiti RolePlay ime (Ime_Prezime)!</p></center>';
												  if($_GET['pgreska'] == 6) echo '<center><p style="color: red; font-weight: bold;"> Morate unjeti MAIL!</p></center>';
												  if($_GET['pgreska'] == 5) echo '<center><p style="color: green; font-weight: bold;"> Uspješno ste se registrovali, sačekajte da Vam administrator odobri akaunt!</p></center>';
												  
											
											
											
											?>


									</div><!-- /.span -->

								</div><!-- /.row -->



							

					</div><!-- /.page-content -->

				</div>

			</div><!-- /.main-content -->

			

			</div>

														</div>



<?php include("footer.php"); ?>