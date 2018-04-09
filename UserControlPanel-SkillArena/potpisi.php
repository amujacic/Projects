<?php if(!isset($_COOKIE['sessid'])) header('Location: login.php'); ?>
<?php if(!isset($_COOKIE['user'])) header('Location: login.php'); ?>
<?php include("header.php") ?>

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
									<div class="col-sm-12">
										 <b>Poštovani <span style="font-weight:bold; color:#096AA1"><?php echo $_COOKIE['user']; ?></span>, dobro došao na stranicu za kreiranje potpisa. Vaš kreirani potpis možete putem BBCode-a ili HTML koda podijeliti sa prijateljima na društvenim mrežama ili na forumu</b>
            <br> <br>
            <?php
			$potpis = "http://ucp.sa-rpg.com/potpis.php?name=" . $_COOKIE["user"];
			?>
            <center><a href="http://sa-rpg.com"><img src="<?php echo $potpis ?>" alt="Skill Arena RPG" style="border-style: none;" /></a></center><br><br>
 <div class="col-sm-6">  
<center><p style="font-weight:bold; color:#096AA1">BB CODE</p>  </center>

<textarea name="box-content" id="box-content" readonly rows="4" cols="68">
  <center><a href="http://sa-rpg.com"><img src="<?php echo $potpis ?>" alt="Skill Arena RPG" style="border-style: none;" /></a></center>
</textarea>
</div>
<div class="col-sm-6">
<center><p style="font-weight:bold; color:#096AA1">BB CODE</p>  </center>
<textarea name="box-content" id="box-content" readonly rows="4" cols="68">
  [URL=http://sa-rpg.com][IMG]<?php echo $potpis ?>[/IMG][/URL]
</textarea>
</div>
								</div>
							</div><!-- /.col -->
						</div><!-- /.row -->
					</div><!-- /.page-content -->
				</div>
				</div>
			</div><!-- /.main-content -->
<?php include("footer.php") ?>