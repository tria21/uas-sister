<!DOCTYPE html>
<html>
<head>
    <title>Tugas Pemrogaman Web </title>
    <link href="style.css" rel="stylesheet" type="text/css">
</head>
<body>
    <div class="box-form">

        <div class="title-form">
            DATA MAHASISWA
        </div>

        <div class="content-form">
            <form action="PROSESMODUL6.php" method="get"> 
            Silahkan isi form mahasiswa dibawah ini<br>
            Nama Mahasiswa:<input type="text" name="fullname" id=""><br>
        Jenis Kelamin :<input type= "radio" name="Jenis_Kelamin" value="laki_laki">Laki-Laki
        <input type="radio" name="Jenis_Kelamin" value="perempuan">Perempuan <br>

            Program Studi :
            <select name="Program_Studi">
            <option>Sistem Informasi</option>
            <option>Teknik Informatika</option>
            </select><br>
            <input type="submit" value="continue"><br>
            </form>
        </div>
    </div>
</body>
</html>