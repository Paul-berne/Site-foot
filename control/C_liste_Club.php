<?php
include_once('../model/club.php');
include_once('../model/GestionClub.php');
$dsn ='pgsql:host=localhost;dbname=site-foot;password=Paulberne13?;user=postgres;port=5432';
$cnx = new PDO($dsn);
$gc = new GestionClub($cnx);
$t = [];
$t=$gc->getLIsteClub();
include("../view/V_listeclub.php");
?>