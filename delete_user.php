<?php 
	$id = $_GET['id'];
	$kon = mysqli_connect("localhost", "root", "") or die("Tidak bisa terhubung ke server");
	mysqli_select_db($kon, "pwpb_user") or die("Tidak dapat menemukan database");
	$sql = "DELETE FROM login WHERE id = $id ";
	$result = mysqli_query($kon, $sql);
	mysqli_close($kon);
	header('location: view_user.php');
 ?>