<?php 
$nama = 'Iking';
$tugas =96;
$uts =88;
$uas =90;
$nilai = ($tugas*0.2)+($uts*0.3)+($uas*0.5);

switch (true) {
	case ($nilai>65):
		$ket = 'LULUS';
		break;
	
	default:
		$ket = 'TIDAK LULUS';
		break;
}

switch (true){
	case  ($nilai > 85):
	$grade ='A';
		break;

	case ($nilai > 75):
	 $grade ='B';
		break;

	case ($nilai>65) : 
	$grade ='C' ;
		break;
					
	default:
	$grade = 'D';
		break;
}
echo "Nama : ".$nama;
echo "<br>Nilai :".$nilai;
echo "<br>Keterangan : ".$ket;
 ?>