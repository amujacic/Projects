<?php if(!isset($_COOKIE['sessid'])) header('Location: login.php'); ?>
<?php if(!isset($_COOKIE['user'])) header('Location: login.php'); ?>
<?php include("header.php") ?>
<?php
include "baza.php";
						$szQuery = "SELECT * FROM `" . $_UsersTable ."` WHERE Playername = '" . $_COOKIE['user'] . "'";
						$qResult = mysql_query($szQuery) or die(mysql_error());
						$qFetch = mysql_fetch_object($qResult);
$aAuto1 = $qFetch->PosedovanjeAuta;
$aAuto2 = $qFetch->PosedovanjeAuta2;
if($aAuto1 == -1)
	$Auto1 = "<span style='color:#FF0000'>NE</span>";
else $Auto1 = "<span style='color:#00FF00'>DA</span>";
if($aAuto2 == -1)
	$Auto2 = "<span style='color:#FF0000'>NE</span>";
else $Auto2 = "<span style='color:#00FF00'>DA</span>";

$bBicikl = $qFetch->PosedovanjeBicikla;
$bBrod = $qFetch->PosedovanjePlovila;
$lLetjelica = $qFetch->PosedovanjeAviona;
if($lLetjelica == -1)
	$Letjelica = "<span style='color:#FF0000'>NE</span>";
else $Letjelica = "<span style='color:#00FF00'>DA</span>";
if($bBicikl == -1)
	$Bicikl = "<span style='color:#FF0000'>NE</span>";
else $Bicikl = "<span style='color:#00FF00'>DA</span>";
if($bBrod == -1)
	$Brod = "<span style='color:#FF0000'>NE</span>";
else $Brod = "<span style='color:#00FF00'>DA</span>";

$mMotor = $qFetch->PosedovanjeMotora;
if($mMotor == -1)
	$Motor = "<span style='color:#FF0000'>NE</span>";
else $Motor = "<span style='color:#00FF00'>DA</span>";

$kKuca = $qFetch->PosedovanjeKuce;
$fFirma = $qFetch->PosedovanjeFirme;
$sStan = $qFetch->PosedovanjeStana;
$vVikendica = $qFetch->PosedovanjeVikendice;
if($kKuca == -1)
	$Kuca = "<span style='color:#FF0000'>NE</span>";
else $Kuca = "<span style='color:#00FF00'>DA</span>";
if($fFirma == -1)
	$Firma = "<span style='color:#FF0000'>NE</span>";
else $Firma = "<span style='color:#00FF00'>DA</span>";
if($sStan == -1)
	$Stan = "<span style='color:#FF0000'>NE</span>";
else $Stan = "<span style='color:#00FF00'>DA</span>";
if($vVikendica == -1)
	$Vikendica = "<span style='color:#FF0000'>NE</span>";
else $Vikendica = "<span style='color:#00FF00'>DA</span>";
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
							<li class="active">Imovina</li>
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
									Imovina
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
												<div class="dd2-content">Nepokretna imovina</div>
											

													<ol class="dd-list">
<?php
if($kKuca != -1)
{
$skuca = "<img width='300px'  src='Kuce/" . $kKuca . ".jpg' />";		
}
else $skuca = "Nema";

if($sStan != -1)
{
$sastanovi = "<img width='300px'  src='Stanovi/" . $sStan . ".jpg' />";		
}
else $sastanovi = "Nema";


if($vVikendica != -1)
{
$svikendica = "<img width='300px' src='Vikendice/" . $vVikendica . ".jpg' />";		
}
else $svikendica = "Nema";




?>														

														<li class="dd-item" data-id="4">
															<div class="dd-handle">
																<span class="orange">Kuca:</span>
																<span class="grey">
																	&nbsp; <?php echo $Kuca ?>
																</span>
															</div>
														</li>
													
													<ol class="dd-list">
														

														<li class="dd-item" data-id="4">
															<div class="dd-handle">
																<span class="orange">Kuca:</span>
																<span class="grey">
																	&nbsp; <?php echo $skuca ?>
																</span>
															</div>
														</li>
													</ol>
														
														<li class="dd-item" data-id="4">
															<div class="dd-handle">
																<span class="orange">Stan:</span>
																<span class="grey">
																	&nbsp; <?php echo $Stan ?>
																</span>
															</div>
														</li>
													
													<ol class="dd-list">
														

														<li class="dd-item" data-id="4">
															<div class="dd-handle">
																<span class="orange">Stan:</span>
																<span class="grey">
																	&nbsp; <?php echo $sastan ?>
																</span>
															</div>
														</li>
													</ol>
													
													<li class="dd-item" data-id="4">
															<div class="dd-handle">
																<span class="orange">Vikendica:</span>
																<span class="grey">
																	&nbsp; <?php echo $Vikendica ?>
																</span>
															</div>
														</li>
													
													<ol class="dd-list">
														

														<li class="dd-item" data-id="4">
															<div class="dd-handle">
																<span class="orange">Vikendica:</span>
																<span class="grey">
																	&nbsp; <?php echo $svikendica ?>
																</span>
															</div>
														</li>
													</ol>
													
													<li class="dd-item" data-id="4">
															<div class="dd-handle">
																<span class="orange">Firma:</span>
																<span class="grey">
																	&nbsp; <?php echo $Firma ?>
																</span>
															</div>
														</li>
													
													<ol class="dd-list">
														

														<li class="dd-item" data-id="4">
															<div class="dd-handle">
																<span class="orange">ID Firme:</span>
																<span class="grey">
																	&nbsp; <?php echo $fFirma ?>
																</span>
															</div>
														</li>
													</ol>
														
													</ol>
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
												<div class="dd2-content">Pokretna imovina</div>
											

													<ol class="dd-list">
														
													<li class="dd-item" data-id="4">
															<div class="dd-handle">
																<span class="orange">Auto:</span>
																<span class="grey">
																	&nbsp; <?php echo $Auto1 ?>
																</span>
															</div>
														</li>
													
													<ol class="dd-list">
														
