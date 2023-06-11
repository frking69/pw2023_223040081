<section class="container-fluid cymin">
  <div class="container">
    <div class="tambahart">
      <form action="#" method="post" enctype="multipart/form-data" class="text-center">
        <label for="judul">Judul</label>
        <br>
        <input type="text" name="judul" id="judul" autocomplete="off" autofocus>
        <br>
        <label for="deskripsi">Deskripsi</label>
        <br>
        <textarea name="deskripsi" id="deskripsi" autocomplete="off"></textarea>
        <br>
        <label for="gambar">Upload Gambar</label>
        <br>
        <input type="file" name="gambar" id="gambar">
        <br>
        <label for="id_kategori">Id Kategori</label>
        <br>
        <input type="text" name="id_kategori" id="id_kategori" autocomplete="off">
        <br>
        <br>
        <button class="btn bg-primary" type="submit" name="submit">Tambah Artikel</button>
      </form>
      <?php 
              if(isset($_POST['submit'])){
                include '../koneksi.php';

                $judul = htmlspecialchars($_POST['judul']);
                $deskripsi= htmlspecialchars($_POST['deskripsi']);
                $gambar = uploadImage();

                $id_kategori= htmlspecialchars($_POST['id_kategori']);
                
                $sql = "INSERT INTO `artikel`(`judul`, `deskripsi`, `gambar`, `id_kategori`) VALUES ('$judul', '$deskripsi', '$gambar', '$id_kategori')";
                if (mysqli_query($conn, $sql)) {
                  echo '<script>alert("Berhasil Menambahkan Artikel")</script>';
                  // Redirect ke halaman login.php setelah pendaftaran berhasil
                  header("Location: artikel.php");
                  exit;
                }else { 
                  echo '<script>alert("menambahkan produk gagal");</script>'; }
              } 
            ?>
    </div>
  </div>
</section>