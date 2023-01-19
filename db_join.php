<!DOCTYPE html>
<html>
<head>
 <title>Join Table</title>
</head>
<body>
  <center>
<h4> <a href=form_pendaftaran.php>Tambah Siswa</a></h4>
<link rel="stylesheet" href="style1.css">
<link rel="icon" type="image/x-icon" href="gaje.jpg">
 <table border="1">
  <tr>
   <td>No.</td>
   <td>Nama</td>
   <td>Kelas</td>
   <td>Jurusan</td>
   <td>Tahun</td>
   <td>Nominal</td>
   <td>Aksi</td>
  </tr>
  
  <?php
  include("koneksi.php");
  $query = mysqli_query($db, "SELECT * FROM tb_siswa INNER JOIN tb_jurusan ON tb_siswa.id_jurusan =
  tb_jurusan.id_jurusan INNER JOIN tb_spp ON tb_siswa.id_spp= tb_spp.id_spp");
  $no = 1;
  foreach ($query as $row):
    ?>

    <tr>
        <td><?= $no++; ?></td>
        <td><?= $row['nama']; ?></td>
        <td><?= $row['kelas']; ?></td>
        <td><?= $row['nama_jurusan']; ?></td>
        <td><?= $row['tahun']; ?></td>
        <td><?= $row['nominal']; ?></td>
        <td>
          <a href=edit.php?id_siswa<?=$row['id_siswa'];?>>Edit ||</a>
          <a href=hapus.php?id_siswa<?=$row['id_siswa'];?>>Hapus </a> 
  </tr>

  <?php endforeach; ?>

  </table>
  <footer>
      <ul>
      <p>Author: Wahyu Rizky Nurhidayat</p>
      </ul>
    </footer>
  </body>
  </html>