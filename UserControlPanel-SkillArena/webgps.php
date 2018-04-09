<!DOCTYPE HTML>

<html>

<head>

    <title>Skill Arena - WebGPS</title>

    <!-- Disallow users to scale this page -->

    <meta name="viewport" content="initial-scale=1.0, user-scalable=no"/>

    <style type="text/css">

        /* Allow the canvas to use the full height and have no margins */

        html, body, #map-canvas {

            height: 100%;

            margin: 0

        }

    </style>

</head>

<body>

<!-- The container the map is rendered in -->

<div id="map-canvas"></div>



<!-- Load all javascript -->

<script src="http://maps.google.com/maps/api/js?sensor=false"></script>

<script src="js/SanMap.min.js"></script>

<script>

	/*

	 * Define the map types we will be using.

	 *

	 * SanMapType parameters: minZoom, maxZoom, getTileUrlFunction, [optional]tileSize.

	 *

	 * The default value for tileSize is 512.

	 */

	<?php
include "../baza.php";
$aAuto1 = $_GET["auto1"];
$aAuto2 = $_GET["auto2"];
$mMotor = $_GET["motor"];
$bBrod = $_GET["brod"];
$lLetjelica = $_GET["letjelica"];

if($aAuto1 != -1)
{
$autQuery = "SELECT * FROM `vehicles` WHERE id = '" . $aAuto1 . "'";
$autResult = mysql_query($autQuery) or die(mysql_error());
$aut1Fetch = mysql_fetch_object($autResult);		
	
}


if($aAuto2 != -1)
{
$autQuery = "SELECT * FROM `vehicles` WHERE id = '" . $aAuto2 . "'";
$autResult = mysql_query($autQuery) or die(mysql_error());
$aut2Fetch = mysql_fetch_object($autResult);	

	
}


if($bBrod != -1)
{
$autQuery = "SELECT * FROM `boats` WHERE id = '" . $bBrod . "'";
$autResult = mysql_query($autQuery) or die(mysql_error());
$brdFetch = mysql_fetch_object($autResult);	

	
}



if($mMotor != -1)
{
$autQuery = "SELECT * FROM `motorcycles` WHERE id = '" . $mMotor . "'";
$autResult = mysql_query($autQuery) or die(mysql_error());
$mtrFetch = mysql_fetch_object($autResult);	

	
}



if($lLetjelica != -1)
{
$autQuery = "SELECT * FROM `airplanes` WHERE id = '" . $lLetjelica . "'";
$autResult = mysql_query($autQuery) or die(mysql_error());
$letFetch = mysql_fetch_object($autResult);	
	
	
}



?>

    var mapType = new SanMapType(0, 3, function (zoom, x, y) {

        return x == -1 && y == -1 

		? "SAmap/sanandreas.outer.png" 

		: "SAmap/sanandreas." + zoom + "." + x + "." + y + ".png";//Where the tiles are located

    });

	

    var satType = new SanMapType(0, 3, function (zoom, x, y) {

        return x == -1 && y == -1 

		? null 

		: "SAmap/sanandreas." + zoom + "." + x + "." + y + ".png";//Where the tiles are located

    });

	

	/*

	 * Create the map.

	 *

	 * createMap parameters: canvas, mapTypes, [optional]defaultZoomLevel, 

	 *     [optional]defaultLocation, [optional]allowRepeating, [optional]defaultMapType.

	 *

	 * The default value for defaultZoomLevel is 2.

	 * The default value for defaultLocation is null.

	 * The default value for allowRepeating is false.

	 * The default value for defaultMapType is the first key in mapTypes.

	 */

    var map = SanMap.createMap(document.getElementById('map-canvas'), 

		{'Map': mapType, 'Satellite': satType}, 2, null, false, 'Map');







	/* Create a basic marker near Idlewood. The marker has a custom icon.

	 * When you click on this marker, an info window is shown.

	 */

<?php

if($aAuto1 != -1)
{

?>

	var Auto1Window = new google.maps.InfoWindow({

		content: '<h3>Vozilo ID: <?php echo $aut1Fetch->id ?></h3><p><b>Vlasnik: <?php echo $aut1Fetch->ownername ?></b></p><p><b>Zaključan: <?php if($aut1Fetch->locked == 0) echo "Ne"; else echo "Da"; ?></b></p><p><img src="/Vozila/Vehicle_<?php echo $aut1Fetch->model ?>.jpg" /></p>'

	});

	var Auto1Mark = new google.maps.Marker({

		position: SanMap.getLatLngFromPos(<?php echo $aut1Fetch->posx ?>, <?php echo $aut1Fetch->posy ?>),

		map: map,

		icon: 'img/as_icon.gif'

	});

	google.maps.event.addListener(Auto1Mark, 'click', function() {

		map.setCenter(Auto1Mark.position);

		Auto1Window.open(map,Auto1Mark);

	});

<?php } ?>	


