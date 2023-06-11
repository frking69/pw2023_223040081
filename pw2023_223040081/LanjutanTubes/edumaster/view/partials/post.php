<?php
$id_artikel = $_GET["id_artikel"];

$artikels = query("SELECT * FROM artikel WHERE id_artikel = $id_artikel")[0];
?>
<section class="container-fluid" style="padding: 10px;">
  <div class="container" style="padding:10px;">
    <div class="row" style="margin: auto;">
      <div class="artbox">
        <h3><?= $artikels["judul"]; ?></h3>
        <hr>
        <img src="img/<?= $artikels["gambar"]; ?>" alt="" class="img-fluid tex-center">
        <br>
        <br>
        <p><?= $artikels["deskripsi"]; ?></p>
      </div>
    </div>
  </div>
</section>