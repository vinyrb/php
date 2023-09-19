<?php 
   $kon = mysqli_connect("localhost", "root", "") or die("Tidak bisa terhubung ke server");
   mysqli_select_db($kon, "pwpb_user") or die("Tidak dapat menemukan database");
   $sql = "SELECT * FROM login";
   $result = mysqli_query($kon, $sql);
 ?>

 <!DOCTYPE html>
 <html>
 <head>
   <meta charset="utf-8">
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <title>Lihat data pengguna</title>
    <link rel="stylesheet" type="text/css" href="style.css">
 </head>
 <body>


   <h1>Data pengguna</h1>
   <a href="users.php">Kembali</a>
   <table border="1px"  cellpadding="10px" cellspacing="5px">
      <tr style="background-color:#f54e42; color:#fff; font-size:19px;">
         <td>ID #</td>
         <td>Username</td>
         <td>Name</td>
         <td>Email</td>
         <td>Password</td>
         <td>Aksi</td>
      </tr>
      <?php 
         while($row = mysqli_fetch_array($result)){
            echo "<tr>";
            echo "<td>" . $row['id'] . "</td>";
            echo "<td>" . $row['username'] . "</td>";
            echo "<td>" . $row['name'] . "</td>";
            echo "<td>" . $row['email'] . "</td>";
            echo "<td>" . $row['pass'] . "</td>";
            echo "<td><a href=\"edit_user.php?id=" . $row['id'] . "\"> Edit</a> ";
                echo "<a href=\"delete_user.php?id=" . $row['id'] . "\"> Hapus</a></td>";
            echo "</tr>";
         }
       ?>
   </table>
 </body>
 </html>
 <?php 
   mysqli_close($kon);
  ?>