<?php 
require_once('koneksi.php');
if (isset($_GET['submit'])) {
  $nama = $_GET['nama'];
  $jurusan = $_GET['jurusan'];

  $query =  "INSERT INTO `siswa` (`murid_id`, `nama`, `jurusan`) VALUES (NULL, `$nama`, `$jurusan`);";
  $koneksi->query($query);

}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <from action=""method="GET">
        <label for="nama" name="nama">nama</label>
        <input type="text" name="nama" id="">
        <br>
        <label for="jurusan"  name="jurusan">jurusan</label>
        <input type="text" name="jurusan" id="">
        <br>
        <button type="submit" name="submit">submit</button>
    </from>
</body>
</html>