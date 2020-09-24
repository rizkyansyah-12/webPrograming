<?php 
$nama="M.Rizkyansyah";
$nilai1= 98 ;
$nilai2= 93 ;

$nilai = ($nilai1 + $nilai2) / 2;

if ($nilai > 85) {
	$grade = "A";
} elseif ($nilai > 75){
	$grade = "B";
} elseif ($nilai > 65){
	$grade = "C";
} else {
	$grade ="D";
}
if ($grade == 'A') {
	$keterangan = 'Sangat Baik'; 
} elseif($drade == 'B'){
	$keterangan = "Baik";
} elseif($grade == 'C') {
	$Keterangan = "Cukup";
} else {
	$keterangan= "Kurang";
}

echo "Nama :".$nama;
echo "<br> Nilai :".$nilai;
echo "<br> Grade :".$grade;
echo "<br> Keterangan :".$keterangan;

 ?>