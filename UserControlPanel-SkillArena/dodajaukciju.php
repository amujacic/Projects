<?php
include "baza.php";

					$promjena = "INSERT INTO `aukcija` (IgracProdaje, VrstaImovine, IDImovine, IgracPonudio, Ponuda)
							VALUES ('James_Lead', 3, 46, 'Država', 130000)";				
					mysql_query($promjena) or die(mysql_error());				



?>