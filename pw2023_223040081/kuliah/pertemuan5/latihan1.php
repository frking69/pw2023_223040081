<?php 

// aray

// membuat array 

$hari = array ('senin', 'selasa', 'rabu');
$bulan = ['januari', 'februari', 'maret'];
$myArray = ['ING', 19 , false];
$binatang = ['😺','🐰','🐵','🐨','🐮'];



// menvcetak eray
// mencetak satu element didalam eray menggunkan echo

echo $hari[2];
echo "<hr>";


// mencetai semua isi aray
//var_dump, print_r

var_dump($hari);
echo "<hr>";

print_r($bulan);
echo "<hr>";

var_dump($myArray);
echo "<hr>";


// manipulasi array
//menambahkan elemen mengbgunkan index

$hari[3]= 'kamis';
print_r($hari);
echo "<hr>";

// menambahkan element di akhir array menggunkan []

$hari[] = 'jumat';
$hari[] = 'sabtu';
$hari[] = 'minggu';
print_r($hari);
echo "<br>";


// menambahkan element di akhir array menggubnkan array_push

array_push($bulan, 'april','mei');
print_r($bulan);
echo "<br>";

// menambahkan element diawal  

array_unshift($binatang, '🐍');
print_r($binatang);
echo "<hr>";


// menghapus elemet dibelakang array dengan array_pop

array_pop($hari);
array_pop($hari);
print_r($hari);
echo "<hr>";

// menghapus elemet didepan array dengan array_shift

array_shift($bulan);
print_r($bulan);







?>