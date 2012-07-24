<?
require( "label.php" );
if( !verifyAdmin() ) header( "Location: admin.php" );
dbConnect();

displayHeader( "Admin Area ----->>>>" );
echo "
<div align=\"center\">
  <center>
  <table border=\"12\" width=\"350\" cellspacing=\"1\" cellpadding=\"10\">
    <tr>
      <td><b>
       <p style=\"margin-top: 0; margin-bottom: 8\" align=\"center\"><font size=\"4\">Menu Admin Area</font></p>
       <p style=\"margin-top: 0; margin-bottom: 4\" align=\"center\"><a href=\"admin_list_all_member.php\">Lihat Semua Member</a></p>
       <p style=\"margin-top: 0; margin-bottom: 4\" align=\"center\"><a href=\"admin_aktif.php\">Aktifkan Member</a></p>
       <p style=\"margin-top: 0; margin-bottom: 4\" align=\"center\"><a href=\"admin_blokir.php\">Memblokir member</a></p>
       <p style=\"margin-top: 0; margin-bottom: 4\" align=\"center\"><a href=\"admin_kirim_email.php\">Kirim Email</a></p>
       <p style=\"margin-top: 0; margin-bottom: 4\" align=\"center\"><a href=\"admin_genealogy.php\">Lihat Jaringan Admin</a></p>
       <p style=\"margin-top: 0; margin-bottom: 4\" align=\"center\"><a href=\"admin_rekrutmen.php\">List Member Join Tanpa Link Sponsor</a></p>
       <p style=\"margin-top: 0; margin-bottom: 4\" align=\"center\"><a href=\"admin_view_tree.php\">View Tree</a></p>
       <p style=\"margin-top: 0; margin-bottom: 4\" align=\"center\"><a href=\"admin_search_member.php\">Search Member</a></p>
	   <p style=\"margin-top: 0; margin-bottom: 4\" align=\"center\"><a href=\"admin_news.php\">Input/Delete News</a></p>
	   <p style=\"margin-top: 0; margin-bottom: 4\" align=\"center\"><a href=\"create_database.php\">Create Tabel Database</a></p>
    </tr>
  </table>
  </center>
</div>
<p align=\"center\"><a href=\"admin.php?action=logout\"><b>Logout</b></a> | <a href=\"index.php\"><b>Home</b></a></p>";
displayFooter();
?>
