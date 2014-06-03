<?php
//mysql

$host = "localhost";
$user = "root";
$pass = "";
$base = "gestion";

mysql_connect($host,$user,$pass);
mysql_select_db($base);

$rootsite = "http://127.0.0.1/GCO/";

//Formatae Date
date_default_timezone_set('UTC');
$date = date("d-m-Y");
$date_mois = date("m");
$date_mois_deb = "01-".$date_mois."-2014";
$date_mois_fin = "31-".$date_mois."-2014";

//Server

$sql_server = mysql_query("SELECT * FROM server");
$donnee_server = mysql_fetch_array($sql_server);

$error = mysql_error();

?>