<?php 
    $mahasiswa = [
        [
        "nama" => "Muahmmad Oding kacadek",
        "NRP" =>"223040081",
        "email" =>"Muchoding@gmail.com",
        "Jurusan" => "Teknik Informatika",
        "gambar" =>"oding if 22.png"
        ],
        [
        "nama" => "Adira Rachmansyah ",
        "NRP" =>"223040078",
        "email" =>"Adira06@gmail.com",
        "Jurusan" => "Teknik Informatika",
        "gambar" =>"adira if 22.png"
        ],
        [
        "nama" => "Kaka Praditha Putra ",
        "NRP" =>"223040087",
        "email" =>"KakaPP01@gmail.com",
        "Jurusan" => "Teknik Informatika",
        "gambar" =>"kaka if 22.png"
        ],
        [
        "nama" => "Muhamad Marsa Nur Jaman ",
        "NRP" =>"223040083",
        "email" =>"Sasa123@gmail.com",
        "Jurusan" => "Teknik Informatika",
        "gambar" =>"marsa if 22.png"
        ],
        [
        "nama" => "Aldi Maulana Fadilah",
        "NRP" =>"223040090",
        "email" =>"Aldi69@gmail.com",
        "Jurusan" => "Teknik Informatika",
        "gambar" =>"aldi if 22.png"
        ],
        [
         "nama" => "George Frederik Pingak",
         "NRP" =>"223040080",
         "email" =>"George60@gmail.com",
         "Jurusan" => "Teknik Informatika",
         "gambar" =>"george if 22.png"
        ],
        [
         "nama" => "Muhammad Ariel Septiadi",
         "NRP" =>"223040073",
         "email" =>"Ariel1423@gmail.com",
         "Jurusan" => "Teknik Informatika",
         "gambar" =>"ariel if 22.png"
        ],
        [
        "nama" => "Irsan Moch.Taufik Febrian",
        "NRP" =>"223040076",
        "email" =>"Irsan078@gmail.com",
        "Jurusan" => "Teknik Informatika",
        "gambar" =>"irsan if 22.png"
        ],
        [
        "nama" => "Dony Laksmana",
        "NRP" =>"223040103",
        "email" =>"Dony707@gmail.com",
        "Jurusan" => "Teknik Informatika",
        "gambar" =>"dony if 22.png"
        ],
        [
        "nama" => "Visi Muhammad Ialami",
        "NRP" =>"223040075",
        "email" =>"Visi077@gmail.com",
        "Jurusan" => "Teknik Informatika",
        "gambar" =>"visi if 22.png"
        ],
    ];
    
    
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Mahasiswa</title>
</head>
<body>
    <h1>Daftar Mahasiswa</h1>

    <?php foreach ($mahasiswa as $mhs) : ?>

        <ul>
            <li>
                <img src="img/<?=$mhs["gambar"]; ?>">
            </li>
            <li>Nama : <?=$mhs["nama"]; ?></li>
            <li>NRP : <?=$mhs["NRP"]; ?></li>
            <li>Email : <?=$mhs["email"]; ?></li>
            <li>Jurusan : <?=$mhs["Jurusan"]; ?></li>
        </ul>
        <?php endforeach; ?>
</body>
</html>