<?
require( "label.php" );
if( !verifyAdmin() ) header( "Location: admin.php" );
$NewsPage = 10;
$id = @mysql_connect($dbHost,$dbUser,$dbPasswd);
$db = @mysql_select_db($dbName,$id);
function buildLeadIndex($qty, $NewsPage) {
	if($qty > $NewsPage) {
		echo "Halaman : ";
		$index = 0;
		$start = 0;
		while($qty > 0) {
			echo ' <a href="admin_news.php?start='.$start.'">'.++$index.'</a>';
			$qty = $qty - $NewsPage;
			$start = $start + $NewsPage;
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

$qry = mysql_query("SELECT * FROM news ORDER BY user_id DESC LIMIT $start,$NewsPage",$id);

?>
<? displayHeader( "Admin > All Member List" );
echo "<p align=\"center\"><font size=\"3\"><b>Jumlah Semua News : $totalNews </b></font></p>\n";
echo "<p align=\"center\"><font size=\"2\"><i>Daftar dibawah ini adalah jumlah dari keseluruhan News dari website ini yang akan ditampilkan pada halaman News di Website utama, anda bisa men-<b>deletenya</b> melalui halaman ini. Caranya Check pada kotak yang disediakan kemudian klik DELETE CHECKED dibawah</i></font></p>\n"; ?>
<html>
<head>
<style>
td {padding-bottom:5px; border-bottom: 1px solid #CCCCCC;}
</style>
</head>
<body id="text">
<? buildLeadIndex($totalNews, $NewsPage); ?>
<?
// Tampilkan News
if(mysql_num_rows($qry) > 0) {

	// header
	 echo "<div align=\"center\"><small>\n";
     echo '<form method="post" action="admin_news.php">';
	

	// body
	while($row = mysql_fetch_array($qry)) {
		echo "<p style=\"margin-top: 0; margin-bottom: 0\" align=\"justify\"><input type=\"checkbox\" name=\"user_id[]\" value=\"$row[user_id]\">\n";
		echo "<p style=\"margin-top: 0; margin-bottom: 0\" align=\"justify\"><b><font face=\"Verdana\" size=\"2\" color=\"#000080\"> $row[judul]</font></b></p>\n";
	    echo "<p style=\"margin-top: 0; margin-bottom: 0\" align=\"justify\"><i><font face=\"Verdana\" size=\"2\" color=\"#FF0000\"> $row[tanggal]</font></i></p>\n";
        echo "<p style=\"margin-top: 0; margin-bottom: 0\" align=\"justify\"><font face=\"Verdana\" size=\"2\">$row[isi_berita]</font></p>\n";
        echo "<p style=\"margin-top: 0; margin-bottom: 0\" align=\"justify\"><font face=\"Verdana\" size=\"2\">\n";
        echo "<hr color=\"#000000\" size=\"1\"></font></p>\n";
       
	}
  	


	// bottom
	echo '</table><br>';
	echo '<input type="submit" value="Delete Checked" id="button">';
	echo '<input type="hidden" name="act" value="lDel">';
	echo '<input type="hidden" name="start" value="'.$_REQUEST[start].'">';
	echo '</form>';
	
	

} 
else 
{
	echo "<p align=\"center\"><font size=\"3\"><b>Belum Ada News !!! </b></font></p>\n";
	
}
?>
<font face="Verdana" size="2">Masukkan News/Berita terbaru anda pada form dibawah ini</font></p>
<p align="center" style="margin-top: 0; margin-bottom: 0">&nbsp;</p>
<div align="center">
  <center>
  <table border="0" cellpadding="2" cellspacing="1" width="557" id="AutoNumber1">
    <tr>
     <form action="admin_news2.php" method="post">

                  
          <td width="551" bgColor="#FFFFCC" height="261">&nbsp; 
            <div align="center">
                    
              <table height="1" cellSpacing="0" cellPadding="0" width="537" border="0">
                <tr> 
                  <td width="162" height="9"> <font face="Verdana" size="1"><b>Judul 
                    News </b></font></td>
                  <td width="375" height="9"><font face="Verdana"> 
                    <input size="50" name="judul">
                    </font></td>
                </tr>
                <tr> 
                  <td width="162" height="25"> <b><font face="Verdana" size="1">Tanggal</font></b></td>
                  <td width="375" height="25"><font face="Verdana"> 
                    <input size="25" name="tanggal">
                    </font></td>
                </tr>
                <tr> 
                  <td width="162" height="25"> <b><font face="Verdana" size="1">Masukkan 
                    News / Berita terbaru anda disini</font></b></td>
                  <td width="375" height="25"><font face="Verdana"> 
                    <textarea rows="5" name="isi_berita" cols="50"></textarea>
                    &nbsp;</font></td>
                </tr>
                <tr> 
                  <td vAlign="center" colSpan="2" height="1"> </td>
                </tr>
                <tr> 
                  <td colSpan="2" height="26"> <blockquote> 
                      <p align="center"><font face="Verdana">&nbsp;&nbsp;</font> 
                      </p>
                    </blockquote>
                    <p align="center"><font face="Verdana"> 
                      <input type="submit" value="INPUT NEWS" name="Submit">
                      </font></td>
                </tr>
              </table>
                  </div>
                  </td>
                  </form>
                </tr>
  </table>
  </center>
</div>

<?

   echo "<p align=\"center\"><a href=\"admin_menu.php\"><b>Back to Admin</b></a></p>\n";
	displayFooter();
?>
</body>
</html>
















