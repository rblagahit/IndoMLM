<?
require( "label.php" );

       $username = ltrim( $username );
       $password = ltrim( $password );
       if ( $username == "" ) error( "Silahkan Isi Username dengan benar !!!" );
       if ( $password == "" ) error( "Password kosong, apakah anda lupa ???" );

       dbConnect();
       $result = mysql_query( "SELECT username FROM member WHERE username='$username'" ) or error( mysql_error() );
       if( mysql_num_rows( $result ) != 1 ) error( "Maaf, Username ini tidak ada dalam database kami" );
       $result = mysql_query( "SELECT username FROM member WHERE username='$username' AND passwd LIKE BINARY '$password'" ) or error( mysql_error() );
	   if( mysql_num_rows( $result ) != 1 ) error( "Maaf, Password Salah !!! " );
          else
       {
       $status="nonaktif" ;
   	   $ukur = mysql_query( "SELECT username FROM member WHERE username='$username' AND stat LIKE BINARY '$status'" ) or error( mysql_error() );
	   if( mysql_num_rows( $ukur ) == 1 ) error( "Maaf, Status keanggotaan anda belum aktif atau sedang diblokir !!! " );
   		 else
	     {
          session_register( "username" );
          session_register( "password" );
	      $test = mysql_query("SELECT * from member where username='$username'")or error( mysql_error() );
          $member = mysql_fetch_array( $test );
          session_register("session_username");
		  session_register("session_nama_member");
		  session_register("session_email_member");
		  session_register("session_hits");
		  $session_username=$member[1];
		  $session_nama_member=$member[3];
		  $session_email_member=$member[4];
		  $session_hits=$member[31];
         
		  header( "Location: member_area.php" );
   		     }
		}

?>



