<?php
// Query artikel
$artikels = query("SELECT * FROM artikel WHERE id_kategori = 1");
$artikels2 = query("SELECT * FROM artikel WHERE id_kategori = 2");
$artikels3 = query("SELECT * FROM artikel WHERE id_kategori = 3");
?>
<section class="container-fluid" style="padding: 10px;">
  <div class="container">
    <div class="hcontent">
      <h3>Kategori Edukasi</h3>
    </div>
    <div class="row conten">
    <?php foreach ($artikels as $artikel): ?>
      <div class="kartu text-center">
        <img src="img/<?= $artikel['gambar']; ?>" class="img-fluid text-center" alt="...">
          <div class="card-body">
            <h5 class="card-title"><?= $artikel['judul']; ?></h5>
            <hr>
            <button class="btn bg-primary"><a href="post.php?id_artikel=<?= $artikel["id_artikel"]; ?>">Baca Selengkapnya!</a></button>
          </div>
      </div>
    <?php endforeach; ?>
    </div>
    <div class="hcontent">
      <h3>Kategori Teknologi</h3>
    </div>
    <div class="row conten">
    <?php foreach ($artikels2 as $artikel2): ?>
      <div class="kartu text-center">
        <img src="img/<?= $artikel2['gambar']; ?>" class="img-fluid text-center" alt="...">
          <div class="card-body">
            <h5 class="card-title"><?= $artikel2['judul']; ?></h5>
            <hr>
            <button class="btn bg-primary"><a href="post.php?id_artikel=<?= $artikel["id_artikel"]; ?>">Baca Selengkapnya!</a></button>
          </div>
      </div>
    <?php endforeach; ?>
    </div>
    <div class="hcontent">
      <h3>Kategori Informasi</h3>
    </div>
    <div class="row conten">
    <?php foreach ($artikels3 as $artikel3): ?>
      <div class="kartu text-center">
        <img src="img/<?= $artikel3['gambar']; ?>" class="img-fluid text-center" alt="...">
          <div class="card-body">
            <h5 class="card-title"><?= $artikel3['judul']; ?></h5>
            <hr>
            <button class="btn bg-primary"><a href="post.php?id_artikel=<?= $artikel3["id_artikel"]; ?>">Baca Selengkapnya!</a></button>
          </div>
      </div>
    <?php endforeach; ?>
    </div>
  </div>
</section>