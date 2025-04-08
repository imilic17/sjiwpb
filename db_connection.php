<?php

$server="localhost";
$username="root";
$password="";
$Baza="pregledadresa";

$db=mysqli_connect ($server,$username,$password);
$db_selected=mysqli_select_db($db,$Baza);

if(!$db){
	
	die("Baza neuspjesno spojena: ".mysqli_connect_errno());
}
?>