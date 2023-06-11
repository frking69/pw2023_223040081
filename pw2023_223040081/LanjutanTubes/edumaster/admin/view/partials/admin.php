<?php
// Query artikel
$users = query("SELECT * FROM user");
?>
<div class="container-fluid cymin">
  <div class="container">
    <h4>Daftar Admin</h4>
    <div class="admin table-responsive">
      <table class="table table-bordered" style="color: #fff;">
        <thead>
          <tr>
            <th>No</th>
            <th>Nama</th>
            <th>Email</th>
            <th>Username</th>
            <th>Gambar</th>
            <th>Hapus</th>
          </tr>
        </thead>
        <?php $i = 1; ?>
        <?php foreach ($users as $user): ?>
        <tbody>
          <tr>
            <td><?= $i ?></td>
            <td><?= $user['nama']; ?></td>
            <td><?= $user['email']; ?></td>
            <td><?= $user['username']; ?></td>
            <td><img src="../img/<?= $user['gambar']; ?>" alt="" style="width:30px;"></td>
            <td><a href="hapususer.php?id=<?= $user["id"]; ?>"><i class="fa-solid fa-trash" style="color:#fff;"></i></a></td>
          </tr>
        </tbody>
        <?php $i++?>
        <?php endforeach; ?>
      </table>
    </div>
  </div>
</div>