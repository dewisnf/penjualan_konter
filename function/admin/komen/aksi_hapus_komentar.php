<?php
include("Koneksi.php");
$id = $_GET['id'];
mysqli_query($koneksi, " DELETE FROM tbl_kategori WHERE id_komentar='$id' ");
echo
    "<script>alert('Data Terhapus');
        window.location='index.php?page=data_komentar';
    </script>";
