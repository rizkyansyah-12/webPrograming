<?php 
$localhost = 'localhost';
$username = 'root';
$password = '';
$database = 'database-php';

$koneksi = mysqli_connect($localhost, $username, $password, $database);
if (! $koneksi){
    die("koneksi gagal: ". mysqli_connect_error());
}
echo "koneksi berhasil"; 
if (isset($_POST['submit'])) {
    $nama = $_POST['nama'];
    $tempat_lahir= $_POST['tempat_lahir'];
    $tgl_lahir= $_POST['tgl_lahir'];
    $nik= $_POST['nik'];
    $email = $_POST['email'];
    $telp = $_POST['telp'];
    $telp_wali = $_POST['telp_wali'];
    $pekerjaan = $_POST['pekerjaan'];
    $alamat = $_POST['alamat'];
    $prog_akademi = $_POST['prog_akademi'];
    $tema_pelatihan = $_POST['tema_pelatihan'];
    $mitra_pelatihan = $_POST['mitra_pelatihan'];

    //var_dump($nama, $tempat_lahir, $tgl_lahir, $tempat_lahir, $nik, $email, $telp, $telp_wali, $pekerjaan, $alamat, $prog_akademi, $tema_pelatihan, $mitra_pelatihan);
   $result = " INSERT INTO registrasi VALUES ('', '$nama', '$tempat_lahir', '$tgl_lahir', '$nik', '$email', '$telp', '$telp_wali', '$pekerjaan', '$alamat', '$prog_akademi', '$tema_pelatihan', '$mitra_pelatihan')";
   //var_dump($result);
$sql= mysqli_query($koneksi, $result);

if ($sql) {
    echo "<p style ='color:green;'> 'Data Berhasil Ditambahkan!!!'</p>";
} else {
    echo "<p style ='color:read;'>'Data Gagal Ditambahkan!!!'</p> ";
}


}


$rows = "SELECT * FROM registrasi";
$row = mysqli_query($koneksi, $rows);
//var_dump($row)
?>

<!DOCTYPE html>
<Html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tugas Form X PHP</title>
</head> 
<table border="1" align="center" width="800">
    <tr>
        <td>
            <table border="1">
              <tr>
                  <td align="center" width="800"><b>FORM KOMITMEN PARTISIPASI<br>PROGRAM PEMBERIAN BANTUAN PEMERINAH<br>DIGITAL TALENT SCHOOLARSHIP TAHUN 2020</b></td>
              </tr>
          </table>
          <table>
              <tr>
                  <td>
                    <table border="1">
                        <tr>
                            <td> <i> Formulir ini untuk diisi (di ketik atau di tulis tangan dengan jelas) kemudian di unggah/upload di akun digitalent.kominfo.go.id oleh masing-masing peserta di <b> awal</b> pelaksanaan pelatihan.</i></td>
                        </tr>
                    </table>
                    <form action="" method="POST">
                        <table border="1">
                            <tr>
                                <td>Saya Yang bertandatangan di bawah ini</td>
                                <td>:</td>
                            </tr>
                            <tr>
                                <td width="250">Nama</td>
                                <td> : <input type="text" name="nama" placeholder="Masukan Nama Lengkap" required></td>
                            </tr>
                            <tr>
                                <td>Tempat Lahir </td>
                                <td> : <input type="text" name="tempat_lahir" placeholder="Masukan tempat_Lahir" required><br></td>
                            </tr>
                            <tr>
                               <td>Tanggal Lahir</td>
                               <td>: <input type="date" name="tgl_lahir" required><br></td>
                           </tr>
                           <tr>
                            <td><label for="nik">Nik </label> </td>
                            <td>: <input type="text" name="nik" placeholder="Masukan nik" required></td>
                        </tr>
                        <tr>
                            <td><label for="email">Email </label> </td>
                            <td>: <input type="text" name="email" placeholder="Masukan email" required></td>
                        </tr>
                        <tr>
                            <td><label for="telp">Telepon </label> </td>
                            <td>: <input type="text" name="telp" placeholder="Masukan telp" required></td>
                        </tr>
                        <tr>
                            <td><label for="telp_wali">Telepon Wali </label> </td>
                            <td>: <input type="text" name="telp_wali" placeholder="Masukan telp_wali"required></td>
                        </tr>
                        <tr>
                            <td><label for="Pekerjaan"> Pekerjaan </label></td>
                            <td>: <input type="text" name="pekerjaan" placeholder="Pekerjaan" required></td>
                        </tr>
                        <tr>
                         <td><label for="Alamat"> Alamat </label></td>
                         <td>: <textarea id="alamat" cols="40" rows="5" name="alamat" placeholder="Masukan Alamat" required></textarea><br></td>
                     </tr>
                     <tr>
                        <td><label for="prog_akademi"> Program Akademi </label></td>
                        <td>: <input type="text" name="prog_akademi" placeholder="Masukan program_akademi" required></td>
                    </tr>
                    <tr>
                     <td><label for="tema_pelatihan"> Tema Pelatihan </label></td>
                     <td>: <input type="text" name="tema_pelatihan" placeholder="Masukan tema_pelatihan" required></td>
                 </tr>
             </tr>
             <tr>
                <td><label for="mitra_pelatihan"> Mitra Pelatihan </label></td>
                <td>: <input type="text" name="mitra_pelatihan" placeholder="Masukan mitra_pelatihan" required></td>
            </tr>
            <tr>
                <td></td>
                <td><button type="submit" name="submit">Kirim</button>| <button type="button" type="submit">Batal</button></td>
            </tr>
        </table>
    </form>
    <table>
      <tr>
          <td>
            <table  border="1" cellpadding="2" cellspacing="0">
                <tr>
                    <td>No</td>
                    <td>Nama</td>
                    <td>Tempat Lahir</td>
                    <td>Tgl Lahir</td>
                    <td>No. Hp</td>
                    <td>Email</td>
                    <td>Aksi</td>
                </tr>
                <?php $no =1; ?>
                <?php foreach ($row as $key) :
                 ?>
                <tr>
                    <td><?= $no?></td>
                    <td><?= $key['nama']; ?></td>
                    <td><?= $key['tempat_lahir']; ?></td>
                    <td><?= $key['tgl_lahir']; ?></td>
                    <td><?= $key['telp']; ?></td>
                    <td><?= $key['email']; ?></td>
                    <td><button>Edit</button> <button>Hapus</button></td>
                </tr>
                <?php $no++; ?>
            <?php endforeach; ?>
            </table>
        </td>
    </tr>
</table>
</td>
</tr>
</table>

</body>
</center>
</html>