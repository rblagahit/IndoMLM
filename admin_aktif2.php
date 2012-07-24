<?
require( "label.php" );
dbConnect();
if( !verifyAdmin() ) 
	{
	header( "Location: admin.php" );
	return false;
	}

if( isset( $user ) )
  {
		if( $user == "upgrade" )
        {
		$user1 = ltrim( $user1 );
		$nomor_id = ltrim( $nomor_id );
		$username_upline = ltrim($username_upline);
		if( $nomor_id == "" ) error( "Nomor ID Masih Kosong harus diisi !!!" );
		dbConnect();
	    $result = mysql_query( "SELECT * FROM member where username='$user1'" ) or error( mysql_error() );
        $member = mysql_fetch_array( $result );
		$status="aktif";
		mysql_query( "UPDATE member SET nomor_id='$nomor_id', username_upline='$username_upline', stat='$status' WHERE username='$user1' " ) or error( mysql_error() );
		
		  // --- Kirim email ke member yang websitenya diaktifkan
          // --- PERHATIAN !!! Untuk mencegah error Jangan Ganti Variabel yang berawalan tanda "$"  

$subject_1 = "$member[nama], Website anda telah kami Aktifkan";
$message_1 = "
Hallo $member[nama], Status Website anda kami Aktifkan !!!!

======== BERIKUT INI DATA-DATA ANDA : =========  
Username		   : $user1  
Password		   : $member[passwd]  
Nama 		       : $member[nama]  
Nomor ID	       : $nomor_id  
email              : $member[email] 
Alamat		       : $member[alamat]  
Kota          	   : $member[kota] 
Telpon             : $member[nomor_telp] 
Website anda       : $NAMA_WEB/?id=$user1 
Gunakan URL member Website anda : $NAMA_WEB/?id=$user1 untuk bekerja sama dengan kami. 
Promosikan website anda tersebut dan setiap ada member yang join, secara otomatis anda 
akan menerima laporan dari kami serta langsung masuk jaringan anda. 

============= DATA SPONSOR ANDA =============== 
Username Sponsor      : $member[username_sponsor]  
Nama Sponsor          : $member[nama_sponsor]  
email Sponsor         : $member[email_sponsor] 

Demikian pemberitahuan ini dan terima kasih atas kerja samanya. 
      	    
			
Salam Sukses 
$ADVT_NAME 
$NAMA_WEB 
	        
";
       
$pesanBaru_1 = "----------------------->>$NAMA_WEB<<-----------------------------\n\n" . $message_1 . "\n\n";
sentMail( "$ADVT_NAME <$ADMIN_EMAIL>", $member[email], $subject_1, $pesanBaru_1 );


        //---- Kirim email ke Pengelola / Webmaster
        // --- PERHATIAN !!! Untuk mencegah error Jangan Ganti Variabel yang berawalan tanda "$" 
				
$subject_2 = "Data Pengaktifan member $user1";
$message_2 = "
$ADVT_NAME, Anda Telah melakukan Pengaktifan member !

=============[TERHADAP MEMBER]=====================
Username		  : $user1  
Password		  : $member[passwd]  
Nama 		      : $member[nama]  
Nomor ID	      : $nomor_id  
email             : $member[email] 
Alamat		      : $member[alamat]  
Kota          	  : $member[kota] 
Telpon            : $member[nomor_telp] 
Website           : $NAMA_WEB/?id=$user1 
Username Sponsor  : $member[username_sponsor]  
Nama Sponsor	  : $member[nama_sponsor]  
email Sponsor     : $member[email_sponsor] 
=================================================
";
	   
$pesanBaru_2 = "----------------------->>$NAMA_WEB<<-----------------------------\n\n" . $message_2 . "\n\n";
sentMail( $member[email], $ADMIN_EMAIL, $subject_2, $pesanBaru_2 );			
		
		 displayHeader( "Member Area > Aktifkan Member" );		 
		 echo "<body topmargin=\"0\" leftmargin=\"0\" bgproperties=\"fixed\" bgcolor=\"#FFFFFF\" >\n";
		 echo "<p>&nbsp;</p>\n";
		 echo "<div align=\"center\">\n";
	 	 echo "  <center>\n";
		 echo "  <table border=\"16\" cellpadding=\"0\" cellspacing=\"0\" style=\"border-collapse: collapse\" bordercolor=\"#FFCC99\" width=\"533\" id=\"AutoNumber1\">\n";
		 echo "    <tr>\n";
		 echo "      <td bgcolor=\"#FFFFFF\">\n";
		 echo "      <p align=\"center\">&nbsp;</p>\n";
		 echo "      <p align=\"center\"><b><font size=\"2\" face=\"Tahoma\">Sukses !!! Meng-aktifkan member : $member[nama] !</font></b></p>\n";
		 echo "      <p align=\"center\"><font size=\"2\" face=\"Tahoma\">\n";
		 echo "      <p align=\"center\">&nbsp;</td>\n";
		 echo "    </tr>\n";
		 echo "  </table>\n";
		 echo "  </center>\n";
 		 echo "</div>\n";
      	 echo " </body>\n";
		 echo "<p align=\"center\"><a href=\"admin_menu.php\"><b>Back to Admin</b></a></p>\n";
	     displayFooter();
		}
		else
        {

        dbConnect();
	    $result = mysql_query( "SELECT * FROM member where username='$user'" ) or error( mysql_error() );
        $member = mysql_fetch_array( $result );
        


displayHeader( "Member Area > Aktifkan Member" );
//echo "<div align=\"center\">\n";
echo " <center>\n";
echo "         <table border=\"0\" cellpadding=\"0\" cellspacing=\"0\" style=\"border-collapse: collapse\" bordercolor=\"#111111\" width=\"549\" id=\"AutoNumber17\">\n";
echo "           <tr>\n";
//echo "    <TD align=center width=\"556\">\n";
//echo "<p style=\"margin-top: 0; margin-bottom: 0\"><b>\n";
echo "<font face=\"Verdana\" color=\"#000080\">MENGAKTIFKAN MEMBER : <b>$member[nama]</b></font></b></p>\n";
echo "<p style=\"margin-top: 0; margin-bottom: 0\" align=\"justify\">\n";
echo "<b><font face=\"Verdana\" size=\"2\">Tata caranya :</font></b><ul>\n";
echo "  <li>\n";
echo "<p style=\"margin-top: 0; margin-bottom: 0\" align=\"justify\">\n";
echo "<font face=\"Verdana\" size=\"2\">Masukkan <b>Nomor ID</b> member yang bersangkutan \n";
echo "pada kolom yang disediakan.</font></li>\n";
echo "  <li>\n";
echo "<p style=\"margin-top: 0; margin-bottom: 0\" align=\"justify\">\n";
echo "<font face=\"Verdana\" size=\"2\"><b>Nomor ID</b> ini <b>bisa edit</b> setiap saat \n";
echo "pada kolom yang sama.</font></li>\n";
echo "  <li>\n";
echo "<p style=\"margin-top: 0; margin-bottom: 0\" align=\"justify\">\n";
echo "<font face=\"Verdana\" size=\"2\">Untuk penempatan jaringan (spill over), anda bisa \n";
echo "atur sendiri dengan cara memasukkan username orang yang akan diberi limpahan \n";
echo "member (spill over). <b>Tetapi Awas !!!</b>, <b><i>username yang diberi spill \n";
echo "over</i></b> haruslah username orang yang ada dalam jaringan sponsor utama.</font></li>\n";
echo "  <li>\n";
echo "<p style=\"margin-top: 0; margin-bottom: 0\" align=\"justify\">\n";
echo "<font face=\"Verdana\" size=\"2\"><b>Sponsor utama </b>adalah : orang yang merekrut \n";
echo "member ini. Karena jaringan dibawahnya sudah mencukupi, maka anda berhak untuk \n";
echo "mengatur penempatannya pada level berikutnya (spill over/limpahan) dengan <b>\n";
echo "kunci penempatan</b> adalah menggunakan <b>Username</b> dari orang yang diberi \n";
echo "spill over.</font></li>\n";
echo "  <li>\n";
echo "<p style=\"margin-top: 0; margin-bottom: 0\" align=\"justify\">\n";
echo "<font face=\"Verdana\" size=\"2\">Jika dalam jaringan <b>Sponsor Utama</b> belum \n";
echo "mencukupi, maka kolom &quot;<i><b>Di Spill Over kan ke username&quot; </b></i>jangan \n";
echo "dirubah biarkan apa adanya.</font><font face=\"Verdana\"><b><br>\n";
echo "&nbsp;</b></font></li>\n";
echo "</ul>\n";
echo "    </TD>\n";
echo "           </tr>\n";
echo "           <tr>\n";
echo "    <TD align=middle width=\"556\">\n";
echo "<br>\n";
echo " <form name=\"Noerhadi\" method=\"post\" action=\"$PHP_SELF?user=upgrade\">\n";
//echo "      <FORM action=$PHP_SELF?action=upgrade\n";
echo "     <TABLE bgColor=#3e5b00 border=0 cellPadding=3 cellSpacing=1 width=540 height=\"152\">\n";
echo "        <TBODY>\n";
 echo "       <TR>\n";
 echo "         <TD align=right bgColor=#fff9fa vAlign=top width=311 height=\"17\">\n";
echo "          <font face=\"Verdana, Arial, Helvetica, sans-serif\" size=\"2\">Username :</font></TD>\n";
echo "          <TD bgColor=#fff9fa vAlign=top width=432 height=\"16\"><b>\n";
echo "          <font face=\"Verdana\" size=\"2\">{$member['username']}</font></b></TD></TR>\n";
echo "         <INPUT type=\"hidden\" name=\"user1\" value=\"{$member['username']}\" > \n";
echo "        <TR>\n";
echo "          <TD align=right bgColor=#fff9fa vAlign=top width=311 height=\"19\">\n";
echo "          <font face=\"Verdana, Arial, Helvetica, sans-serif\" size=\"2\">Password :</font></TD>\n";
echo "          <TD bgColor=#fff9fa vAlign=top width=432 height=\"17\">\n";
echo "          <font size=\"2\" face=\"Verdana\"><b>{$member['passwd']}</b></font></TD></TR>\n";
echo "        <TR>\n";
echo "          <TD align=right bgColor=#fff9fa vAlign=top width=311 height=\"19\">\n";
echo "          <font face=\"Verdana, Arial, Helvetica, sans-serif\" size=\"2\">Nama :</font></TD>\n";
echo "          <TD bgColor=#fff9fa vAlign=top width=432 height=\"1\">\n";
echo "          <font size=\"2\" face=\"Verdana\"><b>{$member['nama']}</b></font></TD></TR>\n";
echo "        <TR>\n";
echo "          <TD align=right bgColor=#fff9fa vAlign=top width=311 height=\"19\">\n";
echo "          <font face=\"Verdana, Arial, Helvetica, sans-serif\" size=\"2\">Email :</font></TD>\n";
echo "          <TD bgColor=#fff9fa vAlign=top width=432 height=\"1\">\n";
echo "          <font size=\"2\" face=\"Verdana\"><b>{$member['email']}</b></font></TD></TR>\n";
echo "        <tr>\n";
echo "          <TD align=right bgColor=#fff9fa vAlign=top width=311 height=\"19\">\n";
echo "          <font face=\"Verdana, Arial, Helvetica, sans-serif\" size=\"2\">Nomor lD :</font></TD>\n";
 echo "         <TD bgColor=#fff9fa vAlign=top width=432 height=\"1\"><FONT face=arial\n";
echo "            size=2>\n";
echo "          <INPUT name=nomor_id value=\"{$member['nomor_id']}\"  size=20></FONT></TD>\n";
echo "        </tr>\n";
echo "        <TR>\n";
echo "          <TD align=right bgColor=#fff9fa vAlign=top width=311 height=\"19\">&nbsp;\n";
echo "          </TD>\n";
echo "          <TD bgColor=#fff9fa vAlign=top width=432 height=\"19\"><i><b>\n";
echo "          <font face=\"Verdana\" size=\"2\" color=\"#000080\">Data Sponsor</font></b></i></TD>\n";
echo "          </TR>\n";
echo "        <TR>\n";
echo "          <TD align=right bgColor=#fff9fa vAlign=top width=311 height=\"19\">\n";
echo "          <font face=\"Verdana\" size=\"2\">Username Sponsor Utama :</font></TD>\n";
echo "          <TD bgColor=#fff9fa vAlign=top width=432 height=\"19\">\n";
echo "          <font face=\"Verdana\" size=\"2\"><b>{$member['username_sponsor']}</b></font></TD>\n";
echo "          </TR>\n";
echo "        <TR>\n";
echo "          <TD align=right bgColor=#fff9fa vAlign=top width=311 height=\"19\">\n";
 echo "         <font face=\"Verdana\" size=\"2\">Nama Sponsor Utama : </font></TD>\n";
echo "          <TD bgColor=#fff9fa vAlign=top width=432 height=\"19\">\n";
echo "          <font face=\"Verdana\" size=\"2\"><b>{$member['nama_sponsor']}</b></font></TD>\n";
echo "          </TR>\n";
 echo "       <TR>\n";
 echo "         <TD align=right bgColor=#fff9fa vAlign=top width=311 height=\"19\">\n";
 echo "         <font face=\"Verdana\" size=\"2\">Nomor ID Sponsor Utama :</font></TD>\n";
 echo "         <TD bgColor=#fff9fa vAlign=top width=432 height=\"19\">\n";
echo "          <font face=\"Verdana\" size=\"2\"><b>{$member['id_sponsor']}</b></font></TD>\n";
echo "          </TR>\n";
echo "        <TR>\n";
echo "          <TD align=right bgColor=#fff9fa vAlign=top width=311 height=\"19\">&nbsp;\n";
echo "          </TD>\n";
echo "          <TD bgColor=#fff9fa vAlign=top width=432 height=\"19\"><b><i>\n";
echo "          <font face=\"Verdana\" size=\"2\" color=\"#000080\">Untuk penempatan jaringan \n";
 echo "         (spill over), lihat dulu jaringan = <font face=\"Verdana\" size=\"2\" color=\"#FF0000\"><b>{$member['username_sponsor']}</b> <a target=\"_blank\" href=\"admin_view_tree_user.php?user={$member['username_sponsor']}\"> KLIK DISINI</font></i></b></TD>\n";
echo "          </TR>\n";
echo "       <TR>\n";
echo "          <TD align=right bgColor=#fff9fa vAlign=top width=311 height=\"19\">\n";
echo "          <font face=\"Verdana\" size=\"2\">Di Spill Over kan ke username :</font></TD>\n";
echo "          <TD bgColor=#fff9fa vAlign=top width=432 height=\"19\"><FONT face=arial \n";
echo "            size=2>\n";
echo "          <INPUT name=username_upline value=\"{$member['username_upline']}\" </FONT></TD>\n";
echo "          </TR>\n";
echo "        <TR>\n";
echo "          <TD align=right bgColor=#fff9fa vAlign=top width=311 height=\"19\">\n";
echo "          &nbsp;</TD>\n";
echo "          <TD bgColor=#fff9fa vAlign=top width=432 height=\"19\">&nbsp;</TD>\n";
echo "          </TR>\n";
echo "        <TR>\n";
echo "          <TD align=middle bgColor=#d1e3ce colSpan=2 width=\"748\" height=\"26\"><FONT face=arial size=2>\n";
echo "          <INPUT type=submit value=\"Klik disini untuk MENGAKTIFKAN\">&nbsp;&nbsp;&nbsp; </FONT></TD></TR></TBODY></TABLE></FORM></TD>\n";
echo "           </tr>\n";
 echo "          <tr>\n";
echo "             <td width=\"541\">&nbsp;\n";
echo "                  </td>\n";
echo "           </tr>\n";
echo "         </table>\n";
echo "         </center>\n";
//echo "</div>\n";
echo "<p align=\"center\"><a href=\"admin_menu.php\"><b>Back to Admin</b></a></p>\n";
displayFooter();

}
}
?>		
