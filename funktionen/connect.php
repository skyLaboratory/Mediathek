<?php
//Serverconnection Daten
$host		= "192.168.178.5"; //Server der Datenbank
$user		= "root"; //User (mit allen rechten)| wird noch ge�ndert
// f�r lokal test zwecke $pass		= "8uhbgt5";
$db			= "mediathek";
mysql_connect($host,$user);
mysql_select_db($db);
?>