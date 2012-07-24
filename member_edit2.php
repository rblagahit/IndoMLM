<?php
require( "cek.php" );
dbConnect();
if( !verifyUser() ) header( "Location: index.php" );


$password1=ltrim($password1);
$email=ltrim($email);

   if( $username == "" ) error( "Username Kosong !!! Harus Login Kembali" );
   dbConnect();
   $result = mysql_query( "SELECT username FROM member WHERE username='$session_username'" ) or error( mysql_error() );
   $member = mysql_fetch_array( $result );
   if( $password1 == "" ) error( "Ops... Passwordnya harus diisi !!!" );
   if( $email == "" ) error( "Ops... Email anda Harus diisi !!! " );
   if ( !eregi( "^[0-9a-z]([-_.]?[0-9a-z])*@[0-9a-z]([-.]?[0-9a-z])*\\.[a-z]{2,3}$", $email ) ) error( "Oops !!!!.. data Email anda Invalid alias tidak sah !!!" );

   mysql_query( "UPDATE member SET passwd='$password1', email='$email' WHERE username='$session_username' " ) or error( mysql_error() );

         	// --- Kirim email Konfirmasi kasil editing ke member
            // --- PERHATIAN !!! Untuk mencegah error Jangan Ganti Variabel yang berawalan tanda "$"  

$subject_1 = "Hasil Editing anda  ";
$message_1 = "

Hallo $session_nama_member , Anda telah melakukan Edit Password dan email anda di member area 
==================================================== 

Berikut ini adalah data yang telah anda edit :
====================================================
Username anda	   : $session_username 
Password           : $password1 
email              : $email 
================[TERIMA KASIH]====================== 
Terima Kasih Harap disimpan baik-baik data ini 
==================================================== 
  
  
Salam Sukses 
$ADVT_NAME 

";
	
$pesanBaru_1 = "----------------------->>$NAMA_WEB<<-----------------------------\n\n" . $message_1 . "\n\n";
sentMail( "$ADVT_NAME <$ADMIN_EMAIL>", $email, $subject_1, $pesanBaru_1 );

        header( "Location: member_edit3.php" );


?>

