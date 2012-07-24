<?php
	require( "label.php" );
	if( !verifyAdmin() ) header( "Location: admin.php" );
	if( isset( $action ) )
	{
		if( $action == "mail" )
		{
			$subject = trim( $subject );
			$message = trim( $message );
                        $status = trim( $status );
			if( $subject == "" ) error( "Subject Masih Kosong !!!" );
			if( $message == "" ) error( "Pesan Masih Kosong !!!" );
			$pass = 0;
			$fail = 0;
			dbConnect();
                        if ($status == "all" )
                        {
                          $result = mysql_query( "SELECT email, nama FROM member" ) or error( mysql_error() );
                        }
                        else
                        {
			            $result = mysql_query( "SELECT email, nama FROM member WHERE stat='$status'" ) or error( mysql_error() );
                        }

			while( $row = mysql_fetch_array( $result ) )
			{
			    $nama=$row[nama];
			    $subject_1 = eregi_replace("%nama%","$nama",$subject);
				$subject_2 = "$subject_1";
				$message_1 = eregi_replace("%nama%","$nama",$message);
				$message_2 = "$message_1";		 
				$pesanBaru_1 = "----------------------->>$NAMA_WEB<<-----------------------------\n\n" . $message_2 . "\n\n";
                $mailResult = sentMail( "$ADVT_NAME <$ADMIN_EMAIL>", $row['email'], $subject_2, $pesanBaru_1 );
								
				if( !$mailResult )
				{
					$fail += 1;
					$failEmail[] = $row['email'];
				}
				else
				{
					$pass += 1;
					$passEmail[] = $row['email'];
				}
				
			}
			displayHeader( "Mailing List Result" );
			echo "<p align=\"center\"><font size=\"4\">:: Hasil Pengiriman ::</font></p>\n";
			echo "<div align=\"center\">\n";
			echo "  <center>\n";
			echo "  <table border=\"0\" width=\"400\" cellspacing=\"0\" cellpadding=\"0\">\n";
			echo "    <tr>\n";
			echo "      <td width=\"100%\" height=\"30\"><b>($pass)</b> Email Sukses Terkirim.</td>\n";
			echo "    </tr>\n";
			echo "    <tr>\n";
			echo "      <td width=\"100%\">\n";
			for( $i = 0; $i < count( $passEmail ); $i++ )
			{
				echo "      <li><a href=\"mailto:$passEmail[$i]\">$passEmail[$i]</a></li>\n";
			}
			echo "      </td>\n";
			echo "    </tr>\n";
			echo "    <tr>\n";
			echo "      <td width=\"100%\" height=\"30\"><b>($fail)</b> Email Tidak bisa terkirim.</td>\n";
			echo "    </tr>\n";
			echo "    <tr>\n";
			echo "      <td width=\"100%\">\n";
			for( $i = 0; $i < count( $failEmail ); $i++ )
			{
				echo "      <li><a href=\"mailto:$failEmail[$i]\">$failEmail[$i]</a></li>\n";
			}
			echo "      </td>\n";
			echo "    </tr>\n";
			echo "  </table>\n";
			echo "  </center>\n";
			echo "</div>\n";
			echo "<p align=\"center\"><a href=\"admin.php?action=logout\"><b>Logout</b></a> | <a href=\"admin_menu.php\"><b>Back to Admin</b></a></p>\n";
			displayFooter();
		}
	}
	else
	{
		displayHeader( "Mailing List" );
		echo "<p align=\"center\"><font size=\"4\">Kirim Email Massal Ke member</font></p>\n";
		echo "<div align=\"center\">\n";
		echo "<p align=\"center\" style=\"margin-top: 0; margin-bottom: 0\">";
		echo "<font face=\"Arial\" size=\"2\">Supaya email yang dikirim lebih &quot;<b>personal</b>&quot;, ";
		echo "maka sapalah member anda</font></p>";

		echo "<p align=\"center\" style=\"margin-top: 0; margin-bottom: 0\">";
		echo "<font face=\"Arial\" size=\"2\">dengan menyebutkan namanya.</font></p>";

		echo "<p align=\"center\" style=\"margin-top: 0; margin-bottom: 0\">";
		echo "<font face=\"Arial\" size=\"2\"><u><b>Caranya :</b></u> Gunakan variable<b> %nama%</b> ";
		echo "seperti contoh seperti dibawah</font></p>";
		echo "<br><br>";
		echo "<div align=\"center\">\n";
		echo "  <center>\n";
		echo "  <table border=\"0\" width=\"400\" cellspacing=\"0\" cellpadding=\"0\">\n";
		echo "  <form method=\"post\" action=\"$PHP_SELF?action=mail\">\n";
        echo " Kirim Email ke Member Aktif / NonAktif / All ?<BR> \n";
        echo " <INPUT TYPE=RADIO NAME=\"status\" VALUE=\"aktif\" CHECKED> <b>Aktif </b>\n";
        echo " <INPUT TYPE=RADIO NAME=\"status\" VALUE=\"nonaktif\"> <b>Non Aktif</b>    \n";
        echo " <INPUT TYPE=RADIO NAME=\"status\" VALUE=\"all\"> <b>All Member</b><BR>    \n";
		echo "    <tr>\n";
		echo "      <td width=\"100%\" height=\"30\"><b>Subject:</b></td>\n";
		echo "    </tr>\n";
		echo "    <tr>\n";
		echo "      <td width=\"100%\" height=\"30\"><input type=\"text\" name=\"subject\" value=\" Rekan %nama%, info penting buat anda\" size=\"50\" maxlength=\"200\"></td>\n";
		echo "    </tr>\n";
		echo "    <tr>\n";
		echo "      <td width=\"100%\" height=\"30\"><b>Message:</b></td>\n";
		echo "    </tr>\n";
		echo "    <tr>\n";
		echo "      <td width=\"100%\"><textarea rows=\"15\" name=\"message\" cols=\"75\">Yth. Rekan : %nama% , Saya ada berita penting buat anda.</textarea></td>\n";
		echo "    </tr>\n";
		echo "    <tr>\n";
		echo "      <td width=\"100%\" height=\"30\"><input type=\"submit\" value=\"  Kirim Email  \"><input type=\"reset\" value=\"  Clear  \"></td>\n";
		echo "    </tr>\n";
		echo "  </form>\n";
		echo "  </table>\n";
		echo "  </center>\n";
		echo "</div>\n";
		echo "<p align=\"center\"><a href=\"admin.php?action=logout\"><b>Logout</b></a> | <a href=\"admin_menu.php\"><b>Back to Admin</b></a></p>\n";
		displayFooter();
	}
?>
