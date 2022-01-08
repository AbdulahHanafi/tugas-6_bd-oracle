<?php 
include "koneksi.php";

$KODE_BUKU = $_GET['KODE_BUKU'];
$sql="DELETE FROM buku WHERE KODE_BUKU = '$KODE_BUKU'";
$prepare = ociparse($koneksi, $sql);
ociexecute($prepare);
oci_commit($koneksi);
header("location: buku.php?pesan=hapus");
 ?>