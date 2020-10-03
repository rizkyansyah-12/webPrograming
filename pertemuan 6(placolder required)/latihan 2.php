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

if (isset($_POST["submit"])) {
    $nama = $_POST['nama'];
    $tempat_lahir = $_POST['tempat_lahir'];
    $tgl_lahir = $_POST['tgl_lahir'];
    $nik_nip = $_POST['nik_nip'];
    $email = $_POST['email'];
    $telp = $_POST['telp'];
    $telp_wali = $_POST['telp_wali'];
    $pekerjaan = $_POST['pekerjaan'];
    $alamat = $_POST['alamat'];
    $prog_akademi = $_POST['prog_akademi'];
    $tema_pelatihan = $_POST['tema_pelatihan'];
    $mitra_pelatihan = $_POST['mitra_pelatihan'];

    //inser data
    $result = "INSERT INTO registrasi VALUES ('', '$nama','$tempat_lahir','$tgl_lahir', '$nik_nip', '$email', 'telp', $'telp_wali', 'pekerjaan', '$alamat', '$prog_akademi', '$tema_pelatihan', '$mitra_pelatihan')";
    $sql = mysqli_query($koneksi, $result);

    //pencegahan data berhasil masuk dan/gagal
    if ($sql) {
        echo " <script> alert ('Data Berhasil Ditambahkan');</script> ";
    }   else{
        echo " <script> alert ('Data Gagal Ditambahkan');</script> ";
    }
}
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
                                <td><label for="nama">Nama Lengkap (Sesuai KTP)</label> </td>
                                <td> : <input type="text" name="nama" placeholder="Masukan Nama Lengkap" required></td>
                            </tr>
                            <tr>
                                <td><label for="tempat_lahir">Tempat Lahir </label> </td>
                                <td> : <input type="text" name="tempat_lahir" placeholder="Masukan tempat_Lahir" required><br></td>
                            </tr>
                            <tr>
                             <td><label for="tgl_lahir">Tanggal Lahir </label> </td>
                             <td>: <input type="date" name="tgl_lahir" required><br></td>
                         </tr>
                         <tr>
                            <td><label for="nik_nip">NIK_NIP </label> </td>
                            <td>: <input type="text" name="nik_nip" placeholder="Masukan NIKN_IP" required></td>
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
                        <tr>
                            <td>1</td>
                            <td>M. Iqbal Adenan</td>
                            <td>Kuala Kapuas</td>
                            <td>17 Oktober 1992</td>
                            <td>085249099652</td>
                            <td>kumpultugas17@gmail.com</td>
                            <td><button>Edit</button> <button>Hapus</button></td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td>Agus Setiawan</td>
                            <td>Banjarmasin</td>
                            <td>4 Agustus 1992</td>
                            <td>087843969674</td>
                            <td>agus@gmail.com</td>
                            <td><button>Edit</button> <button>Hapus</button></td>
                        </tr>

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