<?php 
	$username = $_POST['username'];
	$name = $_POST['name'];
	$email = $_POST['email'];
	$password = $_POST['password'];

	$kon = mysqli_connect("localhost", "root", "") or die("Tidak bisa terhubung ke server");
	mysqli_select_db($kon, "pwpb_user") or die("Tidak dapat menemukan database");

	$sql = "INSERT INTO login (username,name,email,pass) VALUES ('$username', '$name', '$email', '$password')";
	$query = mysqli_query($kon, $sql);
	mysqli_close($kon);
	header('location: users.php');

 ?>