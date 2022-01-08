<?php 
include "koneksi.php";

$KODE_BUKU        = $_POST['KODE_BUKU'];
$JUDUL_BUKU       = $_POST['JUDUL_BUKU'];
$PENGARANG       = $_POST['PENGARANG'];
$PENERBIT       = $_POST['PENERBIT'];

$sql="insert into buku values ('$KODE_BUKU','$JUDUL_BUKU','$PENGARANG','$PENERBIT')";
   $prepare = ociparse($koneksi, $sql);
   ociexecute($prepare);
   oci_commit($koneksi);
   

	if($prepare)
	{
	header('location: buku.php?pesan=input');
	}
	else {echo "gagal";}



 ?>