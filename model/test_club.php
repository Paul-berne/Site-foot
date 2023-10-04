<?php
include_once('club.php');
include_once('GestionClub.php');
$dsn ='pgsql:host=localhost;dbname=site-foot;password=Paulberne13?;user=postgres;port=5432';
$cnx = new PDO($dsn);
$gc = new GestionClub($cnx);
$t=$gc->getLIsteClub();

 for ($i = 1; $i <= 10; $i++){
    echo $t[$i]->getNomClub();
    
 }

?>