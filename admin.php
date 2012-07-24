<?php
	require( "label.php" );
	if( isset( $action ) )
	{
		if( $action == "login" )
		{
			$admin_Name = trim( $admin_Name );
			$admin_Passwd = trim( $admin_Passwd );
			if( $admin_Name == "" ) error( "AdminName Kosong !" );
			if( $admin_Passwd == "" ) error( "Password Kosong !" );
			if( $admin_Name != $ADMIN_NAME ) error( "Nama Admin Salah !" );
			if( $admin_Passwd != $ADMIN_PASS ) error( "Password Salah !" );
			session_register( "admin_Name" );
			session_register( "admin_Passwd" );
			header( "Location: admin_menu.php" );
		}
		elseif( $action == "logout" )
		{
			session_start();
			session_unregister( "admin_Name" );
			session_unregister( "admin_Passwd" );
			displayHeader( "Admin Logout" );
			echo "<p align=\"center\"><font size=\"4\">Anda Telah Logout Dengan Sukses !</font></p>\n";
			echo "<p align=\"center\"><a href=\"index.php\"><b>Home</b></a></p>\n";
			displayFooter();
		}
	}
	else
	{
		if( verifyAdmin() ) header( "Location: admin_menu.php" );
                echo "<p align=\"center\"><img src=\"./banner.jpg\"  border=\"0\" ></a></p>\n";
		displayHeader( "Admin Login" );
		echo "<p align=\"center\"><font size=\"4\">Admin Login</font></p>\n";
		echo "<div align=\"center\">\n";
		echo "  <center>\n";
		echo "  <table border=\"0\" cellpadding=\"0\" cellspacing=\"0\">\n";
		echo "  <form method=\"post\" action=\"$PHP_SELF?action=login\">\n";
		echo "    <tr>\n";
		echo "      <td width=\"80\" height=\"25\">Admin</td>\n";
		echo "      <td width=\"160\" height=\"25\"><input type=\"text\" name=\"admin_Name\" size=\"20\" maxlength=\"50\"></td>\n";
		echo "    </tr>\n";
		echo "    <tr>\n";
		echo "      <td width=\"80\" height=\"25\">Password</td>\n";
		echo "      <td width=\"160\" height=\"25\"><input type=\"password\" name=\"admin_Passwd\" size=\"20\" maxlength=\"12\"></td>\n";
		echo "    </tr>\n";
		echo "    <tr>\n";
		echo "      <td width=\"8\" height=\"25\"></td>\n";
		echo "      <td width=\"160\" height=\"25\"><input type=\"submit\" value=\"  Login  \"></td>\n";
		echo "    </tr>\n";
		echo "  </form>\n";
		echo "  </table>\n";
		echo "  </center>\n";
		echo "</div>\n";
		echo "<p align=\"center\"><a href=\"javascript:history.back();\"><b>Back</b></a> | <a href=\"index.php\"><b>Home</b></a></p>\n";
		displayFooter();
	}
?>
