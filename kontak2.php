<?php
require( "cek.php" );
$name=ltrim($name);
$email=ltrim($email);
$alamat=ltrim($alamat);
$telepon=ltrim($telepon);
$kontak=ltrim($kontak);
$ip = $REMOTE_ADDR;

if( $name == "" ) error( "Ooops . . . Nama anda harus diisi dong supaya kami tahu kontak ini dari anda !!!" );
if( $email == "" ) error( "Ooops . . . Anda belum mengisi email !!!" );
if( $alamat == "" ) error( "Alamat anda belum di isi ....." );
if( $kontak == "" ) error( "Ops apa yang mau ditanyakan jika kosong . . . ." );
if( $telepon == "" ) error( "Kolom Telepon belum anda isi, supaya kami mudah menghubungi anda" );

if ( !eregi( "^[0-9a-z]([-_.]?[0-9a-z])*@[0-9a-z]([-.]?[0-9a-z])*\\.[a-z]{2,3}$", $email ) ) error( "Oops .. data Email anda Invalid alias tidak sah !!!" );


$mesage = "Data Kontak dari website $NAMA_WEB/?id=$session_username_sponsor \n";
$mesage .= "======================================================================== \n\n";
$mesage .= "Nama       : $name \n";
$mesage .= "email      : $email \n";
$mesage .= "Alamat     : $alamat \n";
$mesage .= "Telepon    : $telepon \n";
$mesage .= "Isi Berita : $kontak \n";
$mesage .= "Ip Address pengontak : $ip  \n\n";
$mesage .= "Kontak dari Website milik  ";
$mesage .= "Sponsor    : $session_nama_sponsor  \n";
$mesage .= "Username   : $session_username_sponsor  \n";
$mesage .= "Email      : $session_email_sponsor  \n";
$mesage .= "Kota       : $session_kota_sponsor  \n";
$mesage .= " \n\n";
$mesage .= "==============================";
sentMail( "$name <$email>", $ADMIN_EMAIL, "Kontak dari $name", $mesage );

header("Location:terimakasih_kontak.php");


?>
