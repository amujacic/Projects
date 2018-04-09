<?php
$stranica = $_SERVER['PHP_SELF'];
if (strpos($stranica,'profil') !== false) {
    $stranica = "Profil";
}
if (strpos($stranica,'index') !== false) {
    $stranica = "Naslovna";
}
if (strpos($stranica,'rpw') !== false) {
    $stranica = "Naslovna";
}
if (strpos($stranica,'login') !== false) {
    $stranica = "Naslovna";
}
if (strpos($stranica,'statistika') !== false) {
    $stranica = "Statistika";
}
if (strpos($stranica,'imovina') !== false) {
    $stranica = "Imovina";
}
if (strpos($stranica,'potpis') !== false) {
    $stranica = "Potpis";
}
if (strpos($stranica,'najigraci') !== false) {
    $stranica = "Najbolji igrači";
}
if (strpos($stranica,'banovi') !== false) {
    $stranica = "Lista banova";
}
if (strpos($stranica,'mapa') !== false) {
    $stranica = "Mapa servera";
}
if (strpos($stranica,'sinfo') !== false) {
    $stranica = "Server info";
}
if (strpos($stranica,'staff') !== false) {
    $stranica = "Osoblje";
}
if (strpos($stranica,'donacije') !== false) {
    $stranica = "Donacije";
}
if (strpos($stranica,'imenik') !== false) {
    $stranica = "Telefonski imenik";
}
if (strpos($stranica,'postavke') !== false) {
    $stranica = "Postavke";
}
if (strpos($stranica,'register') !== false) {
    $stranica = "Registracija";
}
if (strpos($stranica,'oakk') !== false) {
    $stranica = "Odobravanje akaunta";
}
if (strpos($stranica,'bans') !== false) {
    $stranica = "Uređivanje banova";
}
if (strpos($stranica,'korisnici') !== false) {
    $stranica = "Uređivanje korisnika";
}
if (strpos($stranica,'uredi') !== false) {
    $stranica = "Uređivanje korisnika";
}
if (strpos($stranica,'dodajban') !== false) {
    $stranica = "Dodavanje banova";
}
if (strpos($stranica,'pdonator') !== false) {
    $stranica = "Postavljanje donacija";
}
if (strpos($stranica,'bkorisnika') !== false) {
    $stranica = "Brisanje korisnika";
}
if (strpos($stranica,'pracenje') !== false) {
    $stranica = "Praćenje vozila";
}
if (strpos($stranica,'prodaja') !== false) {
    $stranica = "Prodaja imovine";
}
if (strpos($stranica,'aukcije') !== false) {
    $stranica = "Aktivne aukcije";
}
if (strpos($stranica,'mojeponude') !== false) {
    $stranica = "Moje aukcije";
}
if (strpos($stranica,'donatori') !== false) {
    $stranica = "Donatori";
}
if (strpos($stranica,'najbogatiji') !== false) {
    $stranica = "Najbogatiji igrači";
}
if (strpos($stranica,'skinovi') !== false) {
    $stranica = "Lista skinova";
}
if (strpos($stranica,'vozila') !== false) {
    $stranica = "ID Vozila";
}
if (strpos($stranica,'boje') !== false) {
    $stranica = "Boje vozila";
}
if (strpos($stranica,'faq') !== false) {
    $stranica = "FAQ";
}
if (strpos($stranica,'organizacije') !== false) {
    $stranica = "Organizacije";
}
if (strpos($stranica,'clanovi') !== false) {
    $stranica = "Članovi organizacije";
}


