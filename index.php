<?php
require ("model.php");
require ("view.php");


echo "Biienvenue</br>";


$personnages = getPersonnages ();
//$maisons = getMaisons();


render_all ($personnages);
//render_all ($maisons);


?>
