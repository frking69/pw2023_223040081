<?php 
require('../koneksi.php');
if(isset($_GET['button-search'])) {
  $keyword = $_GET['keyword'];
  $query = "SELECT * FROM artikel
                  WHERE
                      judul LIKE '%$keyword%'
  ";
  $artikels = query($query);
} else {
  $artikels = query("SELECT * FROM artikel");
}
require('sesi.php');
require('view/artikel.view.php');
?>