?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
		<meta charset="utf-8" />
		<title>Skill Arena - <?php echo $stranica ?></title>

		<meta name="description" content="overview &amp; stats" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0" />
		<link rel="stylesheet" href="assets/css/bootstrap.css" />
		<link rel="stylesheet" href="assets/css/font-awesome.css" />
		<link rel="stylesheet" href="assets/css/ace-fonts.css" />
		<link rel="stylesheet" href="assets/css/ace.css" class="ace-main-stylesheet" id="main-ace-style" />
		<script src="assets/js/ace-extra.js"></script>
		<link rel="stylesheet" href="style.css" />
		<script src="script.js"></script>


		<link rel="stylesheet" href="css/style.css"> <!-- Resource style -->
		<script src="js/modernizr.js"></script> <!-- Modernizr -->
		
	</head>

	<body class="no-skin">
		<!-- #section:basics/navbar.layout -->
		<div id="navbar" class="navbar navbar-default">
			<script type="text/javascript">
				try{ace.settings.check('navbar' , 'fixed')}catch(e){}
			</script>

			<div class="navbar-container" id="navbar-container">
				<!-- #section:basics/sidebar.mobile.toggle -->
				<button type="button" class="navbar-toggle menu-toggler pull-left" id="menu-toggler" data-target="#sidebar">
					<span class="sr-only">Sakri meni</span>

					<span class="icon-bar"></span>

					<span class="icon-bar"></span>

					<span class="icon-bar"></span>
				</button>

				<!-- /section:basics/sidebar.mobile.toggle -->
				<div class="navbar-header pull-left">
					<!-- #section:basics/navbar.layout.brand -->
					<a href="index.php" class="navbar-brand">
						<small>
							<i class="fa fa-leaf"></i>
							Skill Arena - MultiPanel
						</small>
					</a>

					<!-- /section:basics/navbar.layout.brand -->

					<!-- #section:basics/navbar.toggle -->

					<!-- /section:basics/navbar.toggle -->
				</div>

				<!-- #section:basics/navbar.dropdown -->
				<div class="navbar-buttons navbar-header pull-right" role="navigation">
					<ul class="nav ace-nav">
						<li class="grey">
							<a data-toggle="dropdown" class="dropdown-toggle" href="#">
								<i class="ace-icon fa fa-tasks"></i>
								<span class="badge badge-grey">4</span>
							</a>

							<ul class="dropdown-menu-right dropdown-navbar dropdown-menu dropdown-caret dropdown-close">
								<li class="dropdown-header">
									<i class="ace-icon fa fa-check"></i>
									Server update - Napredak
								</li>

								<li class="dropdown-content">
									<ul class="dropdown-menu dropdown-navbar">
										<li>
											<a href="#">
												<div class="clearfix">
													<span class="pull-left">Sistem kuća</span>
													<span class="pull-right">65%</span>
												</div>

												<div class="progress progress-mini">
													<div style="width:65%" class="progress-bar"></div>
												</div>
											</a>
										</li>

										<li>
											<a href="#">
												<div class="clearfix">
													<span class="pull-left">Uređivanje mapa</span>
													<span class="pull-right">35%</span>
												</div>

												<div class="progress progress-mini">
													<div style="width:35%" class="progress-bar progress-bar-danger"></div>
												</div>
											</a>
										</li>

										<li>
											<a href="#">
												<div class="clearfix">
													<span class="pull-left">Nove organizacije</span>
													<span class="pull-right">15%</span>
												</div>

												<div class="progress progress-mini">
													<div style="width:15%" class="progress-bar progress-bar-warning"></div>
												</div>
											</a>
										</li>

										<li>
											<a href="#">
												<div class="clearfix">
													<span class="pull-left">Popravak bugova</span>
													<span class="pull-right">90%</span>
												</div>

												<div class="progress progress-mini progress-striped active">
													<div style="width:90%" class="progress-bar progress-bar-success"></div>
												</div>
											</a>
										</li>
									</ul>
								</li>

								
							</ul>
						</li>

						
						<?php

						if(!isset($_COOKIE["user"]))
						{
						$ime = "Gost";
						$avatar = "assets/avatars/avatar2.png";
							
						}							
						else 
						{
						include "baza.php";
						$szQuery = "SELECT * FROM `" . $_UsersTable ."` WHERE Playername = '" . $_COOKIE['user'] . "'";
						$qResult = mysql_query($szQuery) or die(mysql_error());
						$qFetch = mysql_fetch_object($qResult);
						$skin = 1;
						$ime = $_COOKIE["user"];	
						$avatar = "skinovi/";
						$avatar.= $qFetch->Skin;
						$avatar.= ".jpg";
						$rank = $qFetch->Admin;
						if($qFetch->Vlasnik != 0)
							$rank = 1338;
						if($qFetch->Skripter != 0)
							$rank = 1337;
												
						$banQuery = "SELECT * FROM `banovani` WHERE Playername ='" . $ime ."'";
						$bannResult = mysql_query($banQuery) or die(mysql_error());	
						if(mysql_num_rows($bannResult) != 0) header("Location: odjava.php");
						}
						
						
						
						?>

						<!-- #section:basics/navbar.user_menu -->
						<li class="light-blue">
							<a data-toggle="dropdown" href="#" class="dropdown-toggle">
								<img class="nav-user-photo" src="<?php echo $avatar ?>" alt="Avatar" />
								<span class="user-info">
									<small>Dobro dosao,</small>
									<?php echo $ime ?>
								</span>

								<?php if(isset($_COOKIE["user"])) echo '<i class="ace-icon fa fa-caret-down"></i>' ?>
							</a>
