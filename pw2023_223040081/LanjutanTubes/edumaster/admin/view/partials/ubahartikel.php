<?php
$id_artikel = $_GET["id_artikel"];

// Querry berdasarkan id
$artikels = query("SELECT * FROM artikel WHERE id_artikel = $id_artikel")[0];


// Cek apakah tombol submit sudah ditekan atau belum ?
if( isset($_POST["submit"]) ){

  // cek apakah data berhasil diubah atau tidak
  if( editartikel($_POST) > 0 ) {
    echo "
    <script>
    alert('Artikel berhasil di edit!');
    document.location.href= 'artikel.php';
    </script>
    ";
  } else {
    echo "
    <script>
    alert('Artikel gagal di edit');
    document.location.href = 'artikel.php';
    </script>
    ";
  }
}

?>
<section class="container-fluid cymin">
  <div class="container">
    <div class="tambahart">
      <form action="#" method="post" enctype="multipart/form-data" class="text-center">
      <input type="hidden" name="id_artikel" value="<?= $artikels["id_artikel"]; ?>">
      <input type="hidden" name="gambarLama" value="<?= $artikels["gambar"]; ?>">

        <label for="judul">Judul</label>
        <br>
        <input type="text" name="judul" id="judul" autocomplete="off" autofocus value="<?= $artikels["judul"]; ?>">
        <br>
        <label for="deskripsi">Deskripsi</label>
        <br>
        <textarea name="deskripsi" id="deskripsi" autocomplete="off"><?= $artikels["deskripsi"]; ?></textarea>
        <br>
        <label for="gambar">Upload Gambar</label>
        <br>
        <img src="../img/<?= $artikels["gambar"]; ?>" alt="" style="width:80px;">
        <br>
        <input type="file" name="gambar" id="gambar" value="<?= $artikels["gambar"]; ?>">
        <br>
        <label for="id_kategori">Id Kategori</label>
        <br>
        <input type="text" name="id_kategori" id="id_kategori" autocomplete="off" value="<?= $artikels["id_kategori"]; ?>">
        <br>
        <br>
        <button class="btn bg-primary" type="submit" name="submit">Tambah Artikel</button>
      </form>
    </div>
  </div>
</section>