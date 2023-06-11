<section class="container-fluid masuk">
    <div class="container ctab">
    <h5 class="text-center">Silahkan Mendaftar, untuk melanjutkan</h5>
    <br>
        <div class="row rtab">
            <form action="#" method="post" class="text-center">
                <label for="nama">Nama</label>
                <br>
                <input type="text" name="nama" id="nama" placeholder="Masukan Nama" autocomplete="off" autofocus required>
                <br>
                <label for="email">Email</label>
                <br>
                <input type="email" name="email" id="email" placeholder="Masukan Email" autocomplete="off" required>
                <br>
                <label for="username">Username</label>
                <br>
                <input type="text" name="username" id="username" placeholder="Masukan Username" autocomplete="off" required>
                <br>
                <label for="password">Password</label>
                <br>
                <input type="password" name="password" id="password" placeholder="Masukan Password" autocomplete="off" required>
                <br>
                <br>
                <button type="submit" class="btn bg-primary" style="color: #fff;" name="submit">Daftar</button>
            </form>
            <?php 
              if(isset($_POST['submit'])){
                require('koneksi.php');

                $nama = htmlspecialchars($_POST['nama']);
                $email = htmlspecialchars($_POST['email']);
                $username = htmlspecialchars($_POST['username']);
                $password = htmlspecialchars($_POST['password']);
                
                $sql = "INSERT INTO `user`(`nama`, `email`, `username`, `password`, `gambar`) VALUES ('$nama', '$email', '$username', '$password', '')";
                if (mysqli_query($conn, $sql)) {
                  // Redirect ke halaman login.php setelah pendaftaran berhasil
                  header("Location: login.php");
                  exit;
                }else { 
                  echo '<script>alert("Mendaftar Gagal");</script>'; }
              } 
            ?>
        </div>
    </div>
</section>