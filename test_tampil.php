<?php
    require "functions.php";
$sql = $conn->query("SELECT * from user");
              while ($data= $sql->fetch_assoc()) {
              ?>

<td><?php echo $data['nama_pengguna']; ?></td>
<?php } ?>