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
<?php $imer = $_POST["imer"];
		if(empty($_POST["imer"]))
			header("Location: korisnici.php")
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
							<li class="active">Admin Panel</li>
							
							<li class="active">Uređivanje korisnika</li>
						</ul><!-- /.breadcrumb -->

						
					</div>

					<!-- /section:basics/content.breadcrumbs -->
					<div class="page-content">
			
						<div class="page-header">
							<h1>
								Admin Panel
								<small>
									<i class="ace-icon fa fa-angle-double-right"></i>
									Uređivanje korisnika
								</small>
							</h1>
						</div><!-- /.page-header -->
						
						<div class="row">
							<div class="col-xs-12">
								<!-- PAGE CONTENT BEGINS -->
								<div class="row">
									<div class="col-xs-12">
									<form action="korisnicip.php" method="POST">
                                <input type="text" name="imer" placeholder="Unesite ime korisnika..." required>
                                <input type="submit" class="btn btn-success" value="Pretraga" >
</form>
<br><br>
										<table id="simple-table" class="table table-striped table-bordered table-hover">
											<thead>
												<tr>
													<th class="center">#</th>
													<th>Ime igrača</th>
												
													<th>Email</th>

													<th>
														<i class="ace-icon fa fa-clock-o bigger-110 hidden-480"></i>
														Last Online
													</th>
													<th>Uredi</th>
													

												</tr>
											</thead>

											<tbody>
											<?php
											include "baza.php";
											
											$nQuery = "SELECT * FROM `" . $_UsersTable ."` WHERE Playername='" . $imer ."'";
											$nResult = mysql_query($nQuery) or die(mysql_error());									
											$id = 0;
											while($nFetch = mysql_fetch_object($nResult))
											{
												
												
												$phpdate = strtotime( $nFetch->LastSeen );
												$datum = date( 'd.m.Y. H:m:s', $phpdate );
												$id = $id+1;
												$linker = "uredi.php?sid=" . $nFetch->ID ."&hash=kk71930dl";
												
												
											echo'
												<tr>
													<td class="center">
													' .$id. '	
													</td>
													<td class="center">
													' .$nFetch->Playername . '	
													</td>

													<td class="center">
														' .$nFetch->Email . '
													</td>
													
																									

													<td class="center">
														' .$datum . '
													</td>
													
													<td class="center">
													<a href="' . $linker . '"> <button class="btn btn-success">
													<i>Uredi</i>
													</button></a>
													</td>

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