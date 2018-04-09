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
		$sid = 1;
	else $sid = $_GET["sid"]; ?>
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
							<li class="active">Admin Panel</li>
							
							<li class="active">Odobravanje akaunta</li>
						</ul><!-- /.breadcrumb -->

						
					</div>

					<!-- /section:basics/content.breadcrumbs -->
					<div class="page-content">
			
						<div class="page-header">
							<h1>
								Admin Panel
								<small>
									<i class="ace-icon fa fa-angle-double-right"></i>
									Odobravanje akaunta
								</small>
							</h1>
						</div><!-- /.page-header -->
						
						<div class="row">
							<div class="col-xs-12">
								<!-- PAGE CONTENT BEGINS -->
								<div class="row">
									<div class="col-xs-12">
										<table id="simple-table" class="table table-striped table-bordered table-hover">
											<thead>
												<tr>
													<th class="center">#</th>
													<th>Ime</th>
													<th>Drzava</th>
													<th>Godine</th>
													<th>Spol</th>
													<th>Email</th>
													<th>Odobrenje</th>
													
													

												</tr>
											</thead>

											<tbody>
											<?php
											include "baza.php";
											$nQuery = "SELECT * FROM `" . $_UsersTable ."`";
											$nResult = mysql_query($nQuery) or die(mysql_error());											
											$maksimalna = mysql_num_rows($nResult);
											$limit1 = $sid*25;
											$strprije = $sid-1;
											$limit2 = $strprije*25;
											$nQuery = "SELECT * FROM `" . $_UsersTable ."` WHERE odobren = 0 ORDER BY id DESC LIMIT " . $limit2 ."," . $limit1 ."";
											$nResult = mysql_query($nQuery) or die(mysql_error());									
											$id = $limit2;
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
	$Drzava = "Makedonija";
	if($dDrzava == 8)
	$Drzava = "Ostalo";

$sSpol = $qFetch->Pol;
if($sSpol == 1)
	$Spol = "Musko";
else $Spol = "Zensko";
											while($nFetch = mysql_fetch_object($nResult))
											{
																				
												
										$id = $id+1;
										$linker = "odobri.php?sid=" . $nFetch->ID ."&hash=kk71930dl";
												
											echo'
												<tr>
													<td class="center">
													' .$id. '	
													</td>
													<td class="center">
													' .$nFetch->Playername . '	
													</td>

													<td class="center">
														' .$Drzava . '
													</td>
													<td class="center">' .$nFetch->Godine .'</td>
																								
													<td class="center">
														' .$Spol . '
													</td>
													
													<td class="center">
														' .$nFetch->Email . '
													</td>
													
													<td class="center">
													<a href="' . $linker . '"> <button class="btn btn-success">
													<i>Odobri</i>
													</button></a>
													</td>

												</tr>';
											}
												
												?>

												
											</tbody>
										</table>
										<center>
										<?php $prethodna = $sid-1;
												$iduca = $sid+1;
												if($prethodna == 0)
													$prethodna = 1;
												
												if($iduca*25 > $maksimalna)
													$iduca = $sid;
										?>
										<a href="oakk.php?sid=<?php echo $prethodna ?>"> <button class="btn btn-danger">
							<i>Prethodna stranica</i>
						</button></a>
						<a href="oakk.php?sid=<?php echo $iduca ?>"><button class="btn btn-success">
							<i>Naredna stranica</i>
						</button></a></center>
									</div><!-- /.span -->
								</div><!-- /.row -->

							
					</div><!-- /.page-content -->
				</div>
			</div><!-- /.main-content -->
			
			</div>
														</div>

<?php include("footer.php"); ?>