<?php

require( "cek.php" );

$username=ltrim($username);
$passwd=ltrim($passwd);
$nama=ltrim($nama);
$email=ltrim($email);
$tgl_lahir=ltrim($tgl_lahir);
$nomor_ktp=ltrim($nomor_ktp);
$alamat=ltrim($alamat);
$kota=ltrim($kota);
$kodepos=ltrim($kodepos);
$nomor_telp=ltrim($nomor_telp);
$suami_istri=ltrim($suami_istri);
$nama_pasangan=ltrim($nama_pasangan);
$pekerjaan=ltrim($pekerjaan);
$agama=ltrim($agama);
$dik_akhir=ltrim($dik_akhir);
$nama_ahli_waris=ltrim($nama_ahli_waris);
$hub_ahli_waris=ltrim($hub_ahli_waris);
$nama_bank=ltrim($nama_bank);
$cabang=ltrim($cabang);
$nama_nasabah=ltrim($nama_nasabah);
$nomor_rek=ltrim($nomor_rek);
$ip = $REMOTE_ADDR;
$time = time();
   if( $username == "" ) error( "Username harus diisi !!!" );
   dbConnect();
   $result = mysql_query( "SELECT username FROM member WHERE username='$username'" ) or error( mysql_error() );
   if( mysql_num_rows( $result ) >= 1 ) error( "Ooops !!! Username ini sudah ada yang menggunakan, gunakan username lainnya " );
   if( $passwd == "" ) error( "Password harus ada isinya !!!" );
   if( $nama == "" ) error( "Nama harus diisi !!!" );
   if( $email == "" ) error( "Email Harus diisi !!! " );
   if( $tgl_lahir == "" ) error( "Tanggal Lahir Harus diisi !!! " );
   if( $nomor_ktp == "" ) error( "Nomor KTP Harus diisi !!! " );
   if( $alamat == "" ) error( "Alamat harus diisi !!!" );
   if( $kota == "" ) error( "Kota Harus diisi !!! " );
   if( $kodepos == "" ) error( "Kode Pos Harus diisi !!! " );
   if( $pekerjaan == "" ) error( "Pekerjaan anda Harus diisi !!! " );
   if( $agama == "" ) error( "Agama Harus diisi !!! " );
   if( $dik_akhir == "" ) error( "Pendidikan Terakhir anda Harus diisi !!! " );
   if( $nama_ahli_waris == "" ) error( "Nama Ahli Waris anda Harus diisi !!! " );
   if( $hub_ahli_waris == "" ) error( "Hubungan Ahli Waris anda Harus diisi !!! " );
   if( $nama_bank == "" ) error( "Bank anda Harus diisi !!! " );
   if( $cabang == "" ) error( "Kantor cabang bank anda Harus diisi !!! " );
   if( $nama_nasabah == "" ) error( "Nama Nasabah Harus diisi !!! " );
   if( $nomor_rek == "" ) error( "Nomor Rekening Bank Harus diisi !!! " );
   if ( !eregi( "^[0-9a-z]([-_.]?[0-9a-z])*@[0-9a-z]([-.]?[0-9a-z])*\\.[a-z]{2,3}$", $email ) ) error( "Oops !!!!.. data Email anda Invalid alias tidak sah !!!" );

    dbConnect();
   $result = mysql_query( "SELECT username FROM member WHERE username='$username'" ) or error( mysql_error() );
   if( mysql_num_rows( $result ) >= 1 ) error( "Ooops !!! Username ini sudah ada yang menggunakan, gunakan username lainnya " );
   
    $status="nonaktif";
   mysql_query( "INSERT INTO member ( username, passwd, nama, email, tgl_lahir, nomor_id, nomor_ktp, alamat, kota, kodepos, nomor_telp, suami_istri, nama_pasangan, pekerjaan, agama, dik_akhir, nama_ahli_waris, hub_ahli_waris, nama_bank, cabang, nama_nasabah, nomor_rek, nama_sponsor, id_sponsor, username_sponsor, username_upline, email_sponsor, tanggal_join, ip_add, stat, hits )
   Values ('$username','$passwd','$nama','$email','$tgl_lahir','','$nomor_ktp','$alamat','$kota','$kodepos','$nomor_telp','$suami_istri','$nama_pasangan','$pekerjaan','$agama','$dik_akhir','$nama_ahli_waris','$hub_ahli_waris','$nama_bank','$cabang','$nama_nasabah','$nomor_rek','$session_nama_sponsor','$session_id_sponsor','$session_username_sponsor','$session_username_sponsor','$session_email_sponsor','$time','$ip','$status','0' )") or error( mysql_error() );

     if (mysql_affected_rows()>0)
     {
	  // --- Kirim email Konfirmasi ke calon member =========================================
      // --- PERHATIAN !!! Untuk mencegah error Jangan Ganti Variabel yang berawalan tanda "$"  

$subject_1 = "Konfirmasi pendaftaran anda ";
$message_1 = "

Hallo $nama, Selamat datang di bisnis kami
========================================== 
Berikut ini data anda :
==========================================
Username 			 : $username 
Password 			 : $passwd 
Nama 				 : $nama 
email                : $email 
Tanggal Lahir        : $tgl_lahir 
Nomor KTP            : $nomor_ktp 
Alamat 			     : $alamat 
Kota 				 : $kota 
Kode Pos 			 : $kodepos 
Nomor Telpon         : $nomor_telp 
Pasangan             : $suami_istri 
Nama Pasangan        : $nama_pasangan 
Pekerjaan            : $pekerjaan 
Agama                : $agama 
Pendidikan terakhir  : $dik_akhir 
Nama Ahli Waris      : $nama_ahli_waris 
Hubungan Ahli Waris  : $hub_ahli_waris 
Bank Anda            : $nama_bank 
Cabang               : $cabang 
Nama Nasabah         : $nama_nasabah 
Nomor Rekening       : $nomor_rek 
Sponsor anda         : $session_nama_sponsor 
Nomor ID Sponsor     : $session_id_sponsor 
Asal Sponsor anda    : $session_kota_sponsor 
Email Sponsor anda   : $session_email_sponsor 

Anda sudah mendapatkan website Replikasi dari kami dengan alamat URL :

$NAMA_WEB/?id=$username

Gunakan URL atau Website pribadi anda ini untuk PROMOSI ONLINE DI INTERNET 
Sedangkan untuk Masuk Member Area gunakan Username dan Password berikuti ini 
Username             : $username 
Password             : $passwd 

Jangan sampai lupa atau hilang !!! 

PERLU DI PERHATIKAN :
Website dan keanggotaan anda BELUM KAMI AKTIFKAN 
Kami akan segera MENGAKTIFKAN keanggotaan anda 
Setelah persyaratan untuk keanggotaan terpenuhi !!! 

=====PERSYARATAN GABUNG DENGAN KAMI ===== 
(Ketentuan ini dibuat oleh Perusahaan) 
Syarat untuk bergabung dengan kami adalah :
Biaya Pendaftaran Rp. 315.000,-  sudah termasuk ongkos kirim 
(khusus Kalimantan,Sulawesi dan Papua + Rp. 15.000,-) .
Mendapatkan :          
Paket Produk senilai Rp. 250.000,-          
Staterkit, Brosure, Kartu Anggota dan pendukung bisnis lainnya.          

CATATAN : Transfer biaya pendaftaran anda   
Dengan nilai Transfer yang UNIK yaitu plus 3 (tiga) angka terakhir 
nomor telepon anda.
Misalnya No. Telpon anda 021-816123
Maka Transfer biaya pendaftaran adalah Rp. 315.123,-
atau Rp. 330.123,- (khusus Kalimantan,Sulawesi dan Papua) 
Supaya kami mudah mengenali kalau transaksi ini dari anda.

====================================
Transfer biaya pendaftaran anda ke :
	    
Bank-BCA
Rekening  : 111 111 1111 
Atas Nama : PT. Network Indonesia 
	    
====================================
	     
Setelah anda melakukan transfer silahkan Konfirmasikan ke Kami :
email     : $ADMIN_EMAIL 
Subject   : Konfirmasi Pendaftaran A.n $nama 
isi email :  
Uang pendaftaran sudah kami transfer  
Nomor Rekening anda : . . . . (Jika anda transfer antar Rekening)   
Jumlah transfer : Rp. . . . . (jangan lupa 3 angka UNIK dibelakang)     
	     
Kalau memungkinkan, kirim bukti transfer anda via e-mail : $ADMIN_EMAIL     
Via Fax : 021-0000000  ( Bukti Transfer Group Internet   UP. Bpk, Nanang )     
jika dalam waktu 1x24 jam (setelah transfer) website belum di AKTIFKAN hubungi kami.     
		     
Atau konfirmasi transfer bisa juga VIA SMS ke : 08111 11118    
isi sms : Sudah melakukan transfer, nama, user id, jumlah transfer.     

Selanjutnya tunggu konfirmasi dari kami . . . .      
	     
Paket Pendaftaran, kami kirimkan via pos/tiki/expedisi dll.
		     
==========================================
Jika anda yang kurang jelas anda bisa kirim pertanyaan ke kami :
email : $ADMIN_EMAIL
		   
		    
Selamat Berjuang dan Sukses.
$ADVT_NAME 
Mobile : 081 111111111 
		    
";

$pesanBaru_1 = "----------------------->>$NAMA_WEB<<-----------------------------\n\n" . $message_1 . "\n\n";
sentMail( "$ADVT_NAME <$ADMIN_EMAIL>", $email, $subject_1, $pesanBaru_1 );

//---end

             //---- Kirim email ke Pengelola / Webmaster ============================================
             // --- PERHATIAN !!! Untuk mencegah error Jangan Ganti Variabel yang berawalan tanda "$" 
				
$subject_2 = "Ada calon member dari $session_nama_sponsor";
$message_2 = "

Hallo $ADVT_NAME, Ada orang mendaftar nih !

=======================================
Username 			 : $username 
Password 			 : $passwd 
Nama 				 : $nama 
email                : $email 
Tanggal Lahir        : $tgl_lahir 
Nomor KTP            : $nomor_ktp 
Alamat 			     : $alamat 
Kota 				 : $kota 
Kode Pos 			 : $kodepos 
Nomor Telpon         : $nomor_telp 
Pasangan             : $suami_istri 
Nama Pasangan        : $nama_pasangan 
Pekerjaan            : $pekerjaan 
Agama                : $agama 
Pendidikan terakhir  : $dik_akhir 
Nama Ahli Waris      : $nama_ahli_waris 
Hubungan Ahli Waris  : $hub_ahli_waris 
Bank Anda            : $nama_bank 
Cabang               : $cabang 
Nama Nasabah         : $nama_nasabah 
Nomor Rekening       : $nomor_rek 
Sponsor              : $session_nama_sponsor 
Nomor ID Sponsor     : $session_id_sponsor 
Asal Sponsor         : $session_kota_sponsor 
Username Sponsor     : $session_username_sponsor 
Email Sponsor        : $session_email_sponsor \n
$NAMA_WEB/?id=$username \n
======================================================
";
$pesanBaru_2 = "----------------------->>$NAMA_WEB<<-----------------------------\n\n" . $message_2 . "\n\n";
sentMail( $email, $ADMIN_EMAIL, $subject_2, $pesanBaru_2 );		
		
// ---end


             // ---Kirim email ke Sponsor =================================================
            // --- PERHATIAN !!! Untuk mencegah error Jangan Ganti Variabel yang berawalan tanda "$"
			
$subject_3 = "Ada calon member dari Website anda ";
$message_3 = "

Hallo $session_nama_sponsor, Ada Calon Member baru di website anda !
==================================================================

DATA-DATA CALON DOWNLINE ANDA ADALAH :
Username 			 : $username 
Nama 				 : $nama 
email                : $email 
Tanggal Lahir        : $tgl_lahir 
Nomor KTP            : $nomor_ktp 
Alamat 			     : $alamat 
Kota 				 : $kota 
Kode Pos 			 : $kodepos 
Nomor Telpon         : $nomor_telp 
Pasangan             : $suami_istri 
Nama Pasangan        : $nama_pasangan 
Pekerjaan            : $pekerjaan 
Agama                : $agama 
Pendidikan terakhir  : $dik_akhir 
Nama Ahli Waris      : $nama_ahli_waris 
Hubungan Ahli Waris  : $hub_ahli_waris 
Bank Anda            : $nama_bank 
Cabang               : $cabang 
Nama Nasabah         : $nama_nasabah 
Nomor Rekening       : $nomor_rek 
Sponsor              : $session_nama_sponsor 
Nomor ID Sponsor     : $session_id_sponsor 
Asal Sponsor         : $session_kota_sponsor 
Username Sponsor     : $session_username_sponsor 
Email Sponsor        : $session_email_sponsor 

$NAMA_WEB/?id=$username 

Berilah Support pada dia supaya segera Gabung dengan Kita. 
Jika Calon Member ini mendaftar resmi, maka akan menjadi downline langsung. 
Akan tetapi jika di bawah langsung anda sudah ada 5 orang, maka member ini akan 
di SPILL OVER / di limpahkan ke jaringan di bawah anda  
Sekali lagi !!! 
Berilah Support pada dia supaya segera bergabung. 

Demikian dan salam Sukses
$ADVT_NAME 
Mobile : 081 11111111111 
		    
====================================================
";
	
$pesanBaru_3 = "----------------------->>$NAMA_WEB<<-----------------------------\n\n" . $message_3 . "\n\n";
sentMail( "$ADVT_NAME <$ADMIN_EMAIL>", $session_email_sponsor, $subject_3, $pesanBaru_3 );
		
	header("Location:terimakasih_daftar.php");

}

?>