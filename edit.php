<?php
include("koneksi.php");
if(!isset($_GET['id_peminjam'])){
    header("location:tampil.php");
}

$id=$_GET['id_peminjam'];
$sql="SELECT * FROM tb_peminjam INNER JOIN tb_motor ON tb_peminjam.id_motor= tb_motor.id_motor WHERE tb_peminjam.id_peminjam";
$query=mysqli_query($koneksi,$sql);
$row=mysqli_fetch_assoc($query);
?>

<html>
    <head>
</head>
<body>
    <center>
    <h1>FROM EDIT MOTOR</h1>
    <form action="proses_edit.php" method="POST">
        <form>
    <a href="tampil.php"><input type="button" value="kembali"></a>
        <fieldset>

            <p>
            <input type="hidden" name="id_peminjam" value="<?php echo $row ['id_peminjam']?>" />
            </p>

            <p>
                <label for="nama_peminjam"> Nama Peminjam </label>
                 <input type="text" name="nama_peminjam" value="<?php echo $row ['nama_peminjam']?>" />
            </p>

            <p>
                <label for="alamat"> Alamat </label>
                 <input type="text" name="alamat" value="<?php echo $row ['alamat']?>" />
            </p>

            <p>
                <label for="umur"> Umur </label>
                 <input type="number" name="umur" value="<?php echo $row ['umur']?>"/>
            </p>

            <p>
                <label for="keperluan"> Keperluan </label>
                 <input type="text" name="keperluan" value="<?php echo $row ['keperluan']?>" />
            </p>

            <p>
                <label for="jaminan"> Jaminan </label>
                 <input type="text" name="jaminan" value="<?php echo $row ['jaminan']?>" />
            </p>

            <p>
                <label for="nomor_motor"> Nomor Motor</label>
                 <input type="number" name="nomor_motor" value="<?php echo $row ['nomor_motor']?>" />
            </p>

            <p>
                <label for="merek"> Merek </label>
                 <input type="text" name="merek" value="<?php echo $row ['merek']?>" />
            </p>

            <p>
                <label for="jenis_motor"> Jenis Motor </label>
                 <input type="text" name="jenis_motor" value="<?php echo $row ['jenis_motor']?>" />
            </p>

            <p>
                <label for="tahun_motor"> Tahun Motor</label>
                 <input type="number" name="tahun_motor" value="<?php echo $row ['tahun_motor']?>" />
            </p>

            <p>
                <label for="tanggal_pinjam"> Tanggal Pinjam </label>
                 <input type="date" name="tanggal_pinjam" value="<?php echo $row ['tanggal_pinjam']?>" />
            </p>

            <p>
                <label for="tanggal_kembali"> Tanggal Kembali </label>
                 <input type="date" name="tanggal_kembali" value="<?php echo $row ['tanggal_kembali']?>" />
            </p>

           <p>
               <input type="submit" value="edit" name="edit" />
         </p>

</fieldset>
</form>
</body>
<html>