<?
    require( "label.php" );
    if( !verifyAdmin() ) header( "Location: admin.php" );
    displayHeader( "Admin > Search Member" );
    $cari=ltrim($cari);
	$pilih=ltrim($pilih);
    dbConnect();
	$result = mysql_query( "SELECT * FROM member where $pilih like'%$cari%'" ) or error( mysql_error() );
	$memnum = mysql_num_rows( $result );
    if( $memnum != 0 )
	{	  
	    echo "<div align=\"center\">\n";
	    echo "  <center>\n";
	    echo "  <table border=\"0\" cellspacing=\"0\" width=\"750\" cellpadding=\"5\"><font size=\"1\" face=\"Tahoma\" >\n";
	    echo "    <tr class=\"frame\">\n";
	    echo "      <td width=\"10%\" height=\"25\" align=\"left\"><font face=\"Tahoma\" size=\"1\" color=\"#FFFFFF\"><b>Username</b></font></td>\n";
	    echo "      <td width=\"14%\" height=\"25\" align=\"left\"><font face=\"Tahoma\" size=\"1\" color=\"#FFFFFF\"><b>Nama</b></font></td>\n";
	    echo "      <td width=\"14%\" height=\"25\" align=\"left\"><font face=\"Tahoma\" size=\"1\" color=\"#FFFFFF\"><b>Email</b></font></td>\n";
	    echo "      <td width=\"10%\" height=\"25\" align=\"left\"><font face=\"Tahoma\" size=\"1\" color=\"#FFFFFF\"><b>Kota</b></font></td>\n";
        echo "      <td width=\"12%\" height=\"25\" align=\"left\"><font face=\"Tahoma\" size=\"1\" color=\"#FFFFFF\"><b>IP Ad</b></font></td>\n";
        echo "      <td width=\"8%\" height=\"25\" align=\"left\"><font face=\"Tahoma\" size=\"1\" color=\"#FFFFFF\"><b>Status</b></font></td>\n";
	    echo "      <td width=\"8%\" height=\"25\" align=\"left\"><font face=\"Tahoma\" size=\"1\" color=\"#FFFFFF\"><b>Aktifkan ?</b></font></td>\n";
	    echo "      <td width=\"8%\" height=\"25\" align=\"left\"><font face=\"Tahoma\" size=\"1\" color=\"#FFFFFF\"><b>Blokir ?</b></font></td>\n";
        echo "      <td width=\"8%\" height=\"25\" align=\"left\"><font face=\"Tahoma\" size=\"1\" color=\"#FFFFFF\"><b>Delete ?</b></font></td>\n";
		echo "      <td width=\"8%\" height=\"25\" align=\"left\"><font face=\"Tahoma\" size=\"1\" color=\"#FFFFFF\"><b>Detail ?</b></font></td>\n";
        echo "    </tr>\n";
  	    $i = 1;
		while( $row = mysql_fetch_array( $result ) )
		{
			$i % 2 == 0 ? $bgColor = "#FFFFFF" : $bgColor = "#E6E6E6";
            echo "      <td width=\"10%\" height=\"25\" align=\"left\" bgcolor=\"$bgColor\"><font face=\"Tahoma\" size=\"1\" color=\"#000080\">$row[1]</td>\n";
	        echo "      <td width=\"14%\" height=\"25\" align=\"left\" bgcolor=\"$bgColor\"><font face=\"Tahoma\" size=\"1\" color=\"#000080\">{$row[3]}</a></td>\n";
	        echo "      <td width=\"14%\" height=\"25\" align=\"left\" bgcolor=\"$bgColor\"><font face=\"Tahoma\" size=\"1\" color=\"#000080\">{$row[4]}</td>\n";
	        echo "      <td width=\"10%\" height=\"25\" align=\"left\" bgcolor=\"$bgColor\"><font face=\"Tahoma\" size=\"1\" color=\"#000080\">{$row[9]}</td>\n";
            echo "      <td width=\"12%\" height=\"25\" align=\"left\" bgcolor=\"$bgColor\"><font face=\"Tahoma\" size=\"1\" color=\"#000080\">{$row[29]}</td>\n";
            echo "      <td width=\"8%\" height=\"25\" align=\"left\" bgcolor=\"$bgColor\"><font face=\"Tahoma\" size=\"1\" color=\"#000080\">{$row[30]}</td>\n";
	        echo "      <td width=\"8%\" height=\"25\" align=\"left\" bgcolor=\"$bgColor\"><font face=\"Tahoma\" size=\"1\" color=\"#000080\"><font face=\"verdana\" size=\"1\" color=\"#000080\"><a href='admin_aktif2.php?user={$row[1]}'>Aktifkan<font size=\"1\"></td>\n";
	        echo "      <td width=\"8%\" height=\"25\" align=\"left\" bgcolor=\"$bgColor\"><font face=\"Tahoma\" size=\"1\" color=\"#000080\"><font face=\"verdana\" size=\"1\" color=\"#000080\"><a href='admin_blokir2.php?user={$row[1]}'>memblokir<font size=\"1\"></td>\n";
            echo "      <td width=\"8%\" height=\"25\" align=\"left\" bgcolor=\"$bgColor\"><font face=\"Tahoma\" size=\"1\" color=\"#000080\"><font face=\"verdana\" size=\"1\" color=\"#000080\"><a href='hapus_member.php?user={$row[1]}'>Delete<font size=\"1\"></td>\n";
			echo "      <td width=\"8%\" height=\"25\" align=\"left\" bgcolor=\"$bgColor\"><font face=\"Tahoma\" size=\"1\" color=\"#000080\"><font face=\"verdana\" size=\"1\" color=\"#000080\"><a href='admin_detail.php?user={$row[1]}'>Detail<font size=\"1\"></td>\n";
            echo "    </tr>\n";
			$i++;
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
	    echo "<p align=\"center\"><b>Maaf !!!, Data tidak ditemukan</b></a></p>\n";
		}  
        echo "<p align=\"center\"><font size=\"2\"><a href=\"admin_menu.php\"><b>Back to Admin</b></a></p>\n";
	   displayFooter();
	
?>