<?php
if($aAuto1 != -1)
{
$autQuery = "SELECT * FROM `vehicles` WHERE id = '" . $aAuto1 . "'";
$autResult = mysql_query($autQuery) or die(mysql_error());
$autFetch = mysql_fetch_object($autResult);	
$sauto1 = "<img src='Vozila/Vehicle_" . $autFetch->model . ".jpg' />";	
	
}
else $sauto1 = "Nema";

if($aAuto2 != -1)
{
$autQuery = "SELECT * FROM `vehicles` WHERE id = '" . $aAuto2 . "'";
$autResult = mysql_query($autQuery) or die(mysql_error());
$autFetch = mysql_fetch_object($autResult);	
$sauto2 = "<img src='Vozila/Vehicle_" . $autFetch->model . ".jpg' />";	
	
}
else $sauto2 = "Nema";

if($bBrod != -1)
{
$autQuery = "SELECT * FROM `boats` WHERE id = '" . $bBrod . "'";
$autResult = mysql_query($autQuery) or die(mysql_error());
$autFetch = mysql_fetch_object($autResult);	
$sbrod = "<img src='Vozila/Vehicle_" . $autFetch->model . ".jpg' />";	
	
}
else $sbrod = "Nema";


if($mMotor != -1)
{
$autQuery = "SELECT * FROM `motorcycles` WHERE id = '" . $mMotor . "'";
$autResult = mysql_query($autQuery) or die(mysql_error());
$autFetch = mysql_fetch_object($autResult);	
$smotor = "<img src='Vozila/Vehicle_" . $autFetch->model . ".jpg' />";	
	
}
else $smotor = "Nema";


if($lLetjelica != -1)
{
$autQuery = "SELECT * FROM `airplanes` WHERE id = '" . $lLetjelica . "'";
$autResult = mysql_query($autQuery) or die(mysql_error());
$autFetch = mysql_fetch_object($autResult);	
$sletjelica = "<img src='Vozila/Vehicle_" . $autFetch->model . ".jpg' />";	
	
}
else $sletjelica = "Nema";



?>
														<li class="dd-item" data-id="4">
															<div class="dd-handle">
																<span class="orange">Auto 1:</span>
																<span class="grey">
																	&nbsp; <?php echo $sauto1 ?>
																</span>
															</div>
														</li>
														
														<li class="dd-item" data-id="4">
															<div class="dd-handle">
																<span class="orange">Auto 2:</span>
																<span class="grey">
																	&nbsp; <?php echo $sauto2 ?>
																</span>
															</div>
														</li>
													</ol>
														
													<li class="dd-item" data-id="4">
															<div class="dd-handle">
																<span class="orange">Motor:</span>
																<span class="grey">
																	&nbsp; <?php echo $Motor ?>
																</span>
															</div>
														</li>
													
													<ol class="dd-list">
														

														<li class="dd-item" data-id="4">
															<div class="dd-handle">
																<span class="orange">Motor:</span>
																<span class="grey">
																	&nbsp; <?php echo $smotor ?>
																</span>
															</div>
														</li>
													</ol>
													
													<li class="dd-item" data-id="4">
															<div class="dd-handle">
																<span class="orange">Letjelica:</span>
																<span class="grey">
																	&nbsp; <?php echo $Letjelica ?>
																</span>
															</div>
														</li>
													
													<ol class="dd-list">
														

														<li class="dd-item" data-id="4">
															<div class="dd-handle">
																<span class="orange">Letjelica:</span>
																<span class="grey">
																	&nbsp; <?php echo $sletjelica ?>
																</span>
															</div>
														</li>
													</ol>
													<li class="dd-item" data-id="4">
															<div class="dd-handle">
																<span class="orange">Brod:</span>
																<span class="grey">
																	&nbsp; <?php echo $Brod ?>
																</span>
															</div>
														</li>
													
													<ol class="dd-list">
														

														<li class="dd-item" data-id="4">
															<div class="dd-handle">
																<span class="orange">Brod:</span>
																<span class="grey">
																	&nbsp; <?php echo $sbrod ?>
																</span>
															</div>
														</li>
													</ol>

														
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