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
							
							<li class="active">Najbolji igrači</li>
						</ul><!-- /.breadcrumb -->

						
					</div>

					<!-- /section:basics/content.breadcrumbs -->
					<div class="page-content">
			
						<div class="page-header">
							<h1>
								Server
								<small>
									<i class="ace-icon fa fa-angle-double-right"></i>
									Najbolji igrači
								</small>
							</h1>
						</div><!-- /.page-header -->
						
						<div class="row">
							<div class="col-xs-12">
								<!-- PAGE CONTENT BEGINS -->
								<div class="row">
									<div class="col-xs-12">
										<table id="simple-table" class="table table-striped table-bordered table-hover">
											<thead>
												<tr>
													<th class="center">#</th>
													<th>Ime</th>
													<th>Level</th>
													<th>Respekti</th>

													<th>
														<i class="ace-icon fa fa-clock-o bigger-110 hidden-480"></i>
														Sati igre
													</th>
													<th>Upozorenja</th>
													<th>Last online</th>
													<th>Online</th>

												</tr>
											</thead>

											<tbody>
											<?php
											include "baza.php";
											$nQuery = "SELECT * FROM `" . $_UsersTable ."` ORDER BY Level DESC LIMIT 25";
											$nResult = mysql_query($nQuery) or die(mysql_error());
											$id = 0;
											while($nFetch = mysql_fetch_object($nResult))
											{
												
												$phpdate = strtotime( $nFetch->LastSeen );
												$datum = date( 'd.m.Y. H:m:s', $phpdate );
										$id = $id+1;
												$rexp = $nFetch->Level*2+2;
												if($nFetch->online == 1)
													$ison = '<span class="label label-sm label-success">Online</span>';
												else $ison = '<span class="label label-sm label-error">Offline</span>';
												if($nFetch->Warn == 0)
													$upozorenja = "Nema upozorenja";
												else $upozorenja = $nFetch->Warn;
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
													<td class="center">' .$nFetch->Respekti . '/' .$rexp . '</td>
													<td class="center">' .$nFetch->SatiIgre . 'h</td>
													<td class="center">' .$upozorenja . '</td>

													<td class="center">
														' .$datum . '
													</td>

													<td class="center">
													' .$ison . '
													
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