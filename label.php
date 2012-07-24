<?

//Variable server

    $ADVT_NAME = "Team Bisnis Indonesia";   // Advertisement name
    /* DATEBASE CONFIGURATION */
	$dbHost = "localhost";                              // Database host
	$dbName = "mlm";                                  // Database name
	$dbUser = "root";                                   // Database user
	$dbPasswd = "";                                     // Database password
    $NAMA_WEB = "http://www.webanda.net";                 // Website name
	$ADMIN_EMAIL = "admin@webanda.net";                // Admin's email
 	$ADMIN_NAME1 = "Team Bisnis Indonesia";
	$ADMIN_NAME = "demo";                              // Admin's login ID
	$ADMIN_PASS = "1111";                               // Admin's password
	$PAGE_BG_COLOR = "#FFFFFF";                         // Page background color
	$PAGE_BG_IMAGE = "";                                // Page backgouund image, leave blank if none

// Variable Member perdana
    $USERNAME_DEFAULT = "online";                       // Username member perdana
    $password_1 = "1111";                         // Password member perdana
    $nama_1     = "Nama Anda";                    // Nama member perdana
    $email_1    = "email@domain.com";             // Email member perdana
    $alamat_1   = "Alamat anda" ;                 // Alamat member perdana
    $telpon_1   = "081238984223";                 // Telpon member perdana
    $nomor_id_1 = "12345678";                     // Nomor ID member perdana
    $kota_1     = "Jakarta";                      // Kota member perdana


function dbConnect()
	{
		global $dbHost, $dbUser, $dbPasswd, $dbName;
		mysql_connect( $dbHost, $dbUser, $dbPasswd ) or error( mysql_error() );
		mysql_select_db( $dbName );
	}
function error( $error )
	{
	echo "<body background=\"exptextb.jpg\">\n";
	echo "<p align=\"center\" style=\"margin-top: 0; margin-bottom: 0\">&nbsp;</p>\n";
    echo "<div align=\"center\">\n";
    echo "<center>\n";
    echo "<table border=\"1\" cellpadding=\"0\" cellspacing=\"0\" style=\"border-collapse: collapse\" bordercolor=\"#FF0000\" width=\"533\" id=\"AutoNumber1\">\n";
    echo " <tr>\n";
    echo " <td bgcolor=\"#FFFFFF\">\n";
    echo " <p align=\"center\" style=\"margin-top: 0; margin-bottom: 0\"><b>\n";
    echo " <font face=\"Arial\" size=\"5\">Error !!!</font></b></p>\n";
    echo " <p align=\"center\" style=\"margin-top: 0; margin-bottom: 0\">&nbsp;</p>\n";
    echo " <p align=\"center\" style=\"margin-top: 0; margin-bottom: 0\"><b>\n";
    echo " <font color=\"#FF0000\">$error</font></b></p>\n";
    echo " <p align=\"center\" style=\"margin-top: 0; margin-bottom: 0\">&nbsp;</p>\n";
    echo " <p align=\"center\" style=\"margin-top: 0; margin-bottom: 0\">\n";
    echo " <a href=\"javascript:history.back()\">back</a></td>\n";
    echo " </tr>\n";
    echo "</table>\n";
    echo "</center>\n";
    echo "</div>\n";

		//echo "<p align=\"center\" style=\"margin-top: 0; margin-bottom: 0\">&nbsp;</p>\n";
		//echo "<p align=\"center\"><font face=\"Arial\" color=\"#FF0000\"size=\"4\">Error : $error</font></center>\n";
		//echo "<p align=\"center\"><a href=\"javascript:history.back()\"><b>Back</b></a></p>\n";
		//mysql_close();
		exit;
	}

function verifyUser()
	{
		global $ADMIN_EMAIL;
		session_start();
		global $username, $password;
		if( session_is_registered( "username" ) && session_is_registered( "password" ) )
		{
						
			$result=mysql_query( "SELECT username, passwd FROM member WHERE username='$username' AND BINARY passwd='$password'" ) or error( "Login failed, please contact <a href=\"mailto:$ADMIN_EMAIL\">adminstrator</a>" ) ;
			if( mysql_num_rows( $result ) == 1 ) return true;
		}
		return false;
	}

function verifyAdmin()
	{
		session_start();
		global $ADMIN_NAME, $ADMIN_PASS, $admin_Passwd, $admin_Name;
		if( session_is_registered( "admin_Name" ) && session_is_registered( "admin_Passwd" ) )
		{
			if( $admin_Name == $ADMIN_NAME && $admin_Passwd == $ADMIN_PASS )
				return true;
		}
		return false;
	}	
	

function sentMail( $from, $to, $subject, $body )
	{
		$headers  = "MIME-Version: 1.0\r\n";
		$headers .= "Content-type: text/plain; charset=ios-8859-1\r\n";
		$headers .= "From: {$from}\r\n";
		$result = @mail( $to, $subject, $body, $headers );
		if( $result ) return true;
		else return false;
	}
	
function displayHeader( $title = "" )
	{
		global $ADVT_NAME, $PAGE_BG_COLOR, $PAGE_BG_IMAGE;
		echo "\n<html>\n";
		echo "<head>\n";
		echo "<title>$title</title>\n";
		echo "<link rel=\"stylesheet\" href=\"style.css\" type=\"text/css\">\n";
		echo "</head>\n\n";
		echo "<body bgcolor=\"$PAGE_BG_COLOR\" background=\"$PAGE_BG_IMAGE\">\n\n";
		echo "<center><h2>$ADVT_NAME</h2></center>\n";
	}	

function displayFooter()
	{
		echo "<p align=\"center\"><a href=\"http://www.klikabadi.com\" target=\"_blank\"><img src=\"./powered_klik.jpg\" border=\"0\" alt=\"Powered by klikabadi.com\"></a></p>\n";
		echo "<p align=\"center\"><small>Copyright (c)  <a href=\"http://www.klikabadi.com\">klikabadi.com</a></small></p>\n\n";
		echo "</body>\n";
		echo "</html>\n";
		exit;
	}	


?>
