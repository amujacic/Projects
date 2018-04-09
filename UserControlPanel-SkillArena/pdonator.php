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
							<li class="active">Admin Panel</li>
							
							<li class="active">Postavljanje donacija</li>
						</ul><!-- /.breadcrumb -->

						
					</div>

					<!-- /section:basics/content.breadcrumbs -->
					<div class="page-content">
			
						<div class="page-header">
							<h1>
								Admin Panel
								<small>
									<i class="ace-icon fa fa-angle-double-right"></i>
									Postavljanje donacija
								</small>
							</h1>
						</div><!-- /.page-header -->
						
						<div class="row">
							<div class="col-xs-12">
								<!-- PAGE CONTENT BEGINS -->
								<div class="row">
									<div class="col-xs-12">
									<form action="pdonator.php" method="POST">
                                <input type="text" name="imer" placeholder="Unesite ime korisnika..." required>
                                <input type="submit" class="btn btn-success" value="Pretraga" >
</form>
<br><br>
<?php if($_GET['greska'] == "da") echo '<center><p style="color: red; font-weight: bold;">GREŠKA!!</p></center>';
if($_GET['greska'] == "ne") echo '<center><p style="color: green; font-weight: bold;"> Uspješno ste postavili donaciju korisniku!</p></center>';
?>
										<?php 
							$imer = $_POST["imer"];
							$szQuery = "SELECT * FROM `" . $_UsersTable ."` WHERE Playername = '" . $imer . "'";
							$qResult = mysql_query($szQuery) or die(mysql_error());
							$qFetch = mysql_fetch_object($qResult);
							$donlink = "sdonator.php?sid=" . $qFetch->ID ."&hash=kk71930dl";
							if(!empty($_POST["imer"]))
							{
							
							?>
							

									<div class="col-xs-3">

											<div class="space-6"></div>

											<form action="<?php echo $donlink ?>" method="post">
												<fieldset> 
													<label class="block clearfix">
														<span class="block input-icon input-icon-right">
														Korisničko ime:
															<input type="text" name="user" class="form-control" value="<?php echo $qFetch->Playername ?>" />															
														</span>
													</label>

													Level
													<label class="block clearfix">
														<span class="block input-icon input-icon-right">
															<input type="text" name="Level" class="form-control" value="<?php echo $qFetch->Level ?>" />
												
														</span>
													</label>
								</div>
								<div class="col-xs-3">

											<div class="space-6"></div>
													Respekti:
													<label class="block clearfix">
														<span class="block input-icon input-icon-right">
															<input type="text" name="Respekti" class="form-control" value="<?php echo $qFetch->Respekti ?>" />
													
														</span>
													</label>
													
													VIP:
													<label class="block clearfix">
														<span class="block input-icon input-icon-right">
															<input type="text" name="Vip" class="form-control" value="<?php echo $qFetch->Vip ?>" />
															
														</span>
													</label>
							</div>
								<div class="col-xs-3">

											<div class="space-6"></div>
													<label class="block clearfix">
														<span class="block input-icon input-icon-right">
														Dva vozila:
															<input type="text" name="DvaV" class="form-control" value="<?php echo $qFetch->DvaV ?>" />															
														</span>
													</label>
													
													<label class="block clearfix">
														<span class="block input-icon input-icon-right">
														Mobilni:
															<input type="text" name="Mobilni" class="form-control" value="<?php echo $qFetch->Mobilni ?>" />															
														</span>
													</label>
									</div>
								<div class="col-xs-3">

											<div class="space-6"></div>				
									
													
													<label class="block clearfix">
														<span class="block input-icon input-icon-right">
														Novac banka:
															<input type="text" name="NovacBanka" class="form-control" value="<?php echo $qFetch->NovacBanka ?>" />															
														</span>
													</label>
													
													<label class="block clearfix">
														<span class="block input-icon input-icon-right">
														Novac dzep:
															<input type="text" name="NovacDzep" class="form-control" value="<?php echo $qFetch->NovacDzep ?>" />															
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
							<?php } ?>		
									</div><!-- /.span -->
								</div><!-- /.row -->

							
					</div><!-- /.page-content -->
				</div>
			</div><!-- /.main-content -->
			
			</div>
														</div>

<?php include("footer.php"); ?>