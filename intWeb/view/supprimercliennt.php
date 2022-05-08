<?php
	include '../Controller/clienntC.php';
	$clienntC=new clienntC();
	$clienntC->supprimercliennt($_GET["id"]);
	header('Location: affichercliennt.php');
?>