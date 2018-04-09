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
							<li class="active">Server</li>
							
							<li class="active">Organizacije</li>
						</ul><!-- /.breadcrumb -->

						
					</div>

					<!-- /section:basics/content.breadcrumbs -->
					<div class="page-content">
			
						<div class="page-header">
							<h1>
								Server
								<small>
									<i class="ace-icon fa fa-angle-double-right"></i>
									Organizacije
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
													<th class="center">ID</th>
													<th>Naziv organizacije</th>
													<th>Lideri</th>
													<th>Broj članova</th>
													
													<th>Članovi</th>
													

												</tr>
											</thead>

											<tbody>
					<?php


for($id=1; $id<=20; $id=$id+1)
{
$oOrganizacija = $id;
if($oOrganizacija == 1)
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

											include "baza.php";
											$nQuery = "SELECT * FROM `" . $_UsersTable ."` WHERE Clan='" . $id . "'";
											$nResult = mysql_query($nQuery) or die(mysql_error());											
											$brclanova = mysql_num_rows($nResult);
											
											$nQuery = "SELECT * FROM `" . $_UsersTable ."` WHERE Lider='" . $id . "'";
											$nResult = mysql_query($nQuery) or die(mysql_error());
											$lideri = "";
											while($nFetch = mysql_fetch_object($nResult))
											{
											$lideri .= $nFetch->Playername;
											$lideri .= "<br>";
											}
?>
												<tr>
													<td class="center">
													<?php echo $id ?>
													</td>
													<td class="center">
													<?php echo $Org ?>
													</td>
													<td class="center">
														<?php echo $lideri  ?>
													</td>
													<td class="center">
														<?php echo $brclanova ?>
													</td>
													<td class="center"><a href="clanovi.php?org=<?php echo $id ?>"> <button class="btn btn-success">
							<i>Članovi</i>
						</button></a></td>

												</tr>
												
												
												
<?php } ?>
										

												
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