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
    $tanggal_lahir = $_POST['tanggal_lahir'];
    $nik = $_POST['nik'];
    $email = $_POST['email'];
    $telp = $_POST['telp'];
    $telp_wali = $_POST['telp_wali'];
    $pekerjaan = $_POST['pekerjaan'];
    $alamat = $_POST['alamat'];
    $prog_akademik = $_POST['prog_akademik'];
    $tema_pelatihan = $_POST['tema_pelatihan'];
    $tempat_pelatihan = $_POST['tempat_pelatihan'];
    $mitra_pelatihan = $_POST['mitra_pelatihan'];

    //inser data
    $result = "INSERT INTO registrasi VALUES ( '' , '$nama' , '$tempat_lahir', '$tgll_lahir','$nik','$email','$telp','$telp_wali','$pekerjaan','$alamat','$program_akademik','$tema_pelatihan','$mitra_pelatihan' )";
    $sql = mysqli_master_query($koneksi, $result);

    //pencegahan data berhasil masuk dan/gagal
    if ($sql) {
        echo " <script> alert ('Data Berhasil Ditambahkan');</script> ";
    }   else {
        echo " <script> alert ('Data Gagal Ditambahkan');</script> ";
    }
}
 ?>