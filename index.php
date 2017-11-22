<?php

include 'config/config.php';

$hasil = odbc_exec($koneksiKanaan, "SELECT * FROM vendor_group");
while ($data = odbc_fetch_array($hasil))
{
	echo $data['groups']." ".$data['deskripsi']."<br>";
}




?>