<?php if(isset($_COOKIE["user"])) echo '
							<ul class="user-menu dropdown-menu-right dropdown-menu dropdown-yellow dropdown-caret dropdown-close">
								<li>
									<a href="postavke.php">
										<i class="ace-icon fa fa-cog"></i>
										Postavke
									</a>
								</li>

								<li>
									<a href="profil.php">
										<i class="ace-icon fa fa-user"></i>
										Profil
									</a>
								</li>

								<li class="divider"></li>

								<li>
									<a href="odjava.php">
										<i class="ace-icon fa fa-power-off"></i>
										Odjava
									</a>
								</li>
							</ul>' ?>
						</li>

						<!-- /section:basics/navbar.user_menu -->
					</ul>
				</div>

				<!-- /section:basics/navbar.dropdown -->
			</div><!-- /.navbar-container -->
		</div>

		<!-- /section:basics/navbar.layout -->
		<div class="main-container" id="main-container">
			<script type="text/javascript">
				try{ace.settings.check('main-container' , 'fixed')}catch(e){}
			</script>

			<!-- #section:basics/sidebar -->
			<div id="sidebar" class="sidebar                  responsive">
				<script type="text/javascript">
					try{ace.settings.check('sidebar' , 'fixed')}catch(e){}
				</script>

				<div class="sidebar-shortcuts" id="sidebar-shortcuts">
					<div class="sidebar-shortcuts-large" id="sidebar-shortcuts-large">
					<br>
						
						<a href="sinfo.php"><button class="btn btn-success">
							<i class="ace-icon fa fa-signal"></i>
						</button></a>
&nbsp;
						<a href="http://sa-rpg.com"><button class="btn btn-info">
							<i class="ace-icon fa fa-pencil"></i>
						</button></a>
&nbsp;
						<!-- #section:basics/sidebar.layout.shortcuts -->
						<a href="staff.php"><button class="btn btn-warning">
							<i class="ace-icon fa fa-users"></i>
						</button></a>

					

						<!-- /section:basics/sidebar.layout.shortcuts -->
					</div>

					<div class="sidebar-shortcuts-mini" id="sidebar-shortcuts-mini">
						<span class="btn btn-success"></span>

						<span class="btn btn-info"></span>

						<span class="btn btn-warning"></span>

						<span class="btn btn-danger"></span>
					</div>
				</div><!-- /.sidebar-shortcuts -->

				<ul class="nav nav-list">
				<br>
					<li class="<?php if($stranica == "Naslovna") echo "active"; ?>">
						<a href="index.php">
							<i class="menu-icon fa fa-tachometer"></i>
							<span class="menu-text"> Naslovna </span>
						</a>

						<b class="arrow"></b>
					</li>
