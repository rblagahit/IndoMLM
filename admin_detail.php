<?
    require( "label.php" );
    if( !verifyAdmin() ) header( "Location: admin.php" );
    displayHeader( "Admin > Detail Member" );
    //$username=ltrim($username);
    dbConnect();
	$result = mysql_query( "SELECT * FROM member where username='$user'" ) or error( mysql_error() );
    $member = mysql_fetch_array( $result );
    if( mysql_num_rows( $result ) != 1 ) error( "Username yang anda cari tidak ada dalam database " );
        echo "<p style=\"margin-top: 0; margin-bottom: 0\" align=\"center\"><font size=\"2\">Detail Member username = <b>$member[username]</b></font></p>\n";
	    echo "<div align=\"center\">\n";
	    echo "  <center>\n";
	    echo "  <table border=\"0\" cellspacing=\"0\" width=\"450\" cellpadding=\"5\"><font size=\"1\" face=\"Tahoma\" >\n";
	    echo "    <tr class=\"frame\">\n";
	    echo "      <td width=\"30%\" height=\"25\" align=\"left\"><font face=\"verdana\" style=\"font-size: 8pt\" color=\"#FFFFFF\"><b></b></font></td>\n";
	    echo "      <td width=\"70%\" height=\"25\" align=\"left\"><font face=\"verdana\" style=\"font-size: 8pt\" color=\"#FFFFFF\"><b>Detail Data Member</b></font></td>\n";
	    echo "    </tr>\n";
  	    $bgColor = "#E6E6E6";

       	echo "    <tr>\n";
        echo "      <td width=\"30%\" height=\"25\" align=\"left\"><font face=\"verdana\" style=\"font-size: 8pt\" color=\"#000080\">Username</td>\n";
	    echo "      <td width=\"70%\" height=\"25\" align=\"left\"><font face=\"verdana\" style=\"font-size: 8pt\" color=\"#000080\">: $member[username]</td>\n";
	    echo "    </tr>\n";
       
       	echo "    <tr>\n";
        echo "      <td width=\"30%\" height=\"25\" align=\"left\" bgcolor=\"$bgColor\"><font face=\"verdana\" style=\"font-size: 8pt\" color=\"#000080\">Password</td>\n";
	    echo "      <td width=\"70%\" height=\"25\" align=\"left\" bgcolor=\"$bgColor\"><font face=\"verdana\" style=\"font-size: 8pt\" color=\"#000080\">: $member[passwd]</td>\n";
	    echo "    </tr>\n";
		
		echo "    <tr>\n";
        echo "      <td width=\"30%\" height=\"25\" align=\"left\"><font face=\"verdana\" style=\"font-size: 8pt\" color=\"#000080\">Nama</td>\n";
	    echo "      <td width=\"70%\" height=\"25\" align=\"left\"><font face=\"verdana\" style=\"font-size: 8pt\" color=\"#000080\">: $member[nama]</td>\n";
	    echo "    </tr>\n";
		 
		echo "    <tr>\n";
        echo "      <td width=\"30%\" height=\"25\" align=\"left\" bgcolor=\"$bgColor\"><font face=\"verdana\" style=\"font-size: 8pt\" color=\"#000080\">Email</td>\n";
	    echo "      <td width=\"70%\" height=\"25\" align=\"left\" bgcolor=\"$bgColor\"><font face=\"verdana\" style=\"font-size: 8pt\" color=\"#000080\">: $member[email]</td>\n";
	    echo "    </tr>\n";
		 
		echo "    <tr>\n";
        echo "      <td width=\"30%\" height=\"25\" align=\"left\"><font face=\"verdana\" style=\"font-size: 8pt\" color=\"#000080\">Tanggal Lahir</td>\n";
	    echo "      <td width=\"70%\" height=\"25\" align=\"left\"><font face=\"verdana\" style=\"font-size: 8pt\" color=\"#000080\">: $member[tgl_lahir]</td>\n";
	    echo "    </tr>\n"; 
		 
		echo "    <tr>\n";
        echo "      <td width=\"30%\" height=\"25\" align=\"left\" bgcolor=\"$bgColor\"><font face=\"verdana\" style=\"font-size: 8pt\" color=\"#000080\">Nomor ID</td>\n";
	    echo "      <td width=\"70%\" height=\"25\" align=\"left\" bgcolor=\"$bgColor\"><font face=\"verdana\" style=\"font-size: 8pt\" color=\"#000080\">: $member[nomor_id]</td>\n";
	    echo "    </tr>\n";
		
		echo "    <tr>\n";
        echo "      <td width=\"30%\" height=\"25\" align=\"left\"><font face=\"verdana\" style=\"font-size: 8pt\" color=\"#000080\">Nomor KTP</td>\n";
	    echo "      <td width=\"70%\" height=\"25\" align=\"left\"><font face=\"verdana\" style=\"font-size: 8pt\" color=\"#000080\">: $member[nomor_ktp]</td>\n";
	    echo "    </tr>\n"; 
		
		echo "    <tr>\n";
        echo "      <td width=\"30%\" height=\"25\" align=\"left\" bgcolor=\"$bgColor\"><font face=\"verdana\" style=\"font-size: 8pt\" color=\"#000080\">Alamat</td>\n";
	    echo "      <td width=\"70%\" height=\"25\" align=\"left\" bgcolor=\"$bgColor\"><font face=\"verdana\" style=\"font-size: 8pt\" color=\"#000080\">: $member[alamat]</td>\n";
	    echo "    </tr>\n";
		
		echo "    <tr>\n";
        echo "      <td width=\"30%\" height=\"25\" align=\"left\"><font face=\"verdana\" style=\"font-size: 8pt\" color=\"#000080\">Kota</td>\n";
	    echo "      <td width=\"70%\" height=\"25\" align=\"left\"><font face=\"verdana\" style=\"font-size: 8pt\" color=\"#000080\">: $member[kota]</td>\n";
	    echo "    </tr>\n";
		
		echo "    <tr>\n";
        echo "      <td width=\"30%\" height=\"25\" align=\"left\" bgcolor=\"$bgColor\"><font face=\"verdana\" style=\"font-size: 8pt\" color=\"#000080\">Kode Pos</td>\n";
	    echo "      <td width=\"70%\" height=\"25\" align=\"left\" bgcolor=\"$bgColor\"><font face=\"verdana\" style=\"font-size: 8pt\" color=\"#000080\">: $member[kodepos]</td>\n";
	    echo "    </tr>\n";
		
		echo "    <tr>\n";
        echo "      <td width=\"30%\" height=\"25\" align=\"left\"><font face=\"verdana\" style=\"font-size: 8pt\" color=\"#000080\">Nomor Telpon</td>\n";
	    echo "      <td width=\"70%\" height=\"25\" align=\"left\"><font face=\"verdana\" style=\"font-size: 8pt\" color=\"#000080\">: $member[nomor_telp]</td>\n";
	    echo "    </tr>\n";
		
		echo "    <tr>\n";
        echo "      <td width=\"30%\" height=\"25\" align=\"left\" bgcolor=\"$bgColor\"><font face=\"verdana\" style=\"font-size: 8pt\" color=\"#000080\">Pasangan</td>\n";
	    echo "      <td width=\"70%\" height=\"25\" align=\"left\" bgcolor=\"$bgColor\"><font face=\"verdana\" style=\"font-size: 8pt\" color=\"#000080\">: $member[suami_istri]</td>\n";
	    echo "    </tr>\n";
		
		echo "    <tr>\n";
        echo "      <td width=\"30%\" height=\"25\" align=\"left\"><font face=\"verdana\" style=\"font-size: 8pt\" color=\"#000080\">Nama Pasangan</td>\n";
	    echo "      <td width=\"70%\" height=\"25\" align=\"left\"><font face=\"verdana\" style=\"font-size: 8pt\" color=\"#000080\">: $member[nama_pasangan]</td>\n";
	    echo "    </tr>\n";
		
		echo "    <tr>\n";
        echo "      <td width=\"30%\" height=\"25\" align=\"left\" bgcolor=\"$bgColor\"><font face=\"verdana\" style=\"font-size: 8pt\" color=\"#000080\">Pekerjaan</td>\n";
	    echo "      <td width=\"70%\" height=\"25\" align=\"left\" bgcolor=\"$bgColor\"><font face=\"verdana\" style=\"font-size: 8pt\" color=\"#000080\">: $member[pekerjaan]</td>\n";
	    echo "    </tr>\n";
		
		echo "    <tr>\n";
        echo "      <td width=\"30%\" height=\"25\" align=\"left\"><font face=\"verdana\" style=\"font-size: 8pt\" color=\"#000080\">Agama</td>\n";
	    echo "      <td width=\"70%\" height=\"25\" align=\"left\"><font face=\"verdana\" style=\"font-size: 8pt\" color=\"#000080\">: $member[agama]</td>\n";
	    echo "    </tr>\n";
		
		echo "    <tr>\n";
        echo "      <td width=\"30%\" height=\"25\" align=\"left\" bgcolor=\"$bgColor\"><font face=\"verdana\" style=\"font-size: 8pt\" color=\"#000080\">Pendidikan Akhir</td>\n";
	    echo "      <td width=\"70%\" height=\"25\" align=\"left\" bgcolor=\"$bgColor\"><font face=\"verdana\" style=\"font-size: 8pt\" color=\"#000080\">: $member[dik_akhir]</td>\n";
	    echo "    </tr>\n";
		
		echo "    <tr>\n";
        echo "      <td width=\"30%\" height=\"25\" align=\"left\"><font face=\"verdana\" style=\"font-size: 8pt\" color=\"#000080\">Nama Ahli Waris</td>\n";
	    echo "      <td width=\"70%\" height=\"25\" align=\"left\"><font face=\"verdana\" style=\"font-size: 8pt\" color=\"#000080\">: $member[nama_ahli_waris]</td>\n";
	    echo "    </tr>\n";
		
		echo "    <tr>\n";
        echo "      <td width=\"30%\" height=\"25\" align=\"left\" bgcolor=\"$bgColor\"><font face=\"verdana\" style=\"font-size: 8pt\" color=\"#000080\">Hubungan Ahli Waris</td>\n";
	    echo "      <td width=\"70%\" height=\"25\" align=\"left\" bgcolor=\"$bgColor\"><font face=\"verdana\" style=\"font-size: 8pt\" color=\"#000080\">: $member[hub_ahli_waris]</td>\n";
	    echo "    </tr>\n";
		
		echo "    <tr>\n";
        echo "      <td width=\"30%\" height=\"25\" align=\"left\"><font face=\"verdana\" style=\"font-size: 8pt\" color=\"#000080\">Nama Bank</td>\n";
	    echo "      <td width=\"70%\" height=\"25\" align=\"left\"><font face=\"verdana\" style=\"font-size: 8pt\" color=\"#000080\">: $member[nama_bank]</td>\n";
	    echo "    </tr>\n";
	
	    echo "    <tr>\n";
        echo "      <td width=\"30%\" height=\"25\" align=\"left\" bgcolor=\"$bgColor\"><font face=\"verdana\" style=\"font-size: 8pt\" color=\"#000080\">Cabang</td>\n";
	    echo "      <td width=\"70%\" height=\"25\" align=\"left\" bgcolor=\"$bgColor\"><font face=\"verdana\" style=\"font-size: 8pt\" color=\"#000080\">: $member[cabang]</td>\n";
	    echo "    </tr>\n";
	
	    echo "    <tr>\n";
        echo "      <td width=\"30%\" height=\"25\" align=\"left\"><font face=\"verdana\" style=\"font-size: 8pt\" color=\"#000080\">Nama Nasabah</td>\n";
	    echo "      <td width=\"70%\" height=\"25\" align=\"left\"><font face=\"verdana\" style=\"font-size: 8pt\" color=\"#000080\">: $member[nama_nasabah]</td>\n";
	    echo "    </tr>\n";
	
	    echo "    <tr>\n";
        echo "      <td width=\"30%\" height=\"25\" align=\"left\" bgcolor=\"$bgColor\"><font face=\"verdana\" style=\"font-size: 8pt\" color=\"#000080\">Rekening</td>\n";
	    echo "      <td width=\"70%\" height=\"25\" align=\"left\" bgcolor=\"$bgColor\"><font face=\"verdana\" style=\"font-size: 8pt\" color=\"#000080\">: $member[nomor_rek]</td>\n";
	    echo "    </tr>\n";
	
	    echo "    <tr>\n";
        echo "      <td width=\"30%\" height=\"25\" align=\"left\"><font face=\"verdana\" style=\"font-size: 8pt\" color=\"#000080\">Nama Sponsor</td>\n";
	    echo "      <td width=\"70%\" height=\"25\" align=\"left\"><font face=\"verdana\" style=\"font-size: 8pt\" color=\"#000080\">: $member[nama_sponsor]</td>\n";
	    echo "    </tr>\n";
		
		echo "    <tr>\n";
        echo "      <td width=\"30%\" height=\"25\" align=\"left\" bgcolor=\"$bgColor\"><font face=\"verdana\" style=\"font-size: 8pt\" color=\"#000080\">ID Sponsor</td>\n";
	    echo "      <td width=\"70%\" height=\"25\" align=\"left\" bgcolor=\"$bgColor\"><font face=\"verdana\" style=\"font-size: 8pt\" color=\"#000080\">: $member[id_sponsor]</td>\n";
	    echo "    </tr>\n";
		
		echo "    <tr>\n";
        echo "      <td width=\"30%\" height=\"25\" align=\"left\"><font face=\"verdana\" style=\"font-size: 8pt\" color=\"#000080\">Nama Sponsor</td>\n";
	    echo "      <td width=\"70%\" height=\"25\" align=\"left\"><font face=\"verdana\" style=\"font-size: 8pt\" color=\"#000080\">: $member[nama_sponsor]</td>\n";
	    echo "    </tr>\n";
		
		echo "    <tr>\n";
        echo "      <td width=\"30%\" height=\"25\" align=\"left\" bgcolor=\"$bgColor\"><font face=\"verdana\" style=\"font-size: 8pt\" color=\"#000080\">Tanggal Join</td>\n";
	    echo "      <td width=\"70%\" height=\"25\" align=\"left\" bgcolor=\"$bgColor\"><font face=\"verdana\" style=\"font-size: 8pt\" color=\"#000080\">: " . date( "d-m-y", $member['tanggal_join'] ) . "</td>\n";
	    echo "    </tr>\n";
	
	
	    echo "    <tr>\n";
        echo "      <td width=\"30%\" height=\"25\" align=\"left\"><font face=\"verdana\" style=\"font-size: 8pt\" color=\"#000080\">IP Adress</td>\n";
	    echo "      <td width=\"70%\" height=\"25\" align=\"left\"><font face=\"verdana\" style=\"font-size: 8pt\" color=\"#000080\">: $member[ip_add]</td>\n";
	    echo "    </tr>\n";
		
		echo "    <tr>\n";
        echo "      <td width=\"30%\" height=\"25\" align=\"left\" bgcolor=\"$bgColor\"><font face=\"verdana\" style=\"font-size: 8pt\" color=\"#000080\">Status</td>\n";
	    echo "      <td width=\"70%\" height=\"25\" align=\"left\" bgcolor=\"$bgColor\"><font face=\"verdana\" style=\"font-size: 8pt\" color=\"#000080\">: $member[stat] </td>\n";
	    echo "    </tr>\n";
	
	    echo "    <tr>\n";
        echo "      <td width=\"30%\" height=\"25\" align=\"left\"><font face=\"verdana\" style=\"font-size: 8pt\" color=\"#000080\">HITS</td>\n";
	    echo "      <td width=\"70%\" height=\"25\" align=\"left\"><font face=\"verdana\" style=\"font-size: 8pt\" color=\"#000080\">: $member[hits]</td>\n";
	    echo "    </tr>\n";
		  
 	    echo "    <tr>\n";
        echo "      <td width=\"100%\" height=\"1\" bgcolor=\"#808080\" colspan=\"5\"></td>\n";
 	    echo "    </td>\n";
 	    echo "  </table>\n";
 	    echo " </center>\n";
	    echo "</div>\n";

        echo "<p align=\"center\"><font size=\"2\"><a href=\"admin_menu.php\"><b>Back to Admin</b></a></p>\n";
	   displayFooter();
	
?>
