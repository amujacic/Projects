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
							<li class="active">Postavke</li>
							
						
						</ul><!-- /.breadcrumb -->

						
					</div>

					<!-- /section:basics/content.breadcrumbs -->
					<div class="page-content">
			
						<div class="page-header">
							<h1>
								Postavke
								
							</h1>
						</div><!-- /.page-header -->
						
						<div class="row">
							<div class="col-xs-12">
								<!-- PAGE CONTENT BEGINS -->
								<div class="row">
									<div class="col-xs-4">
										 
			
        	<center><h4 style="color:#438EB9">Promjeni password</h4></center><br>
       			 
				 
<center>
        <form action="promjenipw.php" method="post">

          <fieldset>

            <p><label for="pstaripw">Stari password</label></p>
            <p><input type="password" name="pstaripw" placeholder="stari password"></p>

            <p><label for="ppassword1">Novi Password</label></p>
            <p><input type="password" name="ppassword1" placeholder="password"></p>
            
            <p><label for="ppassword2">Ponovi password</label></p>
            <p><input type="password" name="ppassword2" placeholder="password"></p>

            <p><input type="submit" class="btn btn-success" value="Promjeni"></p>

          </fieldset>

        </form>
   <?php if($_GET['pgreska'] == 1) echo '<center><p style="color: red; font-weight: bold;"> Passwordi se ne podudaraju</p></center>';
  		 if($_GET['pgreska'] == 2) echo '<center><p style="color: red; font-weight: bold;"> Pogrešan stari password!</p></center>';
   		if($_GET['pgreska'] == 3) echo '<center><p style="color: red; font-weight: bold;">Novi password mora biti duži od 6 karaktera!</p></center>';
		if($_GET['pgreska'] == 5) echo '<center><p style="color: green; font-weight: bold;"> Password uspješno promijenjen!</p></center>';?>
</center></div>
	     
		   
	        	
                <div class="col-xs-4">
        	<center><h4 style="color:#438EB9">Promjeni e-Mail</h4></center><br>
       		
               
				 
<center>
        <form action="promjenimail.php" method="POST">

          <fieldset>

            <p><label for="mstaripw">Vaš password</label></p>
            <p><input type="password" name="mstaripw" placeholder="password"></p>

            <p><label for="mail1">Novi e-Mail</label></p>
            <p><input type="text" name="mail1" placeholder="novi mail" style="width:240px"></p>
            
            <p><label for="mail2">Ponovi e-Mail</label></p>
            <p><input type="text" name="mail2" placeholder="novi mail" style="width:240px"></p>

            <p><input type="submit" class="btn btn-success" value="Promjeni"></p>

          </fieldset>

        </form>
        <?php if($_GET['mgreska'] == 1) echo '<center><p style="color: red; font-weight: bold;"> Mailovi se ne podudaraju</p></center>';
   		 if($_GET['mgreska'] == 2) echo '<center><p style="color: red; font-weight: bold;">Molimo unesite ispravan e-Mail!</p></center>';
		if($_GET['mgreska'] == 3) echo '<center><p style="color: red; font-weight: bold;">Pogrešan password!</p></center>';
		if($_GET['mgreska'] == 5) echo '<center><p style="color: green; font-weight: bold;"> Mail uspješno promijenjen!</p></center>';?>
</center>
	       
</div>
<div class="col-xs-4">
        	<center><h4 style="color:#438EB9">Resetuj password</h4></center><br>
       		
				 
<center>
<span style="color:red; font-weight:bold;">UPOZORENJE: Resetovanjem passworda šaljemo vam novi password koji se automatski generiše na vašu e-Mail adresu koju ste unjeli prilikom registracije na server. Ako niste u mogućnosti pristupiti svome e-Mail akauntu ne preporučujemo vam resetovanje passworda, te u tom slučaju možete koristiti opciju "Promjena passworda". </span><br> <br>
        <form action="resetujpw.php" method="POST">

          <fieldset>
          	<p><label for="rstaripw">Stari password</label></p>
            <p><input type="password" name="rstaripw" placeholder="password"></p>
            
            <p><input type="submit" class="btn btn-success" value="Resetuj"></p>

          </fieldset>

        </form>
         <?php if($_GET['rgreska'] == 1) echo '<center><p style="color: red; font-weight: bold;"> Netačan password!</p></center>';
		if($_GET['rgreska'] == 5) echo '<center><p style="color: green; font-weight: bold;"> Password uspješno resetovan!</p></center>';?>
</center>
</div>
	       
									
								</div><!-- /.row -->

							
					</div><!-- /.page-content -->
				</div>
			</div><!-- /.main-content -->
			
			</div>
														</div>

<?php include("footer.php"); ?>