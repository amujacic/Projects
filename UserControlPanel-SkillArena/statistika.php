<?php if(!isset($_COOKIE['sessid'])) header('Location: login.php'); ?>
<?php if(!isset($_COOKIE['user'])) header('Location: login.php'); ?>
<?php include("header.php") ?>
<?php
include "baza.php";
						$szQuery = "SELECT * FROM `" . $_UsersTable ."` WHERE Playername = '" . $_COOKIE['user'] . "'";
						$qResult = mysql_query($szQuery) or die(mysql_error());
						$qFetch = mysql_fetch_object($qResult);
$Level = $qFetch->Level;
$dDrzava = $qFetch->Drzava;
if($dDrzava == 2)
	$Drzava = "Bosna i Hercegovina";
if($dDrzava == 5)
	$Drzava = "Hrvatska";
if($dDrzava == 1)
	$Drzava = "Srbija";
	if($dDrzava == 3)
	$Drzava = "Kosovo (Srbija, Pokrajina)";
if($dDrzava == 4)
	$Drzava = "Crna Gora";
if($dDrzava == 6)
	$Drzava = "Makedonija";
	if($dDrzava == 7)
	$Drzava = "Slovenija";
	if($dDrzava == 8)
	$Drzava = "Ostalo";
$Godine = $qFetch->Godine;
$Novac = $qFetch->NovacDzep;
$Banka = $qFetch->NovacBanka;
$Skin = 'skinovi/';
$Skin .= $qFetch->Skin;
$Skin .= '.jpg';
$sSpol = $qFetch->Pol;
if($sSpol == 1)
	$Spol = "Musko";
else $Spol = "Zensko";
$Exp = $qFetch->Respekti;
$RExp = $Level*2 + 2;
$Sati = $qFetch->SatiIgre;
$Upozorenja = $qFetch->Warn;
$dDonator = $qFetch->Vip;
if($dDonator == 0)
	$Donator = "Nema";
else if($dDonator == 1)
	$Donator = "Donator";
else if($dDonator == 2)
	$Donator = "Bronzani Donator";
else if($dDonator == 3)
	$Donator = "Srebrn Donator";
else if($dDonator == 4)
	$Donator = "Zlatni Donator";
$Wanted = 0;
$pPosao = $qFetch->Posao;
if($pPosao == 0)
	$Posao = "Nezaposlen";
else if($pPosao == 1)
		$Posao = "Bus vozač";
else if($pPosao == 2)
		$Posao = "Kosač trave";
else if($pPosao == 3)
		$Posao = "Mehaničar";
else if($pPosao == 4)
		$Posao = "Poštar";
else if($pPosao == 5)
		$Posao = "Komunalac";
else if($pPosao == 6)
		$Posao = "Građevinar";
else if($pPosao == 7)
		$Posao = "Bolničar";
else if($pPosao == 8)
		$Posao = "Grobar";
else if($pPosao == 9)
		$Posao = "Džeparoš";
else if($pPosao == 10)
		$Posao = "Farmer";
else if($pPosao == 11)
		$Posao = "Mašinovođa";
else if($pPosao == 12)
		$Posao = "Dostavljač";
else if($pPosao == 13)
		$Posao = "Kamiondžija";
else if($pPosao == 14)
		$Posao = "Pilot";
else if($pPosao == 15)
		$Posao = "Električar";
else if($pPosao == 16)
		$Posao = "Vodoinstalater";
else if($pPosao == 17)
		$Posao = "Rudar";
else if($pPosao == 18)
		$Posao = "Drvoseča";
else if($pPosao == 19)
		$Posao = "Ribar";

$Ugovor = $qFetch->Posaougovor;
$OUgovor = $qFetch->OrgUgovor;
$Rank = $qFetch->Rank;
if($Rank == 6)
	$Rank = "Lider";
$oOrganizacija = $qFetch->Clan;
if($oOrganizacija == 0)
	$Org = "Civil";
else if($oOrganizacija == 1)
	$Org = "Policija";
else if($oOrganizacija == 2)
	$Org = "The Vinci Family";
else if($oOrganizacija == 3)
	$Org = "Black Dragon Triads";
else if($oOrganizacija == 4)
	$Org = "Groove Street Family";
else if($oOrganizacija == 5)
	$Org = "Ballas";
else if($oOrganizacija == 6)
	$Org = "Novinari";
else if($oOrganizacija == 7)
	$Org = "Marshall";
else if($oOrganizacija == 8)
	$Org = "Parking servis";
else if($oOrganizacija == 9)
	$Org = "Condor";
else if($oOrganizacija == 10)
	$Org = "Hitman";
else if($oOrganizacija == 11)
	$Org = "Blue Lagoon";
else if($oOrganizacija == 12)
	$Org = "LCN";
