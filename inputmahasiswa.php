<?php 
include "koneksi.php";

$ID_MHS        = $_POST['ID_MHS'];
$NAMA       = $_POST['NAMA'];
$NIM       = $_POST['NIM'];
$TMT_LAHIR       = $_POST['TMT_LAHIR'];
$TGL_LAHIR        = $_POST['TGL_LAHIR'];
$GENDER       = $_POST['GENDER'];
$ALAMAT       = $_POST['ALAMAT'];
$EMAIL       = $_POST['EMAIL'];
$NO_TLP       = $_POST['NO_TLP'];

$sql="insert into buku values ('$ID_MHS','$NAMA','$NIM','$TMT_LAHIR','$TGL_LAHIR','$GENDER','$ALAMAT','$EMAIL','NO_TLP')";
   $prepare = ociparse($koneksi, $sql);
   ociexecute($prepare);
   oci_commit($koneksi);
   

	if($prepare)
	{
	header('location: mahasiswa.php?pesan=input');
	}
	else {echo "gagal";}



 ?>