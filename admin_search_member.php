<?
	require( "label.php" );
	if( !verifyAdmin() ) header( "Location: admin.php" );
	dbConnect();
	$result = mysql_query( "SELECT * FROM member ORDER BY user_id DESC " ) or error( mysql_error() );
	$memnum = mysql_num_rows( $result );
	displayHeader( "Admin > Search Member" );
	echo "<p style=\"margin-top: 0; margin-bottom: 0\" align=\"center\"><font size=\"2\">Total member saat ini <b>$memnum orang</b> (aktif dan nonaktif)</font></p>\n";
	
	
	echo "<p style=\"margin-top: 0px; margin-bottom: 0px\" align=\"center\">\n";
	echo "<font face=\"Verdana\" size=\"2\">Masukkan kata kunci yang akan anda cari \n";
	echo "berdasarkan kategori dibawahnya.</font></p>\n";
	echo "<div align=\"center\">\n";
	echo "  <center>\n";
	echo "  <table border=\"0\" cellspacing=\"0\" style=\"border-collapse: collapse\" bordercolor=\"#111111\" width=\"262\" id=\"AutoNumber1\">\n";
	echo "    <tr>\n";
	echo "      <td width=\"260\">\n";
	echo "      <p style=\"MARGIN-TOP: 0px; MARGIN-BOTTOM: 0px\" align=\"center\">&nbsp;</p>\n";
	echo "      <form name=\"Klikabadi\" action=\"admin_search_member2.php\" method=\"post\">\n";
	echo "        <p align=\"center\" style=\"margin-top: 0; margin-bottom: 0\">\n";
	echo "        <input id=\"username\" name=\"cari\" size=\"20\"></p>\n";
	echo "        <p align=\"left\" style=\"margin-top: 0; margin-bottom: 0\">\n";
	echo "        <font face=\"Verdana\" size=\"2\">Kategori pencarian :</font></p>\n";
	echo "        <p align=\"left\" style=\"margin-top: 0; margin-bottom: 0\">\n";
	echo "        <font face=\"Verdana\">\n";
	echo "        <input type=\"radio\" value=\"username\" checked name=\"pilih\"><font size=\"2\">Username</font></font></p>\n";
	echo "        <p align=\"left\" style=\"margin-top: 0; margin-bottom: 0\">\n";
	echo "        <font face=\"Verdana\"><input type=\"radio\" name=\"pilih\" value=\"nama\"><font size=\"2\">Nama</font></font></p>\n";
	echo "        <p align=\"left\" style=\"margin-top: 0; margin-bottom: 0\">\n";
	echo "        <font face=\"Verdana\"><input type=\"radio\" name=\"pilih\" value=\"email\"><font size=\"2\">Email</font></font></p>\n";
	echo "        <p align=\"left\" style=\"margin-top: 0; margin-bottom: 0\">\n";
	echo "        <font face=\"Verdana\"><input type=\"radio\" name=\"pilih\" value=\"kota\"><font size=\"2\">Kota</font></font></p>\n";
	echo "        <p align=\"left\" style=\"margin-top: 0; margin-bottom: 0\">&nbsp;</p>\n";
	echo "        <p align=\"center\" style=\"margin-top: 0; margin-bottom: 0\">\n";
	echo "        <input type=\"submit\" value=\"Search\" name=\"Submit\"></p>\n";
	echo "      </form>\n";
	echo "      <p>&nbsp;</td>\n";
	echo "    </tr>\n";
	echo "  </table>\n";
	echo "  </center>\n";
	echo "</div>\n";


	echo "<p align=\"center\"><a href=\"admin_menu.php\"><b>Back to Admin</b></a></p>\n";
	displayFooter();
?>
