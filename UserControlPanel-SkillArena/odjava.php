<?php

setcookie ("sessid", "", time() - 3600);
setcookie ("user", "", time() - 3600);

header('Location: index.php');

?>