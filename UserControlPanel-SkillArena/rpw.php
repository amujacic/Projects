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
												MultiPanel - Resetiranje passworda
											</h4>

											<div class="space-6"></div>

											<form action="resetpw.php" method="post">
												<fieldset> 
													<label class="block clearfix">
														<span class="block input-icon input-icon-right">
															<input type="text" name="ruser" class="form-control" placeholder="Korisničko ime" />
															<i class="ace-icon fa fa-user"></i>
														</span>
													</label>

													<label class="block clearfix">
														<span class="block input-icon input-icon-right">
															<input type="text" name="rmail" class="form-control" placeholder="E-mail akaunta" />
															<i class="ace-icon fa fa-pencil"></i>
														</span>
													</label>

													<div class="space"></div>

													<div class="clearfix">
														

														<button type="submit" class="width-35 pull-right btn btn-sm btn-primary">
															<i class="ace-icon fa fa-key"></i>
															<span class="bigger-110">Resetuj password</span>
														</button>
													</div>

													<div class="space-4"></div>
													</fieldset>
												
											</form>

											 <?php if($_GET['rgreska'] == 1) echo '<center><p style="color: red; font-weight: bold;"> Netačan e-Mail ili korisničko ime</p></center>';
											if($_GET['rgreska'] == 5) echo '<center><p style="color: green; font-weight: bold;"> Password uspješno resetovan!</p></center>';?>
	</div>

									</div><!-- /.span -->

								</div><!-- /.row -->



							

					</div><!-- /.page-content -->

				</div>

			</div><!-- /.main-content -->

			

			</div>

														</div>



<?php include("footer.php"); ?>