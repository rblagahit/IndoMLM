<?
require( "cek.php" );
?>


<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
<HTML><HEAD>
<meta http-equiv="Content-Language" content="en-us">
<title>.: NETWORK INDONESIA :.</title>
<META content=Panjianom name=Author>
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
            <font face="Verdana" style="font-weight: 700" size="2" color="#000080">..:: 
            MENU UTAMA ::..</font></p>
            <p style="margin-top: 0; margin-bottom: 0" align="center">&nbsp;
            
            <? include "menu.php"; ?>
            </p>
            <p style="margin-top: 0; margin-bottom: 0" align="center">&nbsp;</p>
            <p style="margin-top: 0; margin-bottom: 0" align="center">&nbsp;</td>
            <td width="573" valign="top">
            <div align="center">
             <center>
             <table border="0" cellpadding="0" cellspacing="0" style="border-collapse: collapse" bordercolor="#111111" width="549" id="AutoNumber3">
              <tr>
               <td width="549">
            <p align="right">
      <font face="Verdana" color="#000080" style="font-size: 8pt">Diperkenalkan : <b><? echo "$session_nama_sponsor" ?></b> - <b><? echo "$session_kota_sponsor" ?></b></font>
               </td>
              </tr>
              <tr>
               <td width="549">&nbsp;</td>
              </tr>
              <tr>
               <td width="549">
                  <p align="center" style="margin-top: 0; margin-bottom: 0">
                  <b> <font face="Verdana" size="5" color="#FF0000">News 
            - Berita terbaru dari kami</font></b></p>


                  <p style="margin-top: 0; margin-bottom: 0" align="center">&nbsp;</p>


                  <p style="margin-top: 0; margin-bottom: 0" align="center">&nbsp;
                  
                   <?
//require( "config.php" );

$newsPage = 10;
$id = @mysql_connect($dbHost,$dbUser,$dbPasswd);
$db = @mysql_select_db($dbName,$id);
function buildLeadIndex($qty, $newsPage) {
	if($qty > $newsPage) {
		echo "Halaman : ";
		$index = 0;
		$start = 0;
		while($qty > 0) {
			echo ' <a href="news.php?start='.$start.'">'.++$index.'</a>';
			$qty = $qty - $newsPage;
			$start = $start + $newsPage;
		}
	}

}

if($id == 0 || $db == 0) {
// Problems with MySQL connection
error( mysql_error());
exit;
 }

// incoming vars
// $_REQUEST[act, lID, start]
if($_REQUEST[act] == 'lDel') {

	$l = $_REQUEST[user_id];
	for($i = 0; $i < count($l); $i++) {
		mysql_query("DELETE FROM news WHERE user_id=$l[$i]",$id);
	}
}

// get total News
$qryT = mysql_query("SELECT * FROM news",$id);
$totalNews = mysql_num_rows($qryT);

// get News
if($_REQUEST[start]) { $start = $_REQUEST[start]; }
else { $start = 0; }

$qry = mysql_query("SELECT * FROM news ORDER BY user_id DESC LIMIT $start,$newsPage",$id);

?>

<? buildLeadIndex($totalNews, $newsPage); ?>
<?
// Tampilkan News

if(mysql_num_rows($qry) > 0) {

	
	while($row = mysql_fetch_array($qry)) {
	    echo "<p style=\"margin-top: 0; margin-bottom: 0\" align=\"justify\"><b><font face=\"Verdana\" font style=\"font-size: 8pt\" color=\"#000080\"> $row[judul]</font></b></p>\n";
	    echo "<p style=\"margin-top: 0; margin-bottom: 0\" align=\"justify\"><i><font face=\"Verdana\" font style=\"font-size: 8pt\" color=\"#FF0000\"> $row[tanggal]</font></i></p>\n";
        echo "<p style=\"margin-top: 0; margin-bottom: 0\" align=\"justify\"><font face=\"Verdana\" font style=\"font-size: 8pt\">$row[isi_berita]</font></p>\n";
        echo "<p style=\"margin-top: 0; margin-bottom: 0\" align=\"justify\"><font face=\"Verdana\" size=\"2\">\n";
        echo "<hr color=\"#000000\" size=\"1\"></font></p>\n";
	}

	

} else {
	echo "<p align=\"center\"><font size=\"3\"><b>Maaf Belum Ada Berita terbaru dari kami !!!</b></font></p>\n";
}
  
?>

                  </p>
                  <p style="margin-top: 0; margin-bottom: 0" align="center">&nbsp;</td>
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
      <a target="_blank" href="http://digidzine.com/" style="text-decoration: none; font-weight: 700">
      <font color="#FFFFFF">digidzine.com</font></a></font></p>
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
