<?

require( "label.php" );
session_start();
$ip = $REMOTE_ADDR;
if( isset( $id ) )
{
dbConnect();
$result = mysql_query( "SELECT * FROM member WHERE username='$id'" ) or error( mysql_error() );
$member = mysql_fetch_array( $result );
if( mysql_num_rows( $result ) != 1 ) error( "Maaf, Username ini Tidak ada dalam database kami. " );
$status="nonaktif";
if ( $member[30] == $status ) error( "Maaf Member anda belum kami aktifkan, atau sedang kami blokir karena belum menyelesaikan transaksi dengan kami " );
else

 {
    mysql_query("UPDATE member SET hits=hits+1 WHERE username='$member[1]'") or error( mysql_error() );
    session_register("session_username_sponsor"); 
	session_register("session_nama_sponsor"); 
	session_register("session_id_sponsor"); 
	session_register("session_kota_sponsor"); 
	session_register("session_email_sponsor"); 
	session_register("session_ip"); 
	
    $session_username_sponsor=$member[1];
	$session_nama_sponsor=$member[3];
	$session_id_sponsor=$member[6];
	$session_kota_sponsor=$member[9];
	$session_email_sponsor=$member[4];
	$session_ip=$ip;
   
    return true;
	
  }
}
else
{
  if( $session_username_sponsor != "" ) 
  {
     return true;
  }
  else
  {
     dbConnect();
     $id=$USERNAME_DEFAULT ;
     $result = mysql_query( "SELECT * FROM member WHERE username='$id'" ) or error( mysql_error() );
     $member = mysql_fetch_array( $result );
     
	mysql_query("UPDATE member SET hits=hits+1 WHERE username='$member[1]'") or error( mysql_error() );
    session_register("session_username_sponsor"); 
	session_register("session_nama_sponsor"); 
	session_register("session_id_sponsor"); 
	session_register("session_kota_sponsor"); 
	session_register("session_email_sponsor"); 
	session_register("session_ip"); 
	
    $session_username_sponsor=$member[1];
	$session_nama_sponsor=$member[3];
	$session_id_sponsor=$member[6];
	$session_kota_sponsor=$member[9];
	$session_email_sponsor=$member[4];
	$session_ip=$ip;
   
    return true;
	
   }			
}
?>
