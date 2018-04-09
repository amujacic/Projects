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
								<a href="#">Naslovna</a>
							</li>
							<li class="active">Dashboard</li>
						</ul><!-- /.breadcrumb -->

						
					</div>

					<!-- /section:basics/content.breadcrumbs -->
					<div class="page-content">
						
						

						<div class="row">
							<div class="col-xs-12">
								<!-- PAGE CONTENT BEGINS -->
								<div class="alert alert-block alert-success">
									<button type="button" class="close2" data-dismiss="alert">
										<i class="ace-icon fa fa-times"></i>
									</button>

									<i class="ace-icon fa fa-check green"></i>

									Poštovani <?php echo $_COOKIE["user"] ?>, dobro došao na
									<strong class="green">
										[SA] MultiPanel
										<small>(v1.0.0)</small>
									</strong>,
	uživajte u korištenju!
								</div>

								<div class="row">
									<div class="space-6"></div>

									<div class="col-sm-6">
										<div class="widget-box transparent" id="recent-box">
											<div class="widget-header">
												<h4 class="widget-title lighter smaller">
													<i class="ace-icon fa fa-rss orange"></i>SA Feed
												</h4>

												<div class="widget-toolbar no-border">
													<ul class="nav nav-tabs" id="recent-tab">
														<li class="active">
															<a data-toggle="tab" href="#task-tab">Online igrači</a>
														</li>

														<li>
															<a data-toggle="tab" href="#member-tab">Online administratori</a>
														</li>

														<li>
															<a data-toggle="tab" href="#comment-tab">Online GameMasteri</a>
														</li>
													</ul>
												</div>
											</div>

											<div class="widget-body">
												<div class="widget-main padding-4">
													<div class="tab-content padding-8">
														<div id="task-tab" class="tab-pane active">
															
														<table id="tableSection2" class="tableSection2 table table-striped table-bordered table-hover">
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
															

															
														</div>

														<div id="member-tab" class="tab-pane">
															
															<table id="tableSection2" class="tableSection2 table table-striped table-bordered table-hover">
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
															
														</div><!-- /.#member-tab -->

														<div id="comment-tab" class="tab-pane">
															
															<table id="tableSection2" class="tableSection2 table table-striped table-bordered table-hover">
											<thead>
												<tr>
													<th class="center">ID</th>
													<th class="center">Igrač</th>
													<th class="center">GM Level</th>
													
													

												</tr>
											</thead>

											<tbody>
											<?php
															
											$nQuery = "SELECT * FROM `" . $_UsersTable ."` WHERE Online = 1 AND GameMaster != 0";
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
														' .$nFetch->GameMaster . '
													</td>
													

												</tr>';
											}
												
												?>

												
											</tbody>
										</table>
															
														</div>
													</div>
												</div><!-- /.widget-main -->
											</div><!-- /.widget-body -->
										</div><!-- /.widget-box -->
									</div><!-- /.col -->
<br><br>
									<div class="vspace-12-sm"></div>

									<div class="col-sm-5">
										<div class="widget-box">
											<div class="widget-header widget-header-flat widget-header-small">
												<h5 class="widget-title">
													<i class="ace-icon fa fa-signal"></i>
													Statistika
												</h5>

												<div class="widget-toolbar no-border">
													<div class="inline dropdown-hover">
														
															Ukupna statistika
															

														
													</div>
												</div>
											</div>

											<div class="widget-body">
												<div class="widget-main">
													<!-- #section:plugins/charts.flotchart -->
													<div id="piechart-placeholder"></div>

														
													</div>
												</div><!-- /.widget-main -->
											</div><!-- /.widget-body -->
											<img width="460px"src="http://www.game-state.com/151.80.108.176:7777/560x95_FFFFFF_438EB9_000000_000000.png"/>
										</div><!-- /.widget-box -->
										
									</div><!-- /.col -->
								</div><!-- /.row -->

								

								

								<!-- PAGE CONTENT ENDS -->
							</div><!-- /.col -->
						</div><!-- /.row -->
					</div><!-- /.page-content -->
				
			</div><!-- /.main-content -->

<?php include("footer.php"); ?>