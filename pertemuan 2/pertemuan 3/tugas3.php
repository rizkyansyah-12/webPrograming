
<?php 
$karyawan = "Budi"; 
$GolA = 5000;
$GolB = 6000;
$GolC = 7500;
$GolD = 9000;
$jam= 8;

switch (true) {
    case($jam<= 28):
        $gaji = $GolA*$jam;
        break;

    case($jam<= 24):
        $gaji = $GolB*$jam;
        break;

    case($jam<= 22):
        $gaji = $GolC*$jam;
        break;

        
    case($jam<=20):
        $gaji = $GolDD*$jam;
        break;
echo "Total Gaji:".$gaji;
    default:
        $lembur=$jam-28;
        break;
}

 ?>