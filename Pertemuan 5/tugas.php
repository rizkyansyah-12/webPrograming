<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tugas Muhamad Rizkyansyah</title>
</head>
<body>
    <table border="1" cellspacing="0">
<?php for ($i=1; $i <=10 ; $i++) { ?>
        <tr>
             <td ><?= $i; ?></td>
             <td> <?php if ($i % 2 == 0){
                           echo " <p style= 'background-color: #21CBC9 '>Genap</p>";
                    } else {
                           echo "<p style= 'background-color: #E43C15 '>Ganjil</p>";
                    } ?> </td>
        </tr>
<?php } ?>
 
    </table>
    
</body>
</html>
