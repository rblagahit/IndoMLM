<?
require( "label.php" );

       $email = trim( $email );
       if ( $email == "" ) error( "Silahkan Isi email dengan benar !!!" );
       if ( !eregi( "^[0-9a-z]([-_.]?[0-9a-z])*@[0-9a-z]([-.]?[0-9a-z])*\\.[a-z]{2,3}$", $email ) ) error( "Oops .. data Email anda Invalid alias tidak sah !!!" );

       dbConnect();
       $result = mysql_query( "SELECT email FROM member WHERE email='$email'" ) or error( mysql_error() );

       if( mysql_num_rows( $result ) != 1 ) error( "Maaf, Email anda tidak terdaftar dalam database kami, atau mungkin anda lupa" );
       else
       {
        dbConnect();
	    $result = mysql_query( "SELECT * FROM member where email='$email'" ) or error( mysql_error() );
        $member = mysql_fetch_array( $result );
        $message = "Hallo $member[nama] Berikut ini password anda !\n";
	    $message .= "===========================================================\n\n";
        $message .= "Username		   : $member[username]  \n";
 	    $message .= "Password 		   : $member[passwd]  \n";
        $message .= "simpan baik-baik jangan sampai lupa Ok, \n\n";
        $message .= "=================================================";
        sentMail( "$ADVT_NAME <$ADMIN_EMAIL>", $email , ":: Pengiriman Password anda :: ", $message );

        header("Location:terimakasih_lupa_password.php");
        }

?>



