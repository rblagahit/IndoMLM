<?
	require( "label.php" );
	if( !verifyAdmin() ) header( "Location: admin.php" );
	dbConnect();
	$halaman = "20" ;
    $status="aktif";
	$result = mysql_query( "SELECT * FROM member WHERE stat='$status' ORDER BY user_id DESC" ) or error( mysql_error() );
	$memnum = mysql_num_rows( $result );
	$jmlhalaman = ceil(mysql_num_rows($result) / $halaman);
	
	if(!isset($page))
	{
		$page = 0;
	}
	$offset = $page * $halaman;
	$resul = mysql_query( "SELECT * FROM member where stat='$status' ORDER BY user_id DESC LIMIT $offset, $halaman" ) or error( mysql_error() );
	
	
	displayHeader( "Admin > Member List" );
    echo " <p align=\"center\"> Daftar di bawah adalah Tampilan Member yang sudah <b>Aktif</b>. Karena Sesuatu hal, misalnya kegiatan <b>SPAM</b> atau sebab lainnya yang dilakukan member, maka anda berhak untuk melakukan <b>pemblokiran</b>. Untuk Memblokir Member klik menu <b>'Blokir'</b>, maka secara otomatis website member yang bersangkutan akan terblokir dan tidak bisa masuk member area  </p> \n";
    echo "<p align=\"center\"><font size=\"4\">Total member yang sudah aktif = $memnum </font></p>\n";
	if( $memnum != 0 )
	{
	    echo "<div align=\"left\"><small>\n";
	    echo "  <center>\n";
	    echo "  <table border=\"0\" cellspacing=\"0\" width=\"750\" cellpadding=\"3\">\n";
	    echo "    <tr class=\"frame\">\n";
        echo "      <td width=\"8%\" height=\"25\" align=\"left\"><small><font color=\"#FFFFFF\"><b>Username</b></font></small></td>\n";
	    echo "      <td width=\"15%\" height=\"25\" align=\"left\"><small><font color=\"#FFFFFF\"><b>Nama</b></font></small></td>\n";
	    echo "      <td width=\"15%\" height=\"25\" align=\"left\"><small><font color=\"#FFFFFF\"><b>email</b></font></small></td>\n";
	    echo "      <td width=\"10%\" height=\"25\" align=\"left\"><small><font color=\"#FFFFFF\"><b>Kota</b></font></small></td>\n";
        echo "      <td width=\"8%\" height=\"25\" align=\"left\"><small><font color=\"#FFFFFF\"><b>Nomor ID</b></font></small></td>\n";
	    echo "      <td width=\"14%\" height=\"25\" align=\"left\"><small><font color=\"#FFFFFF\"><b>Nama Sponsor</b></font></small></td>\n";
        echo "      <td width=\"10%\" height=\"25\" align=\"left\"><small><font color=\"#FFFFFF\"><b>ID Sponsor </b></font></small></td>\n";
	    echo "      <td width=\"10%\" height=\"25\" align=\"left\"><small><font color=\"#FFFFFF\"><b>Tgl Join</b></font></small></td>\n";
	    echo "      <td width=\"10%\" height=\"25\" align=\"left\"><small><font color=\"#FFFFFF\"><b>Blokir ?</b></font></small></td>\n";
	    echo "    </tr>\n";
		$i = 1;
		while( $row = mysql_fetch_array( $resul ) )
		{
			$i % 2 == 0 ? $bgColor = "#FFFFFF" : $bgColor = "#E6E6E6";
		 	//$adsnum = mysql_num_rows( mysql_query( "SELECT user_name FROM member WHERE user_name={$row['user_name']}" ) );
		 	echo "    <tr>\n";
            echo "      <td width=\"8%\" height=\"25\" align=\"left\" bgcolor=\"$bgColor\"><small>{$row['username']}</small></td>\n";
	        echo "      <td width=\"15%\" height=\"25\" align=\"left\" bgcolor=\"$bgColor\"><small>{$row['nama']}</small></td>\n";
	        echo "      <td width=\"15%\" height=\"25\" align=\"left\" bgcolor=\"$bgColor\"><small>{$row['email']}</small></td>\n";
	        echo "      <td width=\"10%\" height=\"25\" align=\"left\" bgcolor=\"$bgColor\"><small>{$row['kota']}</small></td>\n";
            echo "      <td width=\"8%\" height=\"25\" align=\"left\" bgcolor=\"$bgColor\"><small>{$row['nomor_id']}</small></td>\n";
			echo "      <td width=\"14%\" height=\"25\" align=\"left\" bgcolor=\"$bgColor\"><small>{$row['nama_sponsor']}</small></td>\n";
            echo "      <td width=\"10%\" height=\"25\" align=\"left\" bgcolor=\"$bgColor\"><small>{$row['id_sponsor']}</small></td>\n";
            echo "      <td width=\"10%\" height=\"25\" align=\"left\" bgcolor=\"$bgColor\"><small>" . date( "d-m-y", $row['tanggal_join'] ) . "</small></td>\n";
            echo "      <td width=\"10%\" height=\"25\" align=\"left\" bgcolor=\"$bgColor\"><font face=\"verdana\" size=\"1\" color=\"#000080\"><a href='admin_blokir2.php?user={$row['username']}'>memblokir<font size=\"1\"></td>\n";
            echo "    </tr>\n";
 			$i++;
 		}
		echo "<b>Halaman :</b>\n";
		for($a=0;$a<$jmlhalaman;$a++)
	    {
		echo" [<a href='admin_blokir.php?page=$a'>$a</a>]\n";
     	}
 		echo "    <tr>\n";
 		echo "      <td width=\"100%\" height=\"1\" bgcolor=\"#808080\" colspan=\"15\"></td>\n";
 		echo "    </td>\n";
 	    echo "  </table>\n";
 	 	echo " </center>\n";
		echo "</div></small>\n";
	}
	echo "<p align=\"center\"><a href=\"admin_menu.php\"><b>Back to Admin</b></a></p>\n";
	displayFooter();
?>