<?php

if($aAuto2 != -1)
{

?>

	var Auto2Window = new google.maps.InfoWindow({

		content: '<h3>Vozilo ID: <?php echo $aut2Fetch->id ?></h3><p><b>Vlasnik: <?php echo $aut2Fetch->ownername ?></b></p><p><b>Zaključan: <?php if($aut2Fetch->locked == 0) echo "Ne"; else echo "Da"; ?></b></p><p><img src="/Vozila/Vehicle_<?php echo $aut2Fetch->model ?>.jpg" /></p>'

	});

	var Auto2Mark = new google.maps.Marker({

		position: SanMap.getLatLngFromPos(<?php echo $aut2Fetch->posx ?>, <?php echo $aut2Fetch->posy ?>),

		map: map,

		icon: 'img/as_icon.gif'

	});

	google.maps.event.addListener(Auto2Mark, 'click', function() {

		map.setCenter(Auto2Mark.position);

		Auto2Window.open(map,Auto2Mark);

	});

<?php } ?>	

<?php
if($bBrod != -1)
{

?>

	var BrodWindow = new google.maps.InfoWindow({

		content: '<h3>Vozilo ID: <?php echo $brdFetch->id ?></h3><p><b>Vlasnik: <?php echo $brdFetch->ownername ?></b></p><p><b>Zaključan: <?php if($brdFetch->locked == 0) echo "Ne"; else echo "Da"; ?></b></p><p><img src="/Vozila/Vehicle_<?php echo $brdFetch->model ?>.jpg" /></p>'

	});

	var BrodMark = new google.maps.Marker({

		position: SanMap.getLatLngFromPos(<?php echo $brdFetch->posx ?>, <?php echo $brdFetch->posy ?>),

		map: map,

		icon: 'img/brod.gif'

	});

	google.maps.event.addListener(BrodMark, 'click', function() {

		map.setCenter(BrodMark.position);

		BrodWindow.open(map,BrodMark);

	});

<?php } ?>


<?php
if($mMotor != -1)
{

?>

	var MotorVindow = new google.maps.InfoWindow({

		content: '<h3>Vozilo ID: <?php echo $mtrFetch->id ?></h3><p><b>Vlasnik: <?php echo $mtrFetch->ownername ?></b></p><p><b>Zaključan: <?php if($mtrFetch->locked == 0) echo "Ne"; else echo "Da"; ?></b></p><p><img src="/Vozila/Vehicle_<?php echo $mtrFetch->model ?>.jpg" /></p>'

	});

	var MotorMark = new google.maps.Marker({

		position: SanMap.getLatLngFromPos(<?php echo $mtrFetch->posx ?>, <?php echo $mtrFetch->posy ?>),

		map: map,

		icon: 'img/as_icon.gif'

	});

	google.maps.event.addListener(MotorMark, 'click', function() {

		map.setCenter(MotorMark.position);

		MotorVindow.open(map,MotorMark);

	});

<?php } ?>

<?php
if($lLetjelica != -1)
{

?>

	var LetjelicaWindow = new google.maps.InfoWindow({

		content: '<h3>Vozilo ID: <?php echo $letFetch->id ?></h3><p><b>Vlasnik: <?php echo $letFetch->ownername ?></b></p><p><b>Zaključan: <?php if($letFetch->locked == 0) echo "Ne"; else echo "Da"; ?></b></p><p><img src="/Vozila/Vehicle_<?php echo $letFetch->model ?>.jpg" /></p>'

	});

	var LetjelicaMark = new google.maps.Marker({

		position: SanMap.getLatLngFromPos(<?php echo $letFetch->posx ?>, <?php echo $letFetch->posy ?>),

		map: map,

		icon: 'img/aero.gif'

	});

	google.maps.event.addListener(LetjelicaMark, 'click', function() {

		map.setCenter(LetjelicaMark.position);

		LetjelicaWindow.open(map,LetjelicaMark);

	});

<?php } ?>


</script>

</body>