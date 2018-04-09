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
							
							<li class="active">Banovanje igrača</li>
						</ul><!-- /.breadcrumb -->

						
					</div>

					<!-- /section:basics/content.breadcrumbs -->
					<div class="page-content">
			
						<div class="page-header">
							<h1>
								Admin panel
								<small>
									<i class="ace-icon fa fa-angle-double-right"></i>
									Banovanje igrača
								</small>
							</h1>
						</div><!-- /.page-header -->
						
						<div class="row">
							<div class="col-xs-12">
								<!-- PAGE CONTENT BEGINS -->

								<div class="row">

									<div class="col-xs-12">
<div class="login-container">
										 <h4 class="header blue lighter bigger">
												<i class="ace-icon fa fa-users green"></i>
												Banovanje korisnika
											</h4>

											<div class="space-6"></div>

											<form action="banuji.php" method="post">
												<fieldset> 
													<label class="block clearfix">
														<span class="block input-icon input-icon-right">
															<input type="text" name="user" class="form-control" placeholder="Ime korisnika" />
															<i class="ace-icon fa fa-user"></i>
														</span>
													</label>

													
													
													<label class="block clearfix">
														<span class="block input-icon input-icon-right">
															<input type="text" name="razlog" class="form-control" placeholder="Razlog" />
															<i class="ace-icon fa fa-pencil"></i>
														</span>
													</label>																										
													

													<div class="space"></div>

													<div class="clearfix">
														

														<button type="submit" class="width-35 pull-right btn btn-sm btn-primary">
															
															<span class="bigger-110">Banuj!</span>
														</button>
													</div>

													<div class="space-4"></div>
													</fieldset>
												
											</form>

											<?php if($_GET['rgreska'] == 1) echo '<center><p style="color: red; font-weight: bold;">Korisnik nije pronađen u bazi!</p></center>';
												  if($_GET['rgreska'] == 5) echo '<center><p style="color: green; font-weight: bold;"> Uspješno ste banovali korisnika!</p></center>';
												  
											
											
											
											?>
</div>

									</div><!-- /.span -->

								</div><!-- /.row -->



							

					</div><!-- /.page-content -->

				</div>

			</div><!-- /.main-content -->

			

			</div>

														</div>



<?php include("footer.php"); ?>