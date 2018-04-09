<?php include("header.php"); ?>



<div class="main-content">

				<div class="main-content-inner">

					<!-- #section:basics/content.breadcrumbs -->

					<div class="breadcrumbs" id="breadcrumbs">

						<script type="text/javascript">

							try{ace.settings.check('breadcrumbs' , 'fixed')}catch(e){}

						</script>




						

					</div>



					<!-- /section:basics/content.breadcrumbs -->

					<div class="page-content">

			

						

						

						<div class="row">

							<div class="col-xs-12">

								<!-- PAGE CONTENT BEGINS -->

								<div class="row">

									<div class="col-xs-12">
<div class="login-container">
										 <h4 class="header blue lighter bigger">
												<i class="ace-icon fa fa-users green"></i>
												Prijava u MultiPanel
											</h4>

											<div class="space-6"></div>

											<form action="prijava.php" method="post">
												<fieldset> 
													<label class="block clearfix">
														<span class="block input-icon input-icon-right">
															<input type="text" name="user" class="form-control" placeholder="Korisničko ime" />
															<i class="ace-icon fa fa-user"></i>
														</span>
													</label>

													<label class="block clearfix">
														<span class="block input-icon input-icon-right">
															<input type="password" name="pass" class="form-control" placeholder="Password" />
															<i class="ace-icon fa fa-lock"></i>
														</span>
													</label>

													<div class="space"></div>

													<div class="clearfix">
														<label class="inline">
															<input name="zapamti" id="zapamti" value="1" type="checkbox" class="ace" />
															<span class="lbl"> Zapamti me?</span>
														</label>

														<button type="submit" class="width-35 pull-right btn btn-sm btn-primary">
															<i class="ace-icon fa fa-key"></i>
															<span class="bigger-110">Prijava</span>
														</button>
													</div>

													<div class="space-4"></div>
													<center><p style="font-weight:bold"><a href="rpw.php">Zaboravljen password?</a></p></center>
												</fieldset>
												
											</form>

											<?php if($_GET['prijava'] == "ne") echo '<center><p style="color: red; font-weight: bold;"> Pogrešno ime ili password. Pokušajte ponovo!</p></center>';
													if($_GET['prijava'] == "ne2") echo '<center><p style="color: red; font-weight: bold;"> Vaš akaunt nije odobren! Pokušajte kasnije!</p></center>';
													if($_GET['prijava'] == "ne3") echo '<center><p style="color: red; font-weight: bold;"> Vi ste banovani!</p></center>';
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