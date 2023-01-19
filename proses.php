<?php
include("koneksi.php");
if (isset($_POST['submit'])){
 $nama = $_POST['nama'];
 $kelas = $_POST['kelas'];
 $nama_jurusan = $_POST['jurusan'];
 $tahun = $_POST['tahun'];
 $nominal = $_POST['nominal'];
 
 $sql = "INSERT INTO tb_jurusan (nama_jurusan)VALUES('$nama_jurusan')";
 $query = mysqli_query ($db,$sql);

 $sql = "SELECT max(id_jurusan)AS jurusan_id FROM tb_jurusan LIMIT 1";
 $query = mysqli_query($db,$sql);

 $sql = "INSERT INTO tb_spp (tahun,nominal)VALUES('$tahun','$nominal')";
 $query = mysqli_query($db,$sql);

 $sql = "SELECT max(id_jurusan)AS jurusan_id FROM tb_jurusan LIMIT 1";
 $query = mysqli_query($db,$sql);

 $data = mysqli_fetch_array($query);
 $jurusan_id = $data['jurusan_id'];

$sql = "SELECT max(id_spp)AS fast_id FROM tb_spp LIMIT 1";
$query = mysqli_query($db,$sql);

$data = mysqli_fetch_array($query);
$fast_id = $data['fast_id'];

$sql = "INSERT INTO tb_siswa(nama,kelas,id_jurusan,id_spp)VALUES('$nama','$kelas','$jurusan_id','$fast_id')";
$query = mysqli_query($db,$sql);

if($query){
    header('location:db_join.php?status=sukses');
}else{
    header('location:form_pendaftaran.php?status=gagal');
}
}
?>