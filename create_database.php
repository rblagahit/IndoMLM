<?php
	require( "label.php" );

	if( !verifyAdmin() ) error( "Fatal error, you don't have permission to perform this action.  Please login first" );

	$dbLink = @mysql_connect( $dbHost, $dbUser, $dbPasswd );
	mysql_create_db( $dbName, $dbLink );
	mysql_select_db( $dbName );

	$query1 = "CREATE TABLE member
	(
       	user_id SMALLINT UNSIGNED NOT NULL auto_increment,
       	username varchar(30) NOT NULL default '',
  	   	passwd varchar(30) NOT NULL default '',
  		nama varchar(30) NOT NULL default '',
  		email varchar(40) NOT NULL default '',
  		tgl_lahir varchar(30) NOT NULL default '',
  		nomor_id varchar(30) NOT NULL default '',
  		nomor_ktp varchar(30) NOT NULL default '',
  		alamat text,
  		kota varchar(30) NOT NULL default '',
  		kodepos int(255) NOT NULL default '12345',
  		nomor_telp varchar(30) default NULL,
  		suami_istri varchar(30) NOT NULL default '',
  		nama_pasangan varchar(30) NOT NULL default '',
  		pekerjaan varchar(30) NOT NULL default '',
  		agama varchar(30) NOT NULL default '',
  		dik_akhir varchar(30) NOT NULL default '',  
  		nama_ahli_waris varchar(30) NOT NULL default '',
  		hub_ahli_waris varchar(30) NOT NULL default '',
  		nama_bank varchar(30) NOT NULL default '',
  		cabang varchar(30) NOT NULL default '',
  		nama_nasabah varchar(30) NOT NULL default '',
  		nomor_rek varchar(60) default NULL,
  		nama_sponsor varchar(30) NOT NULL default '',
  		id_sponsor varchar(30) NOT NULL default '',
  		username_sponsor varchar(30) NOT NULL default '',
  		username_upline varchar(30) NOT NULL default '',
  		email_sponsor varchar(30) NOT NULL default '',
  		tanggal_join int(255) NOT NULL default '0',
  		ip_add varchar(20) NOT NULL default '',
  		stat varchar(20) NOT NULL default '',
  		hits int(255) NOT NULL default '0',
  		PRIMARY KEY  (user_id)
	)TYPE=MyISAM ";

$query2 = "CREATE TABLE news
	(
       user_id SMALLINT UNSIGNED NOT NULL auto_increment,
  	   judul varchar(100) NOT NULL default '',
       tanggal varchar(25) NOT NULL default '',
       isi_berita text,
       PRIMARY KEY  (user_id)
	)TYPE=MyISAM ";

	mysql_query( $query1 ) or error( mysql_error() );
	mysql_query( $query2 ) or error( mysql_error() );
 	mysql_close();

	displayHeader( "All tables have been created" );
	echo "<p align=\"center\"><font size=\"4\">Selamat, Table database selesai dibuat ! </font></a></p>\n";
	echo "<p align=\"center\"><font size=\"4\">Selanjutnya masukkan data member perdana anda dengan cara klik <a href=\"admin_input_data.php\">disini</font></a></p>\n";
        echo "<p align=\"center\"><a href=\"admin_menu.php\"><b>Back to Admin</b></a></p>\n";
       displayFooter();

?>
