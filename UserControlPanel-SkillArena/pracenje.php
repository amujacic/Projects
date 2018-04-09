<?php if(!isset($_COOKIE['sessid'])) header('Location: login.php'); ?>
<?php if(!isset($_COOKIE['user'])) header('Location: login.php'); ?>
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

							<li class="active">Korisnik</li>

							

							<li class="active">Praćenje vozila</li>

						</ul><!-- /.breadcrumb -->



						

					</div>



					<!-- /section:basics/content.breadcrumbs -->

					<div class="page-content">

			

						<div class="page-header">

							<h1>

								Korisnik

								<small>

									<i class="ace-icon fa fa-angle-double-right"></i>

									Praćenje vozila

								</small>

							</h1>

						</div><!-- /.page-header -->

						

						<div class="row">

							<div class="col-xs-12">

								<!-- PAGE CONTENT BEGINS -->

								<div class="row">

									<div class="col-xs-12">
<?php
				
						$szQuery = "SELECT * FROM `" . $_UsersTable ."` WHERE Playername = '" . $_COOKIE['user'] . "'";
						$qResult = mysql_query($szQuery) or die(mysql_error());
						$qFetch = mysql_fetch_object($qResult);
						$linkic = "WebGPS/webgps.php?auto1=" . $qFetch->PosedovanjeAuta ;
						$linkic .= "&auto2=" . $qFetch->PosedovanjeAuta2 ;
						$linkic .= "&motor=" . $qFetch->PosedovanjeMotora ;
						$linkic .= "&brod=" . $qFetch->PosedovanjePlovila ;
						$linkic .= "&letjelica=" . $qFetch->PosedovanjeAviona ;


?>
										 <iframe src="<?php echo $linkic ?>" width="100%" height="450px" scrolling="no"></iframe> 

									</div><!-- /.span -->

								</div><!-- /.row -->



							

					</div><!-- /.page-content -->

				</div>

			</div><!-- /.main-content -->

			

			</div>

														</div>



<?php include("footer.php"); ?>