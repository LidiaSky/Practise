<?php
	if($_SERVER["REQUEST_METHOD"]!="GET"){
		header("Location: index.php");
		exit(0);
	}
	session_start();
	$role = -1;
	$selfadress = $_SERVER["PHP_SELF"];
	$title="Аукцион: главная страница";
	if(isset($_SESSION["role"])){
		$role = $_SESSION["role"];
		$name = $_SESSION["name"];
	}
	$js_mode = 1;
	include("templates/header.tpl.php");
	
	if($role > -1) {
		include("templates/logined.tpl.php");
	}
	else{
		include("templates/unlogined.tpl.php");
	}
	include ("templates/left.tpl.php");
	include("templates/right.tpl.php");
	include("templates/content.tpl.php");
	
	include("templates/footer.tpl.php");
?>