<?
require( "label.php" );
if( !verifyAdmin() ) header( "Location: admin.php" );
$membersPage = 20;
$id = @mysql_connect($dbHost,$dbUser,$dbPasswd);
$db = @mysql_select_db($dbName,$id);
function buildLeadIndex($qty, $membersPage) {
	if($qty > $membersPage) {
		echo "Halaman : ";
		$index = 0;
		$start = 0;
		while($qty > 0) {
			echo ' <a href="admin_list_all_member.php?start='.$start.'">'.++$index.'</a>';
			$qty = $qty - $membersPage;
			$start = $start + $membersPage;
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
		mysql_query("DELETE FROM member WHERE user_id=$l[$i]",$id);
	}
}

// get total members
$qryT = mysql_query("SELECT * FROM member",$id);
$totalMember = mysql_num_rows($qryT);

// get members
if($_REQUEST[start]) { $start = $_REQUEST[start]; }
else { $start = 0; }

$qry = mysql_query("SELECT * FROM member ORDER BY user_id DESC LIMIT $start,$membersPage",$id);

?>
<? displayHeader( "Admin > All Member List" );
echo "<p align=\"center\"><font size=\"3\"><b>Jumlah Semua Member $totalMember orang (Aktif dan Non Aktif)</b></font></p>\n";
echo "<p align=\"center\"><font size=\"2\">Daftar dibawah ini adalah jumlah dari keseluruhan member dari website ini, Baik yang sudah Aktif maupun yang Non Aktif). Jika ada data <b>SPAM</b> / <b>tidak valid</b>, anda bisa men-<b>deletenya</b> melalui halaman ini.</font></p>\n"; ?>
<html>
<head>
<style>
td {padding-bottom:5px; border-bottom: 1px solid #CCCCCC;}
</style>
</head>
<body id="text">
<? buildLeadIndex($totalMember, $membersPage); ?>
<?
// Tampilkan Member
if(mysql_num_rows($qry) > 0) {

	// header
	 echo "<div align=\"center\"><small>\n";
	echo '<form method="post" action="admin_list_all_member.php">';
	echo '<table id="text" style="width:100%;">';
	echo '<tr style="background:#C0C0C0;"><td style="width:20px;"><small>CHECK</small></td><td>';
	echo '<small>USERNAME</small></td><td><small>NAMA</small></td><td><small>EMAIL</small></td><td><small>STATUS</small></td><td><small>TGL JOIN</small></td><td><small>NOMOR ID</small></td><td><small>NAMA SPONSOR</small></td><td><small>HITS</small></td><td><small>DETAIL ?</small></td></tr>';

	// body
	while($row = mysql_fetch_array($qry)) {
		echo '<tr><td><input type="checkbox" name="user_id[]" value="'.$row[user_id].'"></td>';
		echo '<td><small>',$row[username],'</small></td>';
		echo '<td><small>',$row[nama],'</small></td>';
		echo '<td><small>',$row[email],'</small></td>';
		echo '<td><small>',$row[stat],'</small></td>';
        echo '<td><small>'. date( "d-m-y", $row['tanggal_join'] ) .'</small></td>';
        echo '<td><small>',$row[nomor_id],'</small></td>';
        echo '<td><small>',$row[nama_sponsor],'</small></td>';
        echo '<td><small>',$row[hits],'</small></td>';
		echo "<td><small><a href='admin_detail.php?user={$row['username']}'>Lihat Detail</small></td></tr>";
	}
  	echo '<tr style="background:#C0C0C0;"><td style="width:20px;"><small>CHECK</small></td><td>';
 echo '<small>USERNAME</small></td><td><small>NAMA</small></td><td><small>EMAIL</small></td><td><small>STATUS</small></td><td><small>TGL JOIN</small></td><td><small>NOMOR ID</small></td><td><small>NAMA SPONSOR</small></td><td><small>HITS</small></td><td><small>DETAIL ?</small></td></tr>';

	// bottom
	echo '</table><br>';
	echo '<input type="submit" value="Delete Checked" id="button">';
	echo '<input type="hidden" name="act" value="lDel">';
	echo '<input type="hidden" name="start" value="'.$_REQUEST[start].'">';
	echo '</form>';

} else {
	echo 'Tidak ada Member';
}
   echo "<p align=\"center\"><a href=\"admin_menu.php\"><b>Back to Admin</b></a></p>\n";
	displayFooter();
?>
</body>
</html>
















