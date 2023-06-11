<section class="container-fluid masuk">
    <div class="container mlogin">
    <h5 class="text-center">Silahkan masuk, untuk melanjutkan</h5>
    <br>
        <div class="row btab">
            <form action="#" method="post" class="text-center">
                <label for="username">Username</label>
                <br>
                <input type="text" name="username" id="username" autocomplete="off" autofocus>
                <br>
                <label for="password">Password</label>
                <br>
                <input type="password" name="password" id="password" autocomplete="off">
                <br>
                <br>
                <button type="submit" class="btn bg-primary" name="submit">Masuk</button>
            </form>
            <?php 
              if(isset($_POST['submit'])){
                include 'koneksi.php';

                $username = $_POST['username'];
                $password = $_POST['password'];

                $cek = mysqli_query($conn, "SELECT * FROM user WHERE username = '".$username."' AND password = '".($password)."'");
                if(mysqli_num_rows($cek) > 0) { 
                  $_SESSION["login"] = true;
                  echo '<script>alert("Berhasil Login");</script>'; 
                  echo '<script>window.location = "admin/index.php";</script>';
                } else { 
                  echo '<script>alert("Login Gagal");</script>'; }
              } 
            ?>
        </div>
    </div>
</section>