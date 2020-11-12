<?php

$nama =	"Ahmad";
$gp	=	2500000;
$anak =	3;
$tg = 3;


if ($nama) {
	echo "Nama : Ahmad";
 }
 
if ($gp) {
	echo "<br>Gaji Pokok:250000";
}
if ($anak>2) {
	echo "<br> Tunjangan Anak : 600000";
}	
else {
	echo"<br> Tunjangan anak : 400000";
}
if ($tg>2){
	echo "<br> Total Gaji: 3100000";
}
else {
	echo "<br> Total Gaji: 2900000" ;
}
?>