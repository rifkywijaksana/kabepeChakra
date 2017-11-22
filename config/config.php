<?php
	
	$koneksiBaruulis 	= odbc_connect("baruulisAkuntansi", "", "");
	$koneksiDewata	 	= odbc_connect("dewataAkuntansi", "", "");
	$koneksiGambung 	= odbc_connect("gambungAkuntansi", "", "");
	$koneksiKabawetan 	= odbc_connect("kabawetanAkuntansi", "", "");
	$koneksiKanaan 		= odbc_connect("kanaanAkuntansi", "", "");
	$koneksiKancana 	= odbc_connect("kancanaAkuntansi", "", "");
	$koneksiMegawati 	= odbc_connect("megawatiAkuntansi", "", "");
	$koneksiPangalengan = odbc_connect("pangalenganAkuntansi", "", "");
	$koneksiUser 		= odbc_connect("userAccount", "", "");

?>