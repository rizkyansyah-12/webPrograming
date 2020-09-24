<?php 
$nilai=99 ;

if ($nilai % 2 == 0) {
  echo "Genap";
} else {
    echo "Ganjil";
}
 ?>

 <table border="1">
     <?php for ($i=1; $i <= 10; $i++){?>
        <tr>
            <td><?= $i></td>
        </tr>
     <?php } ?>
 </table>
