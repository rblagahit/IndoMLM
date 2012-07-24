<?
	require( "label.php" );
	dbConnect();
    if( !verifyAdmin() ) header( "Location: admin.php" );


	$result = mysql_query( "SELECT * FROM member where username_sponsor='$USERNAME_DEFAULT'" ) or error( mysql_error() );
	$memnum = mysql_num_rows( $result );
	displayHeader( "Member Area > Genealogy View" );
	echo "<p align=\"center\"><font size=\"2\">Berikut ini daftar member yang join lewat default website atau tanpa link sponsor, jumlah = $memnum Orang</font></p>\n";
	if( $memnum != 0 )
	{
	    echo "<div align=\"left\">\n";
	    echo "  <center>\n";
	    echo "  <table border=\"0\" cellspacing=\"0\" width=\"700\" cellpadding=\"3\"><font size=\"1\" face=\"Tahoma\" >\n";
	    echo "    <tr class=\"frame\">\n";
	    echo "      <td width=\"20%\" height=\"25\" align=\"left\"><font face=\"Tahoma\" size=\"1\" color=\"#FFFFFF\"><b>Nama</b></font></td>\n";
	    echo "      <td width=\"15%\" height=\"25\" align=\"left\"><font face=\"Tahoma\" size=\"1\" color=\"#FFFFFF\"><b>E-mail</b></font></td>\n";
	    echo "      <td width=\"20%\" height=\"25\" align=\"left\"><font face=\"Tahoma\" size=\"1\" color=\"#FFFFFF\"><b>Alamat</b></font></td>\n";
	    echo "      <td width=\"10%\" height=\"25\" align=\"left\"><font face=\"Tahoma\" size=\"1\" color=\"#FFFFFF\"><b>Nomor ID</b></font></td>\n";
	    echo "      <td width=\"10%\" height=\"25\" align=\"left\"><font face=\"Tahoma\" size=\"1\" color=\"#FFFFFF\"><b>Username</b></font></td>\n";
        echo "      <td width=\"10%\" height=\"25\" align=\"left\"><font face=\"Tahoma\" size=\"1\" color=\"#FFFFFF\"><b>Status</b></font></td>\n";
        echo "      <td width=\"10%\" height=\"25\" align=\"left\"><font face=\"Tahoma\" size=\"1\" color=\"#FFFFFF\"><b>Kota</b></font></td>\n";
   	    echo "    </tr>\n";
		$i = 1;
		while( $row = mysql_fetch_array( $result ) )
		{
            $i % 2 == 0 ? $bgColor = "#FFFFFF" : $bgColor = "#E6E6E6";
            echo "    <tr>\n";
	        echo "      <td width=\"20%\" height=\"25\" align=\"left\" bgcolor=\"$bgColor\"><font face=\"Tahoma\" size=\"1\" color=\"#000080\">{$row['nama']}</td>\n";
	        echo "      <td width=\"15%\" height=\"25\" align=\"left\" bgcolor=\"$bgColor\"><font face=\"Tahoma\" size=\"1\" color=\"#000080\">{$row['email']}</a></td>\n";
	        echo "      <td width=\"20%\" height=\"25\" align=\"left\" bgcolor=\"$bgColor\"><font face=\"Tahoma\" size=\"1\" color=\"#000080\">{$row['alamat']}</td>\n";
	        echo "      <td width=\"10%\" height=\"25\" align=\"left\" bgcolor=\"$bgColor\"><font face=\"Tahoma\" size=\"1\" color=\"#000080\">{$row['nomor_id']}</td>\n";
	        echo "      <td width=\"10%\" height=\"25\" align=\"left\" bgcolor=\"$bgColor\"><font face=\"Tahoma\" size=\"1\" color=\"#000080\">{$row['username']}</td>\n";
            echo "      <td width=\"10%\" height=\"25\" align=\"left\" bgcolor=\"$bgColor\"><font face=\"Tahoma\" size=\"1\" color=\"#000080\">{$row['stat']}</td>\n";
            echo "      <td width=\"10%\" height=\"25\" align=\"left\" bgcolor=\"$bgColor\"><font face=\"Tahoma\" size=\"1\" color=\"#000080\">{$row['kota']}</td>\n";
       	    echo "    </tr>\n";
			$i=$i+1;
 		}
 		echo "    <tr>\n";
 		echo "      <td width=\"100%\" height=\"1\" bgcolor=\"#808080\" colspan=\"10\"></td>\n";
 		echo "    </td>\n";
 	    echo "  </table>\n";
 	 	echo " </center>\n";
		echo "</div>\n";

	     }
		else
		{	
	    echo "<p align=\"center\"><b>Maaf Anda belum mempunyai downline</b></a></p>\n";
		}
  
	echo "<p align=\"center\"><a href=\"admin_menu.php\"><b>Back to Admin</b></a></p>\n";
	displayFooter();
?>
