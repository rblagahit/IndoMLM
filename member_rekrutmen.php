<?
require( "label.php" );
dbConnect();
if( !verifyUser() ) header( "Location: index.php" );
?>


<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
<HTML><HEAD>
<meta http-equiv="Content-Language" content="en-us">
<title>.: NETWORK INDONESIA :.</title>
<META content=Noerhadi name=Author>
<META 
content="Dapatkan uang duit dollar atau penghasilan abadi tiap bulan dari MLM bisa juga gratis atau free." 
name=Keywords>
<META 
content="tutorial situs dalam bahasa indonesia, membahas teknik-teknik mencari uang secara online melalui internet." 
name=Description>
<META http-equiv=robots content="index, follow">
<META http-equiv=rating content=general>
<META content="Microsoft FrontPage 5.0" name=GENERATOR></HEAD>

<STYLE>BODY {
	SCROLLBAR-FACE-COLOR: #006699; SCROLLBAR-HIGHLIGHT-COLOR: #CC3300; SCROLLBAR-SHADOW-COLOR: #000000; SCROLLBAR-3DLIGHT-COLOR: #006699; SCROLLBAR-ARROW-COLOR: #ffffff ; SCROLLBAR-TRACK-COLOR: #0099CC; SCROLLBAR-DARKSHADOW-COLOR: #000000; SCROLLBAR-BASE-COLOR: #848ea9}
.lnk1:hover {
	COLOR: #0000fa; TEXT-DECORATION: none
}
.lnk:link {
	COLOR: #ffff00; TEXT-DECORATION: none
}

</STYLE>

<body topmargin="0" leftmargin="0">

<div align="center">
  <center>
  <table border="0" cellpadding="0" cellspacing="0" style="border-collapse: collapse" bordercolor="#111111" width="780" id="AutoNumber1">
    <tr>
      <td>
      <p align="center">
   
      <? include "banner.php"; ?>
      </td>
    </tr>
    <tr>
      <td>
      <div align="center">
        <center>
        <table border="1" cellpadding="4" cellspacing="0" style="border-collapse: collapse" bordercolor="#3E6F7C" width="780" id="AutoNumber2">
          <tr>
            <td width="207" valign="top">
            <p style="margin-top: 0; margin-bottom: 0" align="center">
            <font face="Verdana" style="font-weight: 700" size="2" color="#990000">..:: 
            MENU MEMBER ::..</font></p>
            <p style="margin-top: 0; margin-bottom: 0" align="center">&nbsp;
            
            <? include "member_menu.php"; ?>
            </p>
            <p style="margin-top: 0; margin-bottom: 0" align="center">&nbsp;</p>
            <p style="margin-top: 0; margin-bottom: 0" align="center">&nbsp;</td>
            <td width="573" valign="top">
            <div align="center">
             <center>
             <table border="0" cellpadding="0" cellspacing="0" style="border-collapse: collapse" bordercolor="#111111" width="549" id="AutoNumber3">
              <tr>
               <td width="549">
      <p style="margin-top: 0; margin-bottom: 0" align="center">
      <font face="Verdana" size="2" color="#000080">Nama : <b><? echo "$session_nama_member" ?></b> - Username 
      : <b><? echo "$session_username" ?></b></font></p>

               </td>
              </tr>
              <tr>
               <td width="549">&nbsp;</td>
              </tr>
              <tr>
               <td width="549">
                  <p align="center" style="margin-top: 0; margin-bottom: 0"><b>
                  <font face="Arial" size="4" color="#990000">SELAMAT DATANG DI 
                  MEMBER AREA</font></b></p>
                  <p style="margin-top: 0; margin-bottom: 0" align="justify">&nbsp;</p>
                  <p style="margin-top: 0; margin-bottom: 0" align="center">&nbsp;
                   <?
	//require( "label.php" );
	//dbConnect();
	//if( !verifyUser() ) header( "Location: member.php" );


	$result = mysql_query( "SELECT * FROM member where username_sponsor='$username'" ) or error( mysql_error() );
	$memnum = mysql_num_rows( $result );
	displayHeader( "Member Area > Genealogy View" );
	echo "<p align=\"center\"><font size=\"2\">Jumlah Member Hasil Rekrut anda = $memnum Orang</font></p>\n";
	if( $memnum != 0 )
	{
	    echo "<div align=\"center\">\n";
	    echo "  <center>\n";
	    echo "  <table border=\"0\" cellspacing=\"0\" width=\"520\" cellpadding=\"0\"><font size=\"1\" face=\"Tahoma\" >\n";
	    echo "    <tr class=\"frame\">\n";
	    echo "      <td width=\"15%\" height=\"25\" align=\"center\"><font face=\"Tahoma\" size=\"1\" color=\"#FFFFFF\"><b>Nama</b></font></td>\n";
	    echo "      <td width=\"15%\" height=\"25\" align=\"center\"><font face=\"Tahoma\" size=\"1\" color=\"#FFFFFF\"><b>E-mail</b></font></td>\n";
	    echo "      <td width=\"25%\" height=\"25\" align=\"center\"><font face=\"Tahoma\" size=\"1\" color=\"#FFFFFF\"><b>Alamat</b></font></td>\n";
	    echo "      <td width=\"10%\" height=\"25\" align=\"center\"><font face=\"Tahoma\" size=\"1\" color=\"#FFFFFF\"><b>Nomor ID</b></font></td>\n";
	    echo "      <td width=\"10%\" height=\"25\" align=\"center\"><font face=\"Tahoma\" size=\"1\" color=\"#FFFFFF\"><b>Username</b></font></td>\n";
        echo "      <td width=\"10%\" height=\"25\" align=\"center\"><font face=\"Tahoma\" size=\"1\" color=\"#FFFFFF\"><b>Status</b></font></td>\n";
        echo "      <td width=\"10%\" height=\"25\" align=\"center\"><font face=\"Tahoma\" size=\"1\" color=\"#FFFFFF\"><b>Kota</b></font></td>\n";
	    echo "    </tr>\n";
		$i = 1;
		while( $row = mysql_fetch_array( $result ) )
		{
                    $i % 2 == 0 ? $bgColor = "#FFFFFF" : $bgColor = "#E6E6E6";
            echo "    <tr>\n";
	        echo "      <td width=\"15%\" height=\"25\" align=\"center\" bgcolor=\"$bgColor\"><font face=\"Tahoma\" size=\"1\" color=\"#000080\">{$row['nama']}</td>\n";
	        echo "      <td width=\"15%\" height=\"25\" align=\"center\" bgcolor=\"$bgColor\"><font face=\"Tahoma\" size=\"1\" color=\"#000080\">{$row['email']}</a></td>\n";
	        echo "      <td width=\"25%\" height=\"25\" align=\"center\" bgcolor=\"$bgColor\"><font face=\"Tahoma\" size=\"1\" color=\"#000080\">{$row['alamat']}</td>\n";
	        echo "      <td width=\"10%\" height=\"25\" align=\"center\" bgcolor=\"$bgColor\"><font face=\"Tahoma\" size=\"1\" color=\"#000080\">{$row['nomor_id']}</td>\n";
	        echo "      <td width=\"10%\" height=\"25\" align=\"center\" bgcolor=\"$bgColor\"><font face=\"Tahoma\" size=\"1\" color=\"#000080\">{$row['username']}</td>\n";
            echo "      <td width=\"10%\" height=\"25\" align=\"center\" bgcolor=\"$bgColor\"><font face=\"Tahoma\" size=\"1\" color=\"#000080\">{$row['stat']}</td>\n";
            echo "      <td width=\"10%\" height=\"25\" align=\"center\" bgcolor=\"$bgColor\"><font face=\"Tahoma\" size=\"1\" color=\"#000080\">{$row['kota']}</td>\n";
		    echo "    </tr>\n";
			$i=$i+1;
 		}
 		echo "    <tr>\n";
 		echo "      <td width=\"100%\" height=\"1\" bgcolor=\"#808080\" colspan=\"10\"></td>\n";
 		echo "    </td>\n";
 	    echo "  </table>\n";
 	 	echo " </center>\n";
		echo "</div>\n";
		//echo "<p align=\"center\"><a href=%22javascript:history.back()/%22><b>Back </b></a></p>\n";
	     }
		else
		{	
	    echo "<p align=\"center\"><b>Maaf Anda belum mempunyai downline</b></a></p>\n";
		}
  
	
?>

                  
                  </td>
              </tr>
             </table>
             </center>
            </div>
            <p style="margin-top: 0; margin-bottom: 0">&nbsp;<p style="margin-top: 0; margin-bottom: 0">&nbsp;</td>
          </tr>
        </table>
        </center>
      </div>
      </td>
    </tr>
    <tr>
      <td background="bg3.jpg">&nbsp;</td>
    </tr>
    <tr>
      <td bgcolor="#6D93A0">
      <p align="center" style="margin-top: 0; margin-bottom: 0">
      <font face="Verdana" style="font-size: 8pt" color="#FFFFFF">Copyright (c) 
      2005 Nama Bisnis Anda</font></p>
      <p align="center" style="margin-top: 0; margin-bottom: 0">
      <font face="Verdana" style="font-size: 8pt" color="#FFFFFF">Powered by
      <a target="_blank" href="http://www.klikabadi.com/" style="text-decoration: none; font-weight: 700">
      <font color="#FFFFFF">klikabadi.com</font></a></font></p>
      </td>
    </tr>
    <tr>
      <td bgcolor="#3E6F7C">&nbsp;</td>
    </tr>
  </table>
  </center>
</div>

</body>

</html>