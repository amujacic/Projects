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
												MultiPanel - Registracija korisnika
											</h4>

											<div class="space-6"></div>

											<form action="registracija.php" method="post">
												<fieldset> 
													<label class="block clearfix">
														<span class="block input-icon input-icon-right">
															<input type="text" name="user" class="form-control" placeholder="Korisničko ime" />
															<i class="ace-icon fa fa-user"></i>
														</span>
													</label>

													<label class="block clearfix">
														<span class="block input-icon input-icon-right">
															<input type="password" name="pw1" class="form-control" placeholder="Password" />
															<i class="ace-icon fa fa-lock"></i>
														</span>
													</label>
													
													<label class="block clearfix">
														<span class="block input-icon input-icon-right">
															<input type="password" name="pw2" class="form-control" placeholder="Ponovite password" />
															<i class="ace-icon fa fa-lock"></i>
														</span>
													</label>
													
													<label class="block clearfix">
														<span class="block input-icon input-icon-right">
															<input type="text" name="mail" class="form-control" placeholder="E-mail" />
															<i class="ace-icon fa fa-pencil"></i>
														</span>
													</label>
													
													<label class="block clearfix">
														<span class="block">
															 <select name="spol" class="form-control">
															  <option value="1">Muško</option>
															  <option value="2">Žensko</option>
														
															</select>
															
														</span>
													</label>
													
													<label class="block clearfix">
														<span class="block">
															 <select name="godine" class="form-control">
															 <?php 
															 for($idd=14; $idd < 30; $idd++)
															 {
															?>
															  <option value="<?php echo $idd ?>">Godine: <?php echo $idd ?></option>
															  
															 <?php } ?>
															</select>															
														</span>
													</label>
													
													<label class="block clearfix">
														<span class="block">
															 <select name="drzava" class="form-control">
															  <option value="1">Srbija</option>
															  <option value="2">Bosna i Hercegovina</option>
															  <option value="3">Kosovo (Srbija, Pokrajina)</option>
															  <option value="4">Crna Gora</option>
															  <option value="5">Hrvatska</option>
															  <option value="6">Makedonija</option>
															  <option value="7">Slovenija</option>
															  <option value="8">Ostale države</option>
															</select>
															
														</span>
													</label>

													<div class="space"></div>

													<div class="clearfix">
														

														<button type="submit" class="width-35 pull-right btn btn-sm btn-primary">
															<i class="ace-icon fa fa-key"></i>
															<span class="bigger-110">Registracija!</span>
														</button>
													</div>

													<div class="space-4"></div>
													</fieldset>
												
											</form>

											<?php if($_GET['pgreska'] == 1) echo '<center><p style="color: red; font-weight: bold;"> To ime se već koristi!</p></center>';
												  if($_GET['pgreska'] == 2) echo '<center><p style="color: red; font-weight: bold;"> Passwordi se ne podudaraju!</p></center>';
												  if($_GET['pgreska'] == 3) echo '<center><p style="color: red; font-weight: bold;"> Password mora biti duzi od 6 karaktera!</p></center>';
												  if($_GET['pgreska'] == 4) echo '<center><p style="color: red; font-weight: bold;"> Morate koristiti RolePlay ime (Ime_Prezime)!</p></center>';
												  if($_GET['pgreska'] == 6) echo '<center><p style="color: red; font-weight: bold;"> Morate unjeti MAIL!</p></center>';
												  if($_GET['pgreska'] == 5) echo '<center><p style="color: green; font-weight: bold;"> Uspješno ste se registrovali, sačekajte da Vam administrator odobri akaunt!</p></center>';
												  
											
											
											
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