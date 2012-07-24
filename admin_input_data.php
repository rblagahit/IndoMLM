<?php
	require( "label.php" );
	dbConnect();
        $time = time();
        $ip = $REMOTE_ADDR;
        $status = "aktif";

        mysql_query( "INSERT INTO member ( username, passwd, nama, email, tgl_lahir, nomor_id, nomor_ktp, alamat, kota, kodepos, nomor_telp, suami_istri, nama_pasangan, pekerjaan, agama, dik_akhir, nama_ahli_waris, hub_ahli_waris, nama_bank, cabang, nama_nasabah, nomor_rek, nama_sponsor, id_sponsor, username_sponsor, username_upline, email_sponsor, tanggal_join, ip_add, stat, hits )
	    Values ('$USERNAME_DEFAULT','$password_1','$nama_1','$email_1','','$nomor_id_1','','$alamat_1','$kota_1','','$telpon_1','','','','','','','','','','','','','','','','','$time','$ip','$status','0' )") or error( mysql_error() );

        displayHeader( "Data Perdana selesai di Input" );
        echo "<p align=\"center\"><font size=\"4\">Data Perdana selesai di Input,</font></a></p>\n";
        echo "<p align=\"center\"><a href=admin_menu.php><b>Back to Admin</b></a></p>\n";
        displayFooter();
?>