else if($oOrganizacija == 13)
	$Org = "Da Naga Boys";
else if($oOrganizacija == 14)
	$Org = "Taxi";
else if($oOrganizacija == 15)
	$Org = "Yakuza";
else if($oOrganizacija == 16)
	$Org = "F.B.I.";
else if($oOrganizacija == 17)
	$Org = "Black Cobra Corporation";
else if($oOrganizacija == 18)
	$Org = "Vatrogasci";
else if($oOrganizacija == 19)
	$Org = "DR";
else if($oOrganizacija == 20)
	$Org = "Russian Mafia";
else if($oOrganizacija == 21)
	$Org = "RP organizacija";
else if($oOrganizacija == 22)
	$Org = "RP organizacija";
$Wanted = $qFetch->Wanted;
$dDiploma = $qFetch->Diploma;
if($dDiploma == 0)
	$Diploma = "Nema";
else $Diploma = "Ima";
$Zlato = $qFetch->Zlato;
$Telefon = $qFetch->Mobilni;
$Kredit = $qFetch->MobKredit;
$Droga = $qFetch->Droga;
$Materijali = $qFetch->Mats;
$aAuto1 = $qFetch->PosedovanjeAuta;
$aAuto2 = $qFetch->PosedovanjeAuta2;
?>
			<!-- /section:basics/sidebar -->
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
								<a href="#">Naslovna</a>
							</li>

							<li>
								<a href="#">Korisnik</a>
							</li>
							<li class="active">Statistika</li>
						</ul><!-- /.breadcrumb -->

						

						<!-- /section:basics/content.searchbox -->
					</div>

					<!-- /section:basics/content.breadcrumbs -->
					<div class="page-content">
						
						<div class="page-header">
							<h1>
								Korisnik
								<small>
									<i class="ace-icon fa fa-angle-double-right"></i>
									Statistika
								</small>
							</h1>
						</div><!-- /.page-header -->

						<div class="row">
							<div class="col-xs-12">
								<!-- PAGE CONTENT BEGINS -->
								<div class="row">
									<div class="col-sm-6">
										<div class="dd" id="nestable">
											<ol class="dd-list">
												
												<li class="dd-item" data-id="2">
												<div class="dd-handle dd2-handle">
														<i class="normal-icon ace-icon fa fa-signal orange bigger-130"></i>

														<i class="drag-icon ace-icon fa fa-arrows bigger-125"></i>
													</div>
												<div class="dd2-content">OSNOVNI PODACI</div>
											

													<ol class="dd-list">
														

														<li class="dd-item" data-id="4">
															<div class="dd-handle">
																<span class="orange">Level:</span>
																<span class="grey">
																	&nbsp; <?php echo $Level ?>
																</span>
															</div>
														</li>
														
														<li class="dd-item" data-id="4">
															<div class="dd-handle">
																<span class="orange">Respekti:</span>
																<span class="grey">
																	&nbsp; <?php echo $Exp; echo "/"; echo $Level*2+2; ?>
																</span>
															</div>
														</li>
														<li class="dd-item" data-id="4">
															<div class="dd-handle">
																<span class="orange">Donator rank:</span>
																<span class="grey">
																	&nbsp; <?php echo $Donator ?>
																</span>
															</div>
														</li>
														<li class="dd-item" data-id="4">
															<div class="dd-handle">
																<span class="orange">Sati igre:</span>
																<span class="grey">
																	&nbsp; <?php echo $Sati ?>
																</span>
															</div>
														</li>

														<li class="dd-item" data-id="4">
															<div class="dd-handle">
																<span class="orange">Upozorenja:</span>
																<span class="grey">
																	&nbsp; <?php echo $Upozorenja ?>
																</span>
															</div>
														</li>
														<li class="dd-item" data-id="4">
															<div class="dd-handle">
																<span class="orange">Trazeni level:</span>
																<span class="grey">
																	&nbsp; <?php echo $Wanted ?>
																</span>
															</div>
														</li>
														
														<li class="dd-item" data-id="4">
															<div class="dd-handle">
																<span class="orange">Diploma:</span>
																<span class="grey">
																	&nbsp; <?php echo $Diploma ?>
																</span>
															</div>
														</li>

														
													</ol>
												</li>

												
											</ol>
											<br></br>
											<ol class="dd-list">
												
												<li class="dd-item" data-id="2">
												<div class="dd-handle dd2-handle">
														<i class="normal-icon ace-icon fa fa-signal orange bigger-130"></i>

														<i class="drag-icon ace-icon fa fa-arrows bigger-125"></i>
													</div>
												<div class="dd2-content">Torba</div>
											

													<ol class="dd-list">
														

														<li class="dd-item" data-id="4">
															<div class="dd-handle">
																<span class="orange">Materijali:</span>
																<span class="grey">
																	&nbsp; <?php echo $Materijali ?>$
																</span>
															</div>
														</li>
														<li class="dd-item" data-id="4">
															<div class="dd-handle">
																<span class="orange">Droga:</span>
																<span class="grey">
																	&nbsp; <?php echo $Droga ?>$
																</span>
															</div>
														</li>
														<li class="dd-item" data-id="4">
															<div class="dd-handle">
																<span class="orange">Broj telefona:</span>
																<span class="grey">
																	&nbsp; <?php echo $Telefon ?>
																</span>
															</div>
														</li>
														<li class="dd-item" data-id="4">
															<div class="dd-handle">
																<span class="orange">Kredit telefona:</span>
																<span class="grey">
																	&nbsp; <?php echo $Kredit ?>
																</span>
															</div>
														</li>
														
														

														

														
													</ol>
												</li>

												
											</ol>
										</div>
									</div>

									<div class="vspace-16-sm"></div>

									<div class="col-sm-6">
										<div class="dd dd-draghandle">
											<ol class="dd-list">
												
												<li class="dd-item" data-id="2">
												<div class="dd-handle dd2-handle">
														<i class="normal-icon ace-icon fa fa-signal orange bigger-130"></i>

														<i class="drag-icon ace-icon fa fa-arrows bigger-125"></i>
													</div>
												<div class="dd2-content">LIČNA KARTA</div>
											

													<ol class="dd-list">
														

														<li class="dd-item" data-id="4">
															<div class="dd-handle">
																<span class="orange">Spol:</span>
																<span class="grey">
																	&nbsp; <?php echo $Spol ?>
																</span>
															</div>
														</li>
														<li class="dd-item" data-id="4">
															<div class="dd-handle">
																<span class="orange">Drzava:</span>
																<span class="grey">
																	&nbsp; <?php echo $Drzava ?>
																</span>
															</div>
														</li>
														<li class="dd-item" data-id="4">
															<div class="dd-handle">
																<span class="orange">Godine:</span>
																<span class="grey">
																	&nbsp; <?php echo $Godine ?>
																</span>
															</div>
														</li>
														
														
														<li class="dd-item" data-id="4">
															<div class="dd-handle">
																<span class="orange">Organizacija:</span>
																<span class="grey">
																	&nbsp; <?php echo $Org ?>
																</span>
															</div>
														</li>
														<li class="dd-item" data-id="4">
															<div class="dd-handle">
																<span class="orange">Organizacija ugovor:</span>
																<span class="grey">
																	&nbsp; <?php echo $OUgovor ?>
																</span>
															</div>
														</li>
														<li class="dd-item" data-id="4">
															<div class="dd-handle">
																<span class="orange">Rank:</span>
																<span class="grey">
																	&nbsp; <?php echo $Rank ?>
																</span>
															</div>
														</li>
														
