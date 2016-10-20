<?php
	require 'adm_login.php';
	if (isset($_POST['meno']) AND isset($_POST['heslo'])) {
		//osetrenie vstupu od pouyivatela 
		$meno = htmlspecialchars($_POST['meno'],ENT_QUOTES);
		$heslo = htmlspecialchars($_POST['heslo'],ENT_QUOTES);
		if (empty($meno)) {
			die("prihlasovacie meno je potrebne");
		}
		if (empty($heslo)) {
			die("heslo je potrebne");
		}
		if (ADMLOGIN == $meno) {
			if (ADMPASS == $heslo) {
				//login uspesny
				session_start();
				$_SESSION['user'] = $meno;
				if(isset($_SESSION['user'])){
					header("location: index.php");
				}
			}else{
				die("nesprávne heslo");
			}
		}else{
			die("nesprávne meno");
		}
	}else{
		die('Nič tu nie je !');
	}
?>