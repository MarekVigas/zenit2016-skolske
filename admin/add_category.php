<?php
	if(isset($_POST['id']) AND isset($_POST['nazov'])  AND isset($_POST['popis'])  AND isset($_POST['obrazok'])){
		//osetrenie vstupu od pouyivatela 
		$id = htmlspecialchars($_POST['id'],ENT_QUOTES);
		$nazov = htmlspecialchars($_POST['nazov'],ENT_QUOTES);
		$popis = htmlspecialchars($_POST['popis'],ENT_QUOTES);
		$obrazok = $_POST['obrazok'];
		//required validation
		if (empty($id)) {
			die("identifikátor kategórie je potrebny");
		}
		if (empty($nazov)) {
			die("názov kategórie je potrebny");
		}
		if (empty($popis)) {
			die("popis kategórie je potrebny");
		}
		if (empty($obrazok)) {
			die("obrázok je potrebny");
		}
		if (strlen($id) < 2 OR strlen($id) > 8) {
			die("nespravna dlzka id");
		}
		if (strlen($nazov) < 3 OR strlen($nazov) > 32) {
			die("nespravna dlzka nazvu");
		}
		if (strlen($popis) < 5 OR strlen($popis) > 128) {
			die("nespravna dlzka popisu");
		}
		if(!preg_match("/^[a-zA-Z0-9]+$/", $id) == true) {
		    die("nespravny format id");
		}
		$dir = "../gallery/" . $id;
		mkdir($dir);
		
		$header = fopen($dir."/header.txt", "w");
		fwrite($header, $nazov);
		fclose($header);

		$description = fopen($dir."/description.txt", "w");
		fwrite($description, $popis);
		fclose($description);
		//NEMAL SOM CAS NA NAHRAVANIE OBRAZKOV :(
	}else{
		die('Nič tu nie je !');
	}
?>