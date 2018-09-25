<h1>Hello</h1>
<form action="" method="POST">
	<label>Hobi</label>
	<tr>
		<td><input type="checkbox" name="hobi[]" value="Menulis">Menulis</td>
		<td><input type="checkbox" name="hobi[]" value="Membaca">Membaca</td>
		<td><input type="checkbox" name="hobi[]" value="Futsal">Futsal</td>
	</tr><br>
	<tr>
		<label>Gambar</label>
		<td><input type="file" name="gambar[]"></td><br>
	</tr><br>	
	<tr>
		<td><input type="submit" name="submit2" value="submit"></td>
	</tr>
</form>
<?php
 if(isset($_POST['submit2'])){
 	foreach ($_POST['hobi'] as $hobii) {
 		
 		echo $hobii."<br>";
 	}
 }
?>
