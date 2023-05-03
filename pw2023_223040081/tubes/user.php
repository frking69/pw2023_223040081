<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="stylesheet" href="user.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" >
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
</head>
  <body>

  <nav class="navbar navbar-expand-lg navbar-light bg-warning fixed-top">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">SELAMAT DATANG USER | <b>UNIVERSITAS PASUNDAN</b> </a>
   
      <form class="d-flex" role="search">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>
      <div class="icon ml-4">
        <h5>
        <i class="fa fa-envelope mr-3"></i>

        <i class="fa fa-bell mr-3"></i>
        <i class="fa fa-sign-out mr-3"></i>
        </h5>
      </div>
    </div>
  </div>
</nav>


<div class="row no-gutters mt-5">
  <div class="col-md-2 bg-dark mt-2 pr-3 pt-4">
  <ul class="nav flex-column ml-3 mb-5">
  <li class="nav-item">
    <a class="nav-link active text-white" aria-current="page" href="#"><i class="fa fa-tachometer mr-3"></i>Dashboard</a><hr class="bg-secondary">
  </li>
  <li class="nav-item">
    <a class="nav-link text-white" href="#"><i class="fa fa-user" ></i>daftar mahasiswa</a><hr class="bg-secondary">
  </li>
  <li class="nav-item">
    <a class="nav-link text-white" href="#"><i class="fa-solid fa-chalkboard-user mr-2"></i>daftar dosen</a><hr class="bg-secondary">
  </li>
  <li class="nav-item">
    <a class="nav-link text-white" href="#"><i class="fa-solid fa-users mr-2"></i>daftar pegawai</a><hr class="bg-secondary">
  </li>
  <li class="nav-item">
    <a class="nav-link text-white" href="#"><i class="fa-solid fa-calendar-days mr-2"></i>jadwal kuliah</a><hr class="bg-secondary">
  </li>
  <li class="nav-item">
    <a class="nav-link text-white" href="#"><i class="fa-solid fa-paper-plane mr-2"></i>nilai mahasiswa</a><hr class="bg-secondary">
  </li>
  </ul>
 </div>

<div class="col-md-10 p-5 pt-2">
  <h3><i class="fa fa-tachometer mr-2 ml-5"></i>Dashboard</h3><hr>

  <div class="row text-white">
    <div class="card bg-info ml-3" style="width: 18rem;">
     <div class="card-body">
        <div class="card-body-icon"><i class="fa fa-user" ></div>
        <h5 class="card-title">Jumlah mahasiswa</h5>
        <div class="display-4">1.200</div>
        <a href=""><p class="card-text">Lihat detail <i class="fa fa-angle-double-right"></i></p></a>
      </div>
    </div>

    <div class="card bg-succes" style="width: 18rem;">
     <div class="card-body">
        <div class="card-body-icon"><i class="fa-solid fa-chalkboard-user mr-2"></div>
        <h5 class="card-title">Jumlah mahasiswa</h5>
        <div class="display-4">38</div>
        <a href=""><p class="card-text">Lihat detail <i class="fa fa-angle-double-right"></i></p></a>
      </div>
    </div>

    <div class="card bg-danger" style="width: 18rem;">
     <div class="card-body">
        <div class="card-body-icon"><i class="fa-solid fa-users mr-2"></div>
        <h5 class="card-title">Jumlah pegawai</h5>
        <div class="display-4">41</div>
        <a href=""><p class="card-text">Lihat detail <i class="fa fa-angle-double-right"></i></p></a>
      </div>
    </div>

  
  


  </div>
 </div>
</div>


    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.7/dist/umd/popper.min.js" integrity="sha384-zYPOMqeu1DAVkHiLqWBUTcbYfZ8osu1Nd6Z89ify25QV9guujx43ITvfi12/QExE" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.min.js" integrity="sha384-Y4oOpwW3duJdCWv5ly8SCFYWqFDsfob/3GkgExXKV4idmbt98QcxXYs9UoXAB7BZ" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
    <script tyoe="text/javascript" src="user.js"></script>
</body>
</html>