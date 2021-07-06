<?php
	error_reporting(0);
	$connect = mysqli_connect("localhost","root","") or die("Falha ao conectar");
	$db = mysqli_select_db($connect, "union") or die("Falha ao selecionar a DataBase");
?>