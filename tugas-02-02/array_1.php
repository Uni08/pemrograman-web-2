<!DOCTYPE html>
<html>
<head>
<title>Mengakses Variabel Array</title>
<style>
    .warna{
        background-color: orange;
    }
    </style>
<link
href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/boots
trap.min.css" rel="stylesheet"
integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXS
U1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>
<?php
$mahasiswa = array
(
array("nim"=>"TI-001", "nama_mahasiswa"=>"Andi",
"program_studi"=>"Teknik Informatika"),
array("nim"=>"TI-002", "nama_mahasiswa"=>"Budi",
"program_studi"=>"Teknik Informatika"),
array("nim"=>"TI-003", "nama_mahasiswa"=>"Wati",
"program_studi"=>"Teknik Informatika"),
array("nim"=>"SI-001", "nama_mahasiswa"=>"Fatma",
"program_studi"=>"Sistem Informasi"),
array("nim"=>"SI-002", "nama_mahasiswa"=>"Wawan",
"program_studi"=>"Sistem Informasi")
);
?>
<table class="table table-striped" table border="1" cellpadding="10" cellspacing="0" align="center">
<tr>
<th class="warna">NIM</th>
<th class="warna">Nama Mahasiswa</th>
<th class="warna">Program Studi</th>
</tr>
<?php foreach ($mahasiswa as $mhs) : ?>
    <tr>
        <td><?php echo $mhs["nim"]; ?></td>
        <td><?php echo $mhs["nama_mahasiswa"]; ?></td>
        <td><?php echo $mhs["program_studi"]; ?></td>
</tr>
<?php endforeach; ?>
</table>
</body>
</html>