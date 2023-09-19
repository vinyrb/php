<?php 
	$id = $_GET['id'];
	$kon = mysqli_connect("localhost", "root", "") or die("Tidak bisa terhubung ke server");
	mysqli_select_db($kon, "pwpb_user") or die("Tidak dapat menemukan database");
	$sql = "SELECT * FROM login WHERE id = $id LIMIT 1";
	$result = mysqli_query($kon,$sql);
	$row = mysqli_fetch_array($result);
 ?>

 <!DOCTYPE html>
 <html>
 <head>
 	<meta charset="utf-8">
 	<meta name="viewport" content="width=device-width, initial-scale=1">
 	<title>Edit pengguna</title>
 	<link rel="stylesheet" type="text/css" href="style.css">
 </head>
 <body>
 	<hr>
 	<form method="POST" action="update_user.php">
 		<h1>Edit Pengguna</h1>
 		<input type="number" name="id" value="<?php echo $row['id'] ?>" readonly>
 		<input type="text" name="username" value="<?php echo $row['username'] ?>" required>
		<input type="text" name="name" value="<?php echo $row['name'] ?>" required>
		<input type="email" name="email" value="<?php echo $row['email'] ?>" required>
		<input type="password" name="password" value="<?php echo $row['pass'] ?>" required>
		<input type="submit" name="submit" value="Simpan">
		<input type="button" name="batal" onclick="location.href = 'view_user.php'" value="Batal">
 	</form>
 </body>
 </html>