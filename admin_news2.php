<?php
require( "label.php" );
$judul = ltrim($judul);
$tanggal = ltrim($tanggal);
$isi_berita = ltrim($isi_berita);

if( $judul == "" ) error( "Ooops . . . Judul News anda harus diisi!!!" );
if( $tanggal == "" ) error( "Ooops . . . Anda belum mengisi Tanggal News !!!" );
if( $isi_berita == "" ) error( "Ooops . . . Anda belum mengisi News !!!" );

dbConnect();
mysql_query( "INSERT INTO news ( judul, tanggal, isi_berita )
Values ('$judul','$tanggal','$isi_berita')") or error( mysql_error() );

header("Location:admin_news.php") ;
?>
