<?php 
require('../koneksi.php');
$keyword = $_GET['keyword'];
$query = "SELECT * FROM artikel
            WHERE
                judul LIKE '%$keyword%'
    ";
    $artikels = query($query);

?>
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