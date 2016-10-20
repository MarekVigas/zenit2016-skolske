<body>
<?php
	//prihlaseny pouzivatel dostane specificky obsah 
	echo "Vitaj " . $_SESSION['user'];
?>
<form action="add_category.php" method="POST">
	ID:<input type="text" name="id" id="cat_id" required><br>
	Nazov:<input type="text" name="nazov" id="nazov" required><br>
	Popis:<input type="text" name="popis" id="popis" required><br>
	Obrazok:<input type="file" name="obrazok" id="obrazok" required><br>
	<input type="submit" value="Uložiť">
</form>
<br>
<a href="logout.php">Odhlasiť</a>
</body>