<?php 
include "koneksi.php";

$ID_USER        = $_POST['ID_USER'];
$USERNAME       = $_POST['USERNAME'];
$PASWORD       = $_POST['PASWORD'];
$TELP       = $_POST['TELP'];

$sql="insert into admin values ('$ID_USER','$USERNAME','$PASWORD','$TELP')";
   $prepare = ociparse($koneksi, $sql);
   ociexecute($prepare);
   oci_commit($koneksi);
   

	if($prepare)
	{
	header('location: admin.php?pesan=input');
	}
	else {echo "gagal";}



 ?>