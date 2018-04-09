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
							
							<li class="active">Server informacije</li>
						</ul><!-- /.breadcrumb -->

						
					</div>

					<!-- /section:basics/content.breadcrumbs -->
					<div class="page-content">
			
						<div class="page-header">
							<h1>
								Server
								<small>
									<i class="ace-icon fa fa-angle-double-right"></i>
									Server Informacije
								</small>
							</h1>
						</div><!-- /.page-header -->
						
						<div class="row">
							<div class="col-xs-12">
							
							<div class="row">
									<div class="col-xs-6">
									<b>Poštovani <span style="color:blue"><?php echo $_COOKIE["user"] ?></span>, ovdje možeš vidjeti statistiku servera, te aktivne igrače i administratore. Ako želiš da se pridružiš serveru klikni na link ispod.</b>
									<br><br><center>
									<a href="samp://151.80.108.176:7777"><button class="btn btn-success">
							<i>Konektuj se na server</i>
						</button></a></center>
									</div>
									
									<div class="col-xs-6">
									<img src="http://www.game-state.com/151.80.108.176:7777/560x95_FFFFFF_438EB9_000000_000000.png" alt="Skill Arena RPG" style="border-style: none;" />
									</div>
							
							
							
							</div>
								<!-- PAGE CONTENT BEGINS -->
								<div class="row">
									<div class="col-xs-6">
									<h3>
								Online igrači </h3>
										<table id="tableSection" class="tableSection table table-striped table-bordered table-hover">
											<thead>
												<tr>
													<th class="center">ID</th>
													<th class="center">Igrač</th>
													<th class="center">Level</th>
													
													

												</tr>
											</thead>

											<tbody>
											<?php
											include "baza.php";
																						
											$nQuery = "SELECT * FROM `" . $_UsersTable ."` WHERE Online = 1";
											$nResult = mysql_query($nQuery) or die(mysql_error());									
											$id = 0;
											while($nFetch = mysql_fetch_object($nResult))
											{
											
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
														' .$nFetch->Level . '
													</td>
													

												</tr>';
											}
												
												?>

												
											</tbody>
										</table>

									</div><!-- /.span -->
									<div class="col-xs-6">
									<h3>
								Online administratori </h3>
										<table id="tableSection" class="tableSection table table-striped table-bordered table-hover">
											<thead>
												<tr>
													<th class="center">ID</th>
													<th class="center">Igrač</th>
													<th class="center">Admin Level</th>
													
													

												</tr>
											</thead>

											<tbody>
											<?php
																																
											$nQuery = "SELECT * FROM `" . $_UsersTable ."` WHERE Online = 1 AND Admin != 0";
											$nResult = mysql_query($nQuery) or die(mysql_error());									
											$id = 0;
											while($nFetch = mysql_fetch_object($nResult))
											{
																							
												
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
														' .$nFetch->Admin . '
													</td>
													

												</tr>';
											}
												
												?>

												
											</tbody>
										</table>

									</div><!-- /.span -->
								</div><!-- /.row -->

							
					</div><!-- /.page-content -->
				</div>
			</div><!-- /.main-content -->
			
			</div>
														</div>

<?php include("footer.php"); ?>