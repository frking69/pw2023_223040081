<?php 

$binatang = ['😺','🐰','🐵','🐨','🐮'];
$makanan = ['🍕','🍔','🍟','🌭','🍿'];
$mahasiswa = ['ing','freak','izam','fahriq','tapir'];



?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    
    <h2>Daftar Mahasiswa</h2>
    <?php foreach($mahasiswa as $i => $b) {?>
    <ul>
        <li>Nama: <?= $mahasiswa[$i]; ?></li>
        <li>Makanan favorit: <?=  $makanan[$i]; ?></li>
        <li>Bianatang peliharaan: <?= $binatang[$i]; ?></li>
    </ul>
    <?php } ?>
     
</body>
</html>