<?
	require( "label.php" );
	dbConnect();
	if( !verifyUser() ) header( "Location: index.php" );

	if( isset( $user ) )
	{

		dbConnect();
                $result = mysql_query( "SELECT * FROM member where username_upline='$user'" ) or error( mysql_error() );
		$menu = mysql_num_rows( $result );
                displayHeader( "Member Area > Genealogy View" );
  		echo "<p align=\"center\"><font size=\"4\">Jumlah Downline langsung member ini = $menu</font></p>\n";
		if( $menu != 0 )
		{
                   echo "<div align=\"center\">\n";
	           echo "  <center>\n";
	           echo "  <table border=\"0\" cellspacing=\"0\" width=\"700\" cellpadding=\"0\"><font size=\"1\" face=\"Tahoma\" >\n";
	           echo "    <tr class=\"frame\">\n";
	           echo "      <td width=\"15%\" height=\"25\" align=\"center\"><font face=\"Tahoma\" size=\"1\" color=\"#FFFFFF\"><b>Nama</b></font></td>\n";
	           echo "      <td width=\"15%\" height=\"25\" align=\"center\"><font face=\"Tahoma\" size=\"1\" color=\"#FFFFFF\"><b>E-mail</b></font></td>\n";
	           echo "      <td width=\"15%\" height=\"25\" align=\"center\"><font face=\"Tahoma\" size=\"1\" color=\"#FFFFFF\"><b>Alamat</b></font></td>\n";
	           echo "      <td width=\"10%\" height=\"25\" align=\"center\"><font face=\"Tahoma\" size=\"1\" color=\"#FFFFFF\"><b>Nomor ID</b></font></td>\n";
	           echo "      <td width=\"10%\" height=\"25\" align=\"center\"><font face=\"Tahoma\" size=\"1\" color=\"#FFFFFF\"><b>Username</b></font></td>\n";
                   echo "      <td width=\"10%\" height=\"25\" align=\"center\"><font face=\"Tahoma\" size=\"1\" color=\"#FFFFFF\"><b>Status</b></font></td>\n";
                   echo "      <td width=\"10%\" height=\"25\" align=\"center\"><font face=\"Tahoma\" size=\"1\" color=\"#FFFFFF\"><b>Kota</b></font></td>\n";
	           echo "      <td width=\"10%\" height=\"25\" align=\"center\"><font face=\"Tahoma\" size=\"1\" color=\"#FFFFFF\"><b>Next level</b></font></td>\n";
	           echo "    </tr>\n";
			$i = 1;
			while( $row = mysql_fetch_array( $result ) )
			{
		
			$i % 2 == 0 ? $bgColor = "#FFFFFF" : $bgColor = "#E6E6E6";
		 
                         echo "    <tr>\n";
	                 echo "      <td width=\"15%\" height=\"25\" align=\"center\" bgcolor=\"$bgColor\"><font face=\"Tahoma\" size=\"1\" color=\"#000080\">{$row['nama']}</td>\n";
	                 echo "      <td width=\"15%\" height=\"25\" align=\"center\" bgcolor=\"$bgColor\"><font face=\"Tahoma\" size=\"1\" color=\"#000080\">{$row['email']}</a></td>\n";
	                 echo "      <td width=\"15%\" height=\"25\" align=\"center\" bgcolor=\"$bgColor\"><font face=\"Tahoma\" size=\"1\" color=\"#000080\">{$row['alamat']}</td>\n";
	                 echo "      <td width=\"10%\" height=\"25\" align=\"center\" bgcolor=\"$bgColor\"><font face=\"Tahoma\" size=\"1\" color=\"#000080\">{$row['nomor_id']}</td>\n";
	                 echo "      <td width=\"10%\" height=\"25\" align=\"center\" bgcolor=\"$bgColor\"><font face=\"Tahoma\" size=\"1\" color=\"#000080\">{$row['username']}</td>\n";
                         echo "      <td width=\"10%\" height=\"25\" align=\"center\" bgcolor=\"$bgColor\"><font face=\"Tahoma\" size=\"1\" color=\"#000080\">{$row['stat']}</td>\n";
                         echo "      <td width=\"10%\" height=\"25\" align=\"center\" bgcolor=\"$bgColor\"><font face=\"Tahoma\" size=\"1\" color=\"#000080\">{$row['kota']}</td>\n";
		         echo "      <td width=\"10%\" height=\"25\" align=\"center\" bgcolor=\"$bgColor\"><font face=\"Tahoma\" size=\"1\" color=\"#000080\"><a href='member_genealogy1.php?user={$row['username']}'>Next<font size=\"1\"></td>\n";
     	                 echo "    </tr>\n";
			  $i=$i+1;
 		         }
 		         echo "    <tr>\n";
 		         echo "      <td width=\"100%\" height=\"1\" bgcolor=\"#808080\" colspan=\"10\"></td>\n";
 		         echo "    </td>\n";
 	                 echo "  </table>\n";
 	 	         echo " </center>\n";
		         echo "</div>\n";
	                 echo "<p align=\"center\"><a href=\"javascript:history.back()\"><b>Back </b></a></p>\n";
	                 }
		         else
		         {

	                  echo "<p align=\"center\"><b>Maaf member ini belum mempunyai downline</b></a></p>\n";
		          echo "<p align=\"center\"><a href=\"javascript:history.back()\"><b>Back </b></a></p>\n";
		          }
}
	
?>