<?php if(isset($_COOKIE["user"]))
		{
					echo '<li class="';if($stranica == "Profil" || $stranica == "Moje aukcije" || $stranica == "Aktivne aukcije" || $stranica == "Prodaja imovine" || $stranica == "Statistika" || $stranica == "Imovina" || $stranica == "Potpis" || $stranica == "Praćenje vozila") echo "active";echo'">
						<a href="#" class="dropdown-toggle">
							<i class="menu-icon fa fa-desktop"></i>
							<span class="menu-text">
								Korisnik
							</span>

							<b class="arrow fa fa-angle-down"></b>
						</a>

						<b class="arrow"></b>

						<ul class="submenu">
							<li class="';if($stranica == "Profil") echo "active";echo'">
								<a href="profil.php">
									<i class="menu-icon fa fa-caret-right"></i>

									Profil
									
								</a>

								<b class="arrow"></b>

								
									<li class="';if($stranica == "Statistika") echo "active";echo'">
										<a href="statistika.php">
											<i class="menu-icon fa fa-caret-right"></i>
											Statistika
										</a>

										<b class="arrow"></b>
									</li>

									<li class="';if($stranica == "Imovina") echo "active";echo'">
										<a href="imovina.php">
											<i class="menu-icon fa fa-caret-right"></i>
											Imovina
										</a>

										<b class="arrow"></b>
									</li>
									<li class="';if($stranica == "Aktivne aukcije" || $stranica == "Moje aukcije") echo "active";echo'">
										<a href="" class="dropdown-toggle">
											<i class="menu-icon fa fa-caret-right"></i>
											Aukcije
										</a>

										<b class="arrow"></b>
									<ul class="submenu">
									<li class="';if($stranica == "Aktivne aukcije") echo "active";echo'">
										<a href="aukcije.php">
											<i class="menu-icon fa fa-caret-right"></i>
											Aktivne aukcije
										</a>

										<b class="arrow"></b>
									</li>
									<li class="';if($stranica == "Moje aukcije") echo "active";echo'">
										<a href="mojeponude.php">
											<i class="menu-icon fa fa-caret-right"></i>
											Moje aukcije
										</a>

										<b class="arrow"></b>
									</li>
									</ul>
									</li>';
		}
		
		if(isset($_COOKIE["user"]))
		{
			if($qFetch->PosedovanjeAuta != -1 || $qFetch->PosedovanjeAuta2 != -1 || $qFetch->PosedovanjeMotora != -1 || $qFetch->PosedovanjePlovila != -1 || $qFetch->PosedovanjeAviona != -1  )
			{

					echo'		
									<li class="';if($stranica == "Praćenje vozila") echo "active";echo'">
										<a href="pracenje.php">
											<i class="menu-icon fa fa-caret-right"></i>
											Praćenje vozila
										</a>

										<b class="arrow"></b>
									</li>';
			}
		}							
		if(isset($_COOKIE["user"]))
		{
									echo '		

									<li class="';if($stranica == "Prodaja imovine") echo "active";echo'">
										<a href="prodaja.php">
											<i class="menu-icon fa fa-caret-right"></i>
											Prodaja imovine
										</a>

										<b class="arrow"></b>
									</li>

									<li class="';if($stranica == "Potpis") echo "active";echo'">
										<a href="potpisi.php">
											<i class="menu-icon fa fa-caret-right"></i>
											Potpis
										</a>

										<b class="arrow"></b>
									</li>

									
							
						</li>
		</ul>'; }

					echo' <li class="';if($stranica == "Najbolji igrači" || $stranica == "Najbogatiji igrači" || $stranica == "Donatori" || $stranica == "Donacije" || $stranica == "Telefonski imenik" || $stranica == "Lista banova" || $stranica == "Mapa servera" || $stranica == "Osoblje" || $stranica == "Organizacije" || $stranica == "Članovi organizacije" || $stranica == "Server info") echo "active";echo'">
						<a href="#" class="dropdown-toggle">
							<i class="menu-icon fa fa-list"></i>
							<span class="menu-text"> Server </span>

							<b class="arrow fa fa-angle-down"></b>
						</a>

						<b class="arrow"></b>

						<ul class="submenu">
							<li class="';if($stranica == "Server info") echo "active";echo'">
								<a href="sinfo.php">
									<i class="menu-icon fa fa-caret-right"></i>
									Informacije
								</a>

								<b class="arrow"></b>
							</li>

							<li class="';if($stranica == "Mapa servera") echo "active";echo'">
								<a href="mapa.php">
									<i class="menu-icon fa fa-caret-right"></i>
									Mapa
								</a>

								<b class="arrow"></b>
							</li>
							
							<li class="';if($stranica == "Organizacije" || $stranica == "Članovi organizacije") echo "active";echo'">
								<a href="organizacije.php">
									<i class="menu-icon fa fa-caret-right"></i>
									Organizacije
								</a>

								<b class="arrow"></b>
							</li>
							
							<li class="';if($stranica == "Najbolji igrači" || $stranica == "Najbogatiji igrači" || $stranica == "Donatori" || $stranica == "Lista banova" || $stranica == "Osoblje") echo "active";echo'">
								<a href="" class="dropdown-toggle">
									<i class="menu-icon fa fa-caret-right"></i>
									Liste
								</a>

								<b class="arrow"></b>
							<ul class="submenu">	
								<li class="';if($stranica == "Najbolji igrači") echo "active";echo'">
								<a href="najigraci.php">
									<i class="menu-icon fa fa-caret-right"></i>
									Najbolji igrači
								</a>

								<b class="arrow"></b>
								</li>
								
								<li class="';if($stranica == "Najbogatiji igrači") echo "active";echo'">
								<a href="najbogatiji.php">
									<i class="menu-icon fa fa-caret-right"></i>
									Najbogatiji igrači
								</a>

								<b class="arrow"></b>
								</li>
								
								<li class="';if($stranica == "Lista banova") echo "active";echo'">
								<a href="banovi.php">
									<i class="menu-icon fa fa-caret-right"></i>
									Lista banova
								</a>

								<b class="arrow"></b>
								</li>	
								
							<li class="';if($stranica == "Donatori") echo "active";echo'">
								<a href="donatori.php">
									<i class="menu-icon fa fa-caret-right"></i>
									Lista donatora
								</a>

								<b class="arrow"></b>
								</li>
							
							<li class="';if($stranica == "Osoblje") echo "active";echo'">
								<a href="staff.php">
									<i class="menu-icon fa fa-caret-right"></i>
									Osoblje
								</a>

								<b class="arrow"></b>
							</li>
								
								
							</ul>	
							</li>
							
							
							<li class="';if($stranica == "Donacije") echo "active";echo'">
								<a href="donacije.php">
									<i class="menu-icon fa fa-caret-right"></i>
									Donacije
								</a>

								<b class="arrow"></b>
							</li>
							
							<li class="';if($stranica == "Telefonski imenik") echo "active";echo'">
								<a href="imenik.php">
									<i class="menu-icon fa fa-caret-right"></i>
									Telefonski imenik
								</a>

								<b class="arrow"></b>
							</li>
						</ul>
					</li>';
					
					echo' <li class="';if($stranica == "Lista skinova" || $stranica == "ID Vozila" || $stranica == "FAQ" || $stranica == "Boje vozila") echo "active";echo'">
						<a href="#" class="dropdown-toggle">
							<i class="menu-icon fa fa-tag"></i>
							<span class="menu-text"> Pomoć </span>

							<b class="arrow fa fa-angle-down"></b>
						</a>

						<b class="arrow"></b>

						<ul class="submenu">
							<li class="';if($stranica == "Lista skinova") echo "active";echo'">
								<a href="skinovi.php">
									<i class="menu-icon fa fa-caret-right"></i>
									Lista skinova
								</a>

								<b class="arrow"></b>
							</li>

							<li class="';if($stranica == "ID Vozila") echo "active";echo'">
								<a href="vozila.php">
									<i class="menu-icon fa fa-caret-right"></i>
									ID Vozila
								</a>

								<b class="arrow"></b>
							</li>
							
							<li class="';if($stranica == "Boje vozila") echo "active";echo'">
								<a href="boje.php">
									<i class="menu-icon fa fa-caret-right"></i>
									Boje vozila
								</a>

								<b class="arrow"></b>
							</li>							
														
							
							<li class="">
								<a href="http://sa-rpg.com">
									<i class="menu-icon fa fa-caret-right"></i>
									Forum
								</a>

								<b class="arrow"></b>
							</li>
							
							<li class="';if($stranica == "FAQ") echo "active";echo'">
								<a href="faq.php">
									<i class="menu-icon fa fa-caret-right"></i>
									FAQ
								</a>

								<b class="arrow"></b>
							</li>
						</ul>
					</li>';
					
		if(isset($_COOKIE["user"]))
		{
					echo '

					<li class="';if($stranica == "Postavke") echo "active";echo'">
						<a href="postavke.php">
							<i class="menu-icon fa fa-pencil-square-o"></i>
							<span class="menu-text"> Postavke </span>

						</a>

						
					</li>';
		}
		if(isset($_COOKIE["user"]) && $rank >= 1)
		{

					echo '<li class="';if($stranica == "Odobravanje akaunta" || $stranica == "Uređivanje banova" || $stranica == "Dodavanje banova" || $stranica == "Uređivanje korisnika" || $stranica == "Postavljanje donacija"  || $stranica == "Brisanje korisnika") echo "active";echo'">
						<a href="#" class="dropdown-toggle">
							<i class="menu-icon fa fa-list-alt"></i>
							<span class="menu-text"> Admin panel </span>

						<b class="arrow fa fa-angle-down"></b>
						</a>

						<b class="arrow"></b>

						<ul class="submenu">
								<li class="';if($stranica == "Odobravanje akaunta" ) echo "active";echo'">
								<a href="oakk.php">
									<i class="menu-icon fa fa-caret-right"></i>
									Odobravanje akaunta
								</a>

								<b class="arrow"></b>
							</li>
									<li class="';if($stranica == "Uređivanje banova" || $stranica == "Dodavanje banova") echo "active";echo'">
								<a href="" class="dropdown-toggle">
									<i class="menu-icon fa fa-caret-right"></i>
									Banovi
								</a>
								<b class="arrow"></b>
								<ul class="submenu">
								<li class="';if($stranica == "Uređivanje banova") echo "active";echo'">
								<a href="bans.php">
									<i class="menu-icon fa fa-caret-right"></i>
									Unban korisnika
								</a>	
								</li>
								
								<li class="';if($stranica == "Dodavanje banova") echo "active";echo'">
								<a href="dodajban.php">
									<i class="menu-icon fa fa-caret-right"></i>
									Banovanje korisnika
								</a>	
								</li>
								</ul>

								
							</li>';
							
		}
		
		if(isset($_COOKIE["user"]) && $rank >= 6)
		{
			
			echo'
									<li class="';if($stranica == "Uređivanje korisnika" || $stranica == "Brisanje korisnika" || $stranica == "Postavljanje donacija") echo "active";echo'">
								<a href="" class="dropdown-toggle">
									<i class="menu-icon fa fa-caret-right"></i>
									Korisnici
								</a>

								<b class="arrow"></b>
								
							<ul class="submenu">';
		}
		if(isset($_COOKIE["user"]) && $rank >= 1337)
		{
			echo'
							<li class="';if($stranica == "Uređivanje korisnika") echo "active";echo'">
								<a href="korisnici.php">
									<i class="menu-icon fa fa-caret-right"></i>
									Uređivanje korisnika
								</a>

								<b class="arrow"></b>
							</li>
							<li class="';if($stranica == "Brisanje korisnika") echo "active";echo'">
								<a href="bkorisnika.php">
									<i class="menu-icon fa fa-caret-right"></i>
									Brisanje korisnika
								</a>

								<b class="arrow"></b>
							</li>';
		}
		if(isset($_COOKIE["user"]) && $rank >= 6)
		{
			echo'
							<li class="';if($stranica == "Postavljanje donacija") echo "active";echo'">
								<a href="pdonator.php">
									<i class="menu-icon fa fa-caret-right"></i>
									Postavljanje donacija
								</a>

								<b class="arrow"></b>
							</li>
							
							</ul>
							</li>

									

							
						</ul>
					</li>';
		}
		if(isset($_COOKIE["user"]))
		{
				echo '<li class="">
						<a href="odjava.php">
							<i class="menu-icon fa fa-file-o"></i>
							<span class="menu-text"> Odjava </span>

						</a>
				</li>';
		}
		if(!isset($_COOKIE["user"]))
		{
				echo '<li class="';if($stranica == "Registracija") echo "active";echo'">
						<a href="register.php">
							<i class="menu-icon fa fa-file-o"></i>
							<span class="menu-text"> Registracija </span>

						</a>
				</li>';
		}
	?>
					
				</ul><!-- /.nav-list -->

				<!-- #section:basics/sidebar.layout.minimize -->
				<div class="sidebar-toggle sidebar-collapse" id="sidebar-collapse">
					<i class="ace-icon fa fa-angle-double-left" data-icon1="ace-icon fa fa-angle-double-left" data-icon2="ace-icon fa fa-angle-double-right"></i>
				</div>

				<!-- /section:basics/sidebar.layout.minimize -->
				<script type="text/javascript">
					try{ace.settings.check('sidebar' , 'collapsed')}catch(e){}
				</script>
			</div>

			<!-- /section:basics/sidebar -->