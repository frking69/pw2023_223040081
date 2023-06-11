<?php
require('../koneksi.php');

// Hapus data kesehatan
$id_artikel= $_GET["id_artikel"];

if( hapusartikel($id_artikel) > 0 ) {
  echo "
      <script>
          alert('artikel berhasil dihapus!');
          document.location = 'artikel.php';
      </script>
  ";
} else {
  echo "
      <script>
          alert('artikel gagal dihapus!');
          document.location = 'artikel.php';
      </script>
  ";
}
?>