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
							<li class="active">Admin panel</li>
							
							<li class="active">Unban igrača</li>
						</ul><!-- /.breadcrumb -->

						
					</div>

					<!-- /section:basics/content.breadcrumbs -->
					<div class="page-content">
			
						<div class="page-header">
							<h1>
								Admin panel
								<small>
									<i class="ace-icon fa fa-angle-double-right"></i>
									Unban igrača
								</small>
							</h1>
						</div><!-- /.page-header -->
						
						<div class="row">
							<div class="col-xs-12">
								<!-- PAGE CONTENT BEGINS -->
								<div class="row">
									<div class="col-xs-12">
									<form action="banss.php" method="POST">
                                <input type="text" name="imer" placeholder="Unesite ime korisnika..." required>
                                <input type="submit" class="btn btn-success" value="Pretraga" >
</form>
<br><br>
										<table id="simple-table" class="table table-striped table-bordered table-hover">
											<thead>
												<tr>
													<th class="center">#</th>
													<th>Banovani igrač</th>
													<th>Banovan od admina</th>
													<th>Razlog</th>

													<th>
														<i class="ace-icon fa fa-clock-o bigger-110 hidden-480"></i>
														Datum
													</th>
													<th> Unban </th>
													
													

												</tr>
											</thead>

											<tbody>
											<?php
											include "baza.php";
											$nQuery = "SELECT * FROM `banovani`";
											$nResult = mysql_query($nQuery) or die(mysql_error());											
											$maksimalna = mysql_num_rows($nResult);
											$limit1 = $sid*25;
											$strprije = $sid-1;
											$limit2 = $strprije*25;
											$nQuery = "SELECT * FROM `banovani` ORDER BY id DESC LIMIT " . $limit2 ."," . $limit1 ."";
											$nResult = mysql_query($nQuery) or die(mysql_error());									
											$id = $limit2;
											while($nFetch = mysql_fetch_object($nResult))
											{
												$linker = "unbanuji.php?sid=" . $nFetch->Playername ."&hash=kk71930dl";
												
												$phpdate = strtotime( $nFetch->time );
												$datum = date( 'd.m.Y. H:m:s', $phpdate );
										$id = $id+1;
												
											echo'
												<tr>
													<td class="center">
													' .$id. '	
													</td>
													<td class="center">
													' .$nFetch->Playername . '	
													</td>

													<td class="center">
														' .$nFetch->Adminname . '
													</td>
													<td class="center">' .$nFetch->Reason . '</td>
																								

													<td class="center">
														' .$datum . '
													</td>
													<td class="center">
													<a href="' . $linker . '"> <button class="btn btn-success">
													<i>Unbanuj</i>
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
										<a href="bans.php?sid=<?php echo $prethodna ?>"> <button class="btn btn-danger">
							<i>Prethodna stranica</i>
						</button></a>
						<a href="bans.php?sid=<?php echo $iduca ?>"><button class="btn btn-success">
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