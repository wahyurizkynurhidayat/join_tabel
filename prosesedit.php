<?php
include("koneksi.php");
isset($_POST['update']);
 $id = $_POST['id_siswa'];
 $nama = $_POST['nama'];
 $kelas = $_POST['kelas'];
 $nama_jurusan = $_POST['nama_jurusan'];
 $tahun = $_POST['tahun'];
 $nominal = $_POST['nominal'];

$sql = "UPDATE tb_siswa set nama='$nama', kelas='$kelas', where id_siswa'$id'";
$query = mysqli_query($db,$sql);

$sql = "UPDATE tb_jurusan set nama_jurusan '$nama_jurusan' where id_jurusan'$id'";
$query = mysqli_query($db,$sql);

$sql = "UPDATE tb_spp set tahun='$tahun', nominal='$nominal' where id_spp'$id'";
$query = mysqli_query($db,$sql);

if(query){
    header("location:db_join.php?status=sukses");
} else {
    header("location:db_join.php?status=gagal");
}
?>