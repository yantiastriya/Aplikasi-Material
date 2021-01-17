<?php 
include "koneksi.php";
$result = mysqli_query($koneksi, "SELECT*FROM material");

?>
<html>
<head>
       <title>Tabel Material</title>
</head>
<body>
  <h1>Tabel Material</h1>
  <table style="align-items: center;" border="1" cellpadding="8" cellspacing="0">
    <tr>
      <td>kode_material</td>
      <td>nama_material</td>
      <td>part_number</td>
      <td>packing_list</td>
    </tr>
    <?php while ($row = mysqli_fetch_array($result)) { ?>
      <tr>
        <td><?= $nomor ?></td>
        <td><?= $row["kode_material"]; ?></td>
        <td><?= $row["nama_material"]; ?></td>
        <td><?= $row["part_number"]; ?></td>
        <td><?= $row["packing_list"]; ?></td>

      </tr>
      <?php $nomor++; ?>
    <?php } ?>
  </table>

</body>
</html>