<li class="dd-item" data-id="4">
															<div class="dd-handle">
																<span class="orange">Posao:</span>
																<span class="grey">
																	&nbsp; <?php echo $Posao ?>
																</span>
															</div>
														</li>
														<li class="dd-item" data-id="4">
															<div class="dd-handle">
																<span class="orange">Ugovor:</span>
																<span class="grey">
																	&nbsp; <?php echo $Ugovor ?>
																</span>
															</div>
														</li>
														

														
													</ol>
												</li>

												
											</ol><br></br>
											<ol class="dd-list">
												
												<li class="dd-item" data-id="2">
												<div class="dd-handle dd2-handle">
														<i class="normal-icon ace-icon fa fa-signal orange bigger-130"></i>

														<i class="drag-icon ace-icon fa fa-arrows bigger-125"></i>
													</div>
												<div class="dd2-content">Finansije</div>
											

													<ol class="dd-list">
														

														<li class="dd-item" data-id="4">
															<div class="dd-handle">
																<span class="orange">Novac:</span>
																<span class="grey">
																	&nbsp; <?php echo $Novac ?>$
																</span>
															</div>
														</li>
														<li class="dd-item" data-id="4">
															<div class="dd-handle">
																<span class="orange">Banka:</span>
																<span class="grey">
																	&nbsp; <?php echo $Banka ?>$
																</span>
															</div>
														</li>
														<li class="dd-item" data-id="4">
															<div class="dd-handle">
																<span class="orange">Zlato:</span>
																<span class="grey">
																	&nbsp; <?php echo $Zlato ?>
																</span>
															</div>
														</li>
														
														

														

														
													</ol>
												</li>

												
											</ol>
										</div>
									</div>
								</div><!-- PAGE CONTENT ENDS -->
							</div><!-- /.col -->
						</div><!-- /.row -->
					</div><!-- /.page-content -->
				</div>
			</div><!-- /.main-content -->
<?php include("footer.php") ?>