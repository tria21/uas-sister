<?php
  include 'koneksi.php';

    $id = $_POST['id']; 
    $nama = $_POST['nama']; 
    $jenis_kelamin = $_POST['jenis_kelamin'];
    $program_studi = $_POST['program_studi'];

  if(isset($_POST['simpan'])) {
    extract($_POST);
    mysqli_query($conn,
      "UPDATE prodi
      SET id='$id', nama='$nama', jenis_kelamin='$jenis_kelamin', program_studi='$program_studi'
      WHERE id = '$id'"
    );
    header("location: mahasiswa.php");
  }else {
    header("location: edit.php");
  }
?>