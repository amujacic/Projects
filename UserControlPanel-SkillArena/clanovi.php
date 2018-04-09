<?php if(empty($_GET["org"]))
			header("Location: organizacije.php");
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
							<li class="active">Server</li>
							
							<li class="active">Članovi organizacije</li>
						</ul><!-- /.breadcrumb -->

						
					</div>

					<!-- /section:basics/content.breadcrumbs -->
					<div class="page-content">
			
						<div class="page-header">
							<h1>
								Server
								<small>
									<i class="ace-icon fa fa-angle-double-right"></i>
									Članovi organizacije
								</small>
							</h1>
						</div><!-- /.page-header -->
						
						<div class="row">
							<div class="col-xs-12">
								<!-- PAGE CONTENT BEGINS -->
								<div class="row">
									<div class="col-xs-12">
									<?php
											include "baza.php";
											$oOrganizacija = $_GET["org"];
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
											
									
									?>
									<h2> <?php echo $Org ?> - Članovi </h2>
										<table id="simple-table" class="table table-striped table-bordered table-hover">
											<thead>
												<tr>
													<th class="center">#</th>
													<th>Ime igrača</th>
												
													<th>Level</th>
													
													<th>Rank</th>

													<th>
														<i class="ace-icon fa fa-clock-o bigger-110 hidden-480"></i>
														Last Online
													</th>
													<th>Online</th>
													

												</tr>
											</thead>

											<tbody>
											<?php
											$nQuery = "SELECT * FROM `" . $_UsersTable ."` WHERE Clan = '" . $oOrganizacija . "' ORDER BY Rank DESC";
											$nResult = mysql_query($nQuery) or die(mysql_error());									
											$id = 0;
											while($nFetch = mysql_fetch_object($nResult))
											{
											
												
												$phpdate = strtotime( $nFetch->LastSeen );
												$datum = date( 'd.m.Y. H:m:s', $phpdate );
										$id = $id+1;
										
												if($nFetch->Online == 1)
													$ison = '<span class="label label-sm label-success">Online</span>';
												else $ison = '<span class="label label-sm label-error">Offline</span>';
												
												
											echo'
												<tr>
													<td class="center">
													' .$id. '	
													</td>
													<td class="center">
													' .$nFetch->Playername . '	
													</td>

													<td class="center">
														' . $nFetch->Level . '
													</td>
													
													<td class="center">
														' . $nFetch->Rank . '
													</td>
																									

													<td class="center">
														' .$datum . '
													</td>
													
													<td class="center">' .$ison. '</td>

												</tr>';
											}
												
												?>

												
											</tbody>
										</table>
										<center>
										
									</div><!-- /.span -->
								</div><!-- /.row -->

							
					</div><!-- /.page-content -->
				</div>
			</div><!-- /.main-content -->
			
			</div>
														</div>

<?php include("footer.php"); ?>