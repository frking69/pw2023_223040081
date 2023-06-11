
<div class="container-fluid cymin">
  <div class="container">
    <h4>Daftar Artikel</h4>
    <div class="admin">
      <div class="pencarian">
        <form action="" method="get">
          <input type="text" name="keyword" id="keyword" size="20" placeholder="Masukan Keyword.." autofocus autocomplete="off">
          <button type="submit" name="button-search" id="button-search"><i class="fa-solid fa-magnifying-glass" style="color:#0b88d4;"></i></button>
        </form>
      </div>
      <br>
      <div class="cetak">
        <button class="btn bg-primary"><a href="../cetak.php" target="_blank" style="color: #fff; text-decoration: none;">Cetak Data</a></button>
      </div>
      <br>
      <div id="search-container">
        <div class="table-responsive">
      <?php if($artikels) : ?>
      <table class="table table-bordered" style="color:#fff;">
        <tr>
          <th>No</th>
          <th>Gambar</th>
          <th>Judul</th>
          <th>Lihat</th>
          <th>Edit</th>
          <th>Hapus</th>
        </tr>
        <?php $i = 1; ?>
        <?php foreach ($artikels as $artikel): ?>
        <tr>
          <td><?= $i ?></td>
          <td><img src="../img/<?= $artikel['gambar']; ?>" alt="" style="width:30px;"></td>
          <td><?= $artikel['judul']; ?></td>
          <td><a href="../post.php?id_artikel=<?= $artikel["id_artikel"]; ?>"><i class="fa-solid fa-eye" style="color:#fff;"></i></a></td>
          <td><a href="ubahartikel.php?id_artikel=<?= $artikel["id_artikel"]; ?>"><i class="fa-solid fa-pen-to-square" style="color:#fff;"></i></a></td>
          <td><a href="hapusartikel.php?id_artikel=<?= $artikel["id_artikel"]; ?>"><i class="fa-solid fa-trash" style="color:#fff;"></i></a></td>
        </tr>
        <?php $i++?>
        <?php endforeach; ?>
      </table>
      <?php else : ?>
            <div class="row">
              <div class="col-md-6">
                <div class="alert alert-danger" role="alert">
                  Data Tidak Ditemukan
                </div>
              </div>
            </div>
      <?php endif; ?>
      </div>
      </div>
    </div>
  </div>
</div>