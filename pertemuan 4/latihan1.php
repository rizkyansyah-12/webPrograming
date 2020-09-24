<?php
 for ($i=0; $i <= 7 ; $i++) { 
	echo "peluamg ke-" .$i. "<br>";
}


 ?>
 <!DOCTYPE html>
 <html lang="en">
 <head>
 	<meta charset="UTF-8">
 	<meta name="viewport" content="width=device-width, initial-scale=1.0">
 	<title>tanggal</title>
 </head>
 <body>
 	<select name="" id="">
 		<?php 
 			for ($i=1; $i <=31 ; $i++) { 
 			   echo "<option>.$i.</option>";
 			}
 		 ?>
 	</select>

        <select name="" id="">
       <?php
              $x=1;
                while ( $x<= 12) {
               echo " <option> $x </option>";
       $x++;
}
       ?>
       
        </select>

        <select>
               


        </select>

 </body>
 </html>
