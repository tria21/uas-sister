<!-- source CRUD https://www.malasngoding.com/membuat-crud-dengan-php-dan-mysql-input-data/ -->
<?php
    //menghubungkan koneksi database
    include 'koneksi.php';

    //memasukkan data ke array
    // $id = $_POST['id'];
    $nama           = $_POST['nama']; 
    $jenis_kelamin  = $_POST['jenis_kelamin']; 
    $program_studi  = $_POST['program_studi'];

    //membuat query untuk input data
    // $sql = "INSERT INTO prodi VALUES('$id, $nama','$jenis_kelamin','$program_studi')"; 
    $sql = "INSERT INTO prodi SET nama='$nama', jenis_kelamin='$jenis_kelamin', program_studi='$program_studi'"; 
    $query = mysqli_query($conn, $sql); 

    //kembali ke halaman sebelumnya
    header("location: mahasiswa.php");