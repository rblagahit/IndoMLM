<?
	require( "label.php" );
	if( !verifyAdmin() ) 
	{
	header( "Location: admin.php" );
	return false;
	}
        if( isset( $user ) )
	{
        dbConnect();
	    $result = mysql_query( "SELECT * FROM member where username='$user'" ) or error( mysql_error() );
        $member = mysql_fetch_array( $result );
        $status="nonaktif";
        mysql_query( "UPDATE member SET stat='$status' WHERE username='$user' " ) or error( mysql_error() );
        
         // --- Kirim email ke member yang websitenya diblokir
         // --- PERHATIAN !!! Untuk mencegah error Jangan Ganti Variabel yang berawalan tanda "$"  

$subject_1 = "$member[nama], Website kami BLOKIR !!!";
$message_1 = "
Hallo $member[nama], Status Website anda kami Blokir !!!!

=========================================================
Maaf.... ! Karena Sesuatu hal maka website anda kami blokir  
======== BERIKUT INI DATA-DATA ANDA : ===================  
Username		   : $user  
Password		   : $member[passwd]  
Nama 		       : $member[nama]  
email              : $member[email] 
Alamat		       : $member[alamat]  
Kota          	   : $member[kota] 
Telpon             : $member[nomor_telp] 
Website anda       : $NAMA_WEB/?id=$user 

============= DATA SPONSOR ANDA =============== 
Username Sponsor   : $member[username_sponsor]  
Nama Sponsor	   : $member[nama_sponsor]  
email Sponsor      : $member[email_sponsor] 

PERHATIAN !!! 
Untuk Mengatifkan kembali website anda harap hubungi pengelola dengan menyertakan replay email ini.
Demikian pemberitahuan ini dan mohon maaf atas ketidaknyamanannya 

      	    
Salam Sukses 
$ADVT_NAME 
$NAMA_WEB 
	        
 ";
$pesanBaru_1 = "----------------------->>$NAMA_WEB<<-----------------------------\n\n" . $message_1 . "\n\n";
sentMail( "$ADVT_NAME <$ADMIN_EMAIL>", $member[email], $subject_1, $pesanBaru_1 );

   
        // ---Kirim email ke Sponsor / Reseller
        // --- PERHATIAN !!! Untuk mencegah error Jangan Ganti Variabel yang berawalan tanda "$" 
				
$subject_2 = "$member[nama_sponsor], Kami melakukan pemblokiran member anda";
$message_2 = "
Hallo $member[nama_sponsor], Website Member anda kami Blokir !

===========================================================
Data member anda yang telah kami blokir adalah :  
Username		     : $user  
Nama 		         : $member[nama]  
email                : $member[email] 
Alamat		         : $member[alamat]  
Kota          	     : $member[kota] 
Telpon          	 : $member[nomor_telp] 
Karena Sesuatu hal maka website member tersebut kami blokir 

=============[DATA ANDA]===================== 
Username Anda        : $member[username_sponsor]  
Nama Anda    	     : $member[nama_sponsor]  
email Anda           : $member[email_sponsor] 

Demikian pemberitahuan ini dan terima kasih atas kerja samanya. 
       	    
Salam Sukses 
$ADVT_NAME 
$NAMA_WEB 
	        
=================================================
";
$pesanBaru_2 = "----------------------->>$NAMA_WEB<<-----------------------------\n\n" . $message_2 . "\n\n";
sentMail( "$ADVT_NAME <$ADMIN_EMAIL>", $member[email_sponsor], $subject_2, $pesanBaru_2 );


         //---- Kirim email ke Pengelola / Webmaster
         // --- PERHATIAN !!! Untuk mencegah error Jangan Ganti Variabel yang berawalan tanda "$"
			
$subject_3 = "Data Pemblokiran member $user ";
$message_3 = "
Hallo $ADVT_NAME, Anda Telah melakukan Pemblokiran member !

=============[TERHADAP MEMBER]===================== 
Username		  : $user  
Password		  : $member[passwd]  
Nama 		      : $member[nama]  
email             : $member[email] 
Alamat		      : $member[alamat]  
Kota          	  : $member[kota] 
Telpon            : $member[nomor_telp] 
Website           : $NAMA_WEB/?id=$user 
Username Sponsor  : $member[username_sponsor]  
Nama Sponsor	  : $member[nama_sponsor]  
email Sponsor     : $member[email_sponsor] 
=================================================
";
	
$pesanBaru_3 = "----------------------->>$NAMA_WEB<<-----------------------------\n\n" . $message_3 . "\n\n";
sentMail( $member[email], $ADMIN_EMAIL, $subject_3, $pesanBaru_3 );
        
        
        displayHeader( "Admin > Member List" );
        echo "<p align=\"center\"><font size=\"2\">::: Pemblokiran Member Dengan Username : <b>$user</b> Telah Sukses !!! :::</font></p>\n";
        echo "<p align=\"center\"><a href=\"admin_menu.php\"><b>Back to Admin</b></a></p>\n";
        displayFooter();

        }
	
?>

