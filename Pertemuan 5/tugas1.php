<?php 

 ?>
 <!DOCTYPE html>
 <html lang="en">
 <head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>VARIABLE GET</title>
 </head>
 <body>
    <h3>GET</h3>
    <form action="latihan 1.1.php" method="POST">
        Nama <input type="text" name="nama"><br>
        Jam kerja <input type="number" name="jam kerja"><br>
        Golongan <input type="text" name="golongan"><br>
        <button type="submit" name="submit">submit</button>
    </form>
 </body>
 </html>
 <?php 
if (isset($_POST['submit'])) {
    $nama = $_POST['nama'];
    $jam_lembur = $_POST['jam lembur'];
    $Golongan = $_POST['golongan'];

    $gaji = $jamkerja * $upah;
    $upahlembur = $upah + $persen;
    $gajilembur = $jamlembur * $upahlembur;  
    $total = $gaji + $gajilembur;
    $gb = $total * 4;



    echo"nama :" .$nama;
    echo"<br> golongan :" .$golongan;
    echo "<br> jam lembur :".$jam_lembur;
    echo "<br> Gaji lembur:RP".$gajilembur;
    echo "<br>Gaji Bersih: RP".$GajiBersih;
}
?>