<?php
	$id = $_GET['id'];
	$num = null;
	$basket = [];
	if (isset($_POST['q'])){
		$num = $_POST['q'];
	}
	if (isset($_COOKIE["basket"])){
		$basket = json_decode($_COOKIE["basket"]);
	}		
	$b= array('id' => $id, 
	'num' => $num);
	array_push($basket,$b);
	$myfile = fopen("ajax.json","w");
	setcookie("basket",json_encode($basket));
	fwrite($myfile,json_encode($basket));
	fclose($myfile);
	header("Location: http://localhost/Commercialproject/shop-single.php?id=".$id);
	die();
?>