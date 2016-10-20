<?php
	//Another shit that put shit together for me :D 
	session_start();
	require '../views/admin_head.php';
	if(isset($_SESSION['user'])){
		//zobrazi tento obsah iba ked je pouzivatel prihlaseny
		require '../views/admin_body_logged.php';
	}else{
		require '../views/admin_body.php';	
	}
	require '../views/admin_footer.php';
?>