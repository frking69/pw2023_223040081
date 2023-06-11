<?php
    $hostname = 'localhost';
    $username = 'root';
    $password = '';
    $databasename = 'edumaster';

    $conn = mysqli_connect($hostname, $username, $password, $databasename) or die ('Gagal terhubung ke database');


    // fungsi Pengelompokkan Querry
    function query ($query){
      global $conn;
      $hasil =  mysqli_query($conn, $query);
      $baris = [];
      while( $bari = mysqli_fetch_assoc($hasil) ) {
          $baris[] = $bari;
      }
      return $baris;
  }

    // Fungsi Hapus User
    function hapususer ($id) {
      global $conn;
      mysqli_query($conn, "DELETE FROM user WHERE id = $id");
      return mysqli_affected_rows($conn);
  }

    // Fungsi Hapus Artikel
    function hapusartikel ($id_artikel) {
      global $conn;
      mysqli_query($conn, "DELETE FROM artikel WHERE id_artikel = $id_artikel");
      return mysqli_affected_rows($conn);
  }

       // funsi ubah artikel
       function editartikel($artikelvalue){
        global $conn;
        $id_artikel = ($_POST['id_artikel']);
        $judul = htmlspecialchars($_POST['judul']);
        $deskripsi= htmlspecialchars($_POST['deskripsi']);
        $gambarLama= htmlspecialchars($_POST['gambarLama']);

        // cek apakah user pilih gambar baru atau tidak
        if( $_FILES['gambar']['error'] === 4 ){
            $gambar = $gambarLama;
        } else {
            $gambar = uploadImage();
        }
       

        $query = "UPDATE artikel SET
        judul = '$judul',
        deskripsi = '$deskripsi',
        gambar = '$gambar'
        WHERE id_artikel = $id_artikel
        ";

        mysqli_query($conn, $query);

        return mysqli_affected_rows($conn);
    }


    //fungsi upload
    function uploadImage()
    {
      $imageName = $_FILES['gambar']['name'];
      $imageSize = $_FILES['gambar']['size'];
      $error = $_FILES['gambar']['error'];
      $tmpName = $_FILES['gambar']['tmp_name'];
    
    
      if ($error === 4) {
        echo "<script>alert('Insert an image!');</script>";
        return false;
      }
    
    
      if ($imageSize > 50000000 || $error === 1) {
        echo "<script>alert('Image is too big');</script>";
        return false;
      }
    
      if ($error !== 0) {
        echo "<script>alert('Failed to upload an image!');</script>";
        return false;
      }
    
      $validExtention = ['jpg', 'jpeg', 'png', 'webp'];
      $imageExtention = explode('.', $imageName);
      $imageExtention = strtolower(end($imageExtention));
      if (!in_array($imageExtention, $validExtention)) {
        echo "<script>alert('Not an image!');</script>";
        return false;
      }
    
    
    
      $newImageName = uniqid();
      $newImageName .= '.';
      $newImageName .= $imageExtention;
    
    
      move_uploaded_file($tmpName, '../img/' . $newImageName);
      return $newImageName;
    }
?>