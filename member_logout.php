<?
     session_start();
     session_unregister( "username" );
     session_unregister( "password" );
     session_unregister( "session_username" );
     session_unregister( "session_nama_member" );
     session_unregister( "session_email_member" );
     session_unregister( "session_hits" );
        
     header( "Location: index.php?id=$session_username_sponsor" );

?>



