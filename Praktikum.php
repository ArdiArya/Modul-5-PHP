<h3>Luas Dan Volume Kubus</h3>

<form action="Praktikum.php" method="post">
	Sisi : <input type="text" name="sisi"><br><br>
	<input type="submit" name="submit" value="Hitung">
</form>

<?php
    if(isset($_POST['submit'])){
		$sisi = $_POST['sisi'];
		
		$luas = 6 * $sisi * $sisi;
		$volume = $sisi * $sisi * $sisi;
		
		echo "Luas Permukaan Kubus : $luas <br>";
		echo "Volume Kubus : $volume";
	}
?>