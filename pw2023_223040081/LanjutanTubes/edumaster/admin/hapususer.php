<?php
require('../koneksi.php');

// Hapus data kesehatan
$id= $_GET["id"];

if( hapususer($id) > 0 ) {
  echo "
      <script>
          alert('data berhasil dihapus!');
          document.location = 'index.php';
      </script>
  ";
} else {
  echo "
      <script>
          alert('data gagal dihapus!');
          document.location = 'index.php';
      </script>
  ";
}
?>