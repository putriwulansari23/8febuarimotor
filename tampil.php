<?php
include("koneksi.php");
?>

<html>
    <head>
</head>
<body>
<h1> Data Motor </h1>
<h4> <a href= "tambah.php">Tambah Motor</a></h4>
<table border="1">
    <tr>
        <th>Nomer</th>
        <th>Nama Peminjam</th>
        <th>Alamat</th>
        <th>Umur</th>
        <th>Keperluan</th>
        <th>Jaminan</th>
        <th>Nomor Motor</th>
        <th>Merek</th>
        <th>Jenis Motor</th>
        <th>Tahun Motor</th>
        <th>Tanggal Pinjam</th>
        <th>Tanggal Kembali</th>
</tr>
<?php
include("koneksi.php");
$sql="SELECT * FROM tb_peminjam INNER JOIN tb_motor ON tb_peminjam.id_motor= tb_motor.id_motor";
$query= mysqli_query($koneksi, $sql);

while($row=mysqli_fetch_array($query)){
    echo"<tr>";
    echo"<td>".$row['id_peminjam']."</td.>";
    echo"<td>".$row['nama_peminjam']."</td>";
    echo"<td>".$row['alamat']."</td.>";
    echo"<td>".$row['umur']."</td>";
    echo"<td>".$row['keperluan']."</td>";
    echo"<td>".$row['jaminan']."</td>";
    echo"<td>".$row['nomor_motor']."</td.>";
    echo"<td>".$row['merek']."</td>";
    echo"<td>".$row['jenis_motor']."</td.>";
    echo"<td>".$row['tahun_motor']."</td>";
    echo"<td>".$row['tanggal_pinjam']."</td.>";
    echo"<td>".$row['tanggal_kembali']."</td>";
    echo"<td>";
    echo"<a href='edit.php?id_peminjam=".$row['id_peminjam']."'>Edit</a>|";
    echo"<a href='hapus.php?id_peminjam=".$row['id_peminjam']."'>Hapus</a>|";
    echo"</td>";
    echo"</tr>";
}
?>
</table>
</body>
</html>

