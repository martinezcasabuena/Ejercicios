<?php
		require_once("class.php");
		
		session_start();
		//print_r($_SESSION);
		//die();
		
		$nuevo = new Usuarios();
		$rdo = $nuevo->nuevo_usuario($_SESSION['nom'],$_SESSION['contrasenya'],$_SESSION['email'],$_SESSION['asunto'],$_SESSION['mensaje']);
		print_r($rdo);
		echo "<br>";
		
		$rdo = $nuevo->list_fetch_assoc_usuario();
		echo $rdo;
		echo "<br>";
