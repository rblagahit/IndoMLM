<?
require( "label.php" );
dbConnect();
if( !verifyUser() ) header( "Location: index.php" );
$test = mysql_query("SELECT * from member where username='$session_username'")or error( mysql_error() );
$member = mysql_fetch_array( $test );

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
                  <p style="MARGIN-TOP: 0px; MARGIN-BOTTOM: 0px" align="center">
                  <b><font face="Verdana" size="4" color="#000080">PROFIL ANDA</font></b></p>
                  <p style="MARGIN-TOP: 0px; MARGIN-BOTTOM: 0px" align="center">
                  <font size="2" face="Verdana">&nbsp;</font></p>
                  <div align="center">
                   <center>
              <table borderColor="#666666" height="294" cellSpacing="0" cellPadding="6" width="491" border="1" style="border-collapse: collapse">
                <tr>
                  <td width="475" bgColor="#ffe377" height="83">&nbsp;
                  <div align="center">
                    <table height="254" cellSpacing="0" cellPadding="0" width="469" border="0">
                      <tr>
                        <td width="168" height="9" bgcolor="#FFFF99">
                        <b><font face="Verdana" size="1" color="#FF0000">
                        Username &amp; Password</font></b></td>
                        <td width="324" height="9" bgcolor="#FFFF99">&nbsp;</td>
                      </tr>
                      <tr>
                        <td width="168" height="19">
                        <b><font face="Verdana" size="1">Username </font></b></td>
                        <td width="324" height="19">
                        <font size="1" face="Verdana" color="#000080">
                        <b>&nbsp;: <? echo $member['username'] ?></b></font></td>
                      </tr>
                      <tr>
                        <td width="168" height="18">
                        <b><font face="Verdana" size="1">Password :</font></b></td>
                        <td width="324" height="18">
                        <b>
                        <font size="1" face="Verdana" color="#000080">
                        &nbsp;: <? echo $member['passwd'] ?></font></b></td>
                      </tr>
                      <tr>
                        <td width="168" height="1">
                        </td>
                        <td width="324" height="1"></td>
                      </tr>
                      <tr>
                        <td width="168" height="1" bgcolor="#FFFF99">
                        <b><font face="Verdana" size="1" color="#FF0000">Data 
                        Anda</font></b></td>
                        <td width="324" height="1" bgcolor="#FFFF99">&nbsp;</td>
                      </tr>
                      <tr>
                        <td width="168" height="22">
                        <b><font face="Verdana" size="1">Nama&nbsp; </font></b></td>
                        <td width="324" height="22"><b>
                        <font face="Verdana" color="#000080" size="1">
                        &nbsp;: <? echo $member['nama'] ?></font></b></td>
                      </tr>
                      <tr>
                        <td width="168" height="24">
                        <b><font face="Verdana" size="1">email </font></b></td>
                        <td width="324" height="24"><b>
                        <font face="Verdana" color="#000080" size="1">
                        &nbsp;: <? echo $member['email'] ?></font></b></td>
                      </tr>
                      <tr>
                        <td width="168" height="24">
                        <b><font face="Verdana" size="1">Tanggal Lahir </font></b></td>
                        <td width="324" height="24"><b>
                        <font face="Verdana" color="#000080" size="1">
                        &nbsp;: <? echo $member['tgl_lahir'] ?></font></b></td>
                      </tr>
                      <tr>
                        <td width="168" height="24">
                        <b><font face="Verdana" size="1">Nomor ID </font></b></td>
                        <td width="324" height="24"><b>
                        <font face="Verdana" color="#000080" size="1">
                        &nbsp;: <? echo $member['nomor_id'] ?></font></b></td>
                      </tr>
                      <tr>
                        <td width="168" height="23">
                        <b><font face="Verdana" size="1">Nomor KTP </font></b></td>
                        <td width="324" height="23"><b>
                        <font face="Verdana" color="#000080" size="1">
                        &nbsp;: <? echo $member['nomor_ktp'] ?></font></b></td>
                      </tr>
                      <tr>
                        <td width="168" height="1">
                        <font face="Verdana" size="1"><b>Alamat </b></font></td>
                        <td width="302" height="23"><b>
                        <font face="Verdana" color="#000080" size="1">
                        &nbsp;: <? echo $member['alamat'] ?></font></b></td>
                      </tr>
                      
                      <tr>
                        <td width="168" height="23">
                        <b><font face="Verdana" size="1">Kota </font></b></td>
                        <td width="324" height="23"><b>
                        <font face="Verdana" color="#000080" size="1">
                        &nbsp;: <? echo $member['kota'] ?></font></b></td>
                      </tr>
                      <tr>
                        <td width="168" height="21">
                        <b><font face="Verdana" size="1">Kode Pos</font></b></td>
                        <td width="324" height="21"><b>
                        <font face="Verdana" color="#000080" size="1">
                        &nbsp;: <? echo $member['kodepos'] ?></font></b></td>
                      </tr>
                      <tr>
                        <td width="168" height="25">
                        <b><font face="Verdana" size="1">No. Telepon / HP </font></b></td>
                        <td width="324" height="25"><b>
                        <font face="Verdana" color="#000080" size="1">
                        &nbsp;: <? echo $member['nomor_telp'] ?></font></b></td>
                      </tr>
                      
                      <tr>
                        <td width="168" height="1">
                        </td>
                        <td width="324" height="1"></td>
                      </tr>
                      <tr>
                        <td width="168" height="1" bgcolor="#FFFF99">
                        <b><font face="Verdana" size="1" color="#FF0000">Data 
                        Pasangan  </font></b></td>
                        <td width="324" height="1" bgcolor="#FFFF99">&nbsp;</td>
                      </tr>
                      
                      <tr>
                        <td width="168" height="22">
                        <b><font face="Verdana" size="1">Jenis Hubungan </font></b></td>
                        <td width="324" height="22">
                        <b><font face="Verdana" size="1" color="#000080">&nbsp;: <? echo $member['suami_istri'] ?></font></b></td>
                      </tr>
                      <tr>
                        <td width="168" height="24">
                        <b><font face="Verdana" size="1">Nama Pasangan </font></b></td>
                        <td width="324" height="24"><b>
                        <font face="Verdana" size="1" color="#000080">
                        &nbsp;: <? echo $member['nama_pasangan'] ?></font></b></td>
                      </tr>
                      
                      <tr>
                        <td width="168" height="19" bgcolor="#FFFF99">
                        <b><font face="Verdana" size="1" color="#FF0000">Data 
                        Penunjang</font></b></td>
                        <td width="324" height="19" bgcolor="#FFFF99">&nbsp;</td>
                      </tr>
                      <tr>
                        <td width="168" height="25">
                        <b><font face="Verdana" size="1">Pekerjaan </font></b></td>
                        <td width="324" height="25"><b>
                        <font face="Verdana" size="1" color="#000080">
                        &nbsp;: <? echo $member['pekerjaan'] ?></font></b></td>
                      </tr>
                      <tr>
                        <td width="168" height="26">
                        <b><font face="Verdana" size="1">Agama&nbsp; </font></b></td>
                        <td width="324" height="26"><b>
                        <font face="Verdana" size="1" color="#000080">
                        &nbsp;: <? echo $member['agama'] ?></font></b></td>
                      </tr>
                      <tr>
                        <td width="168" height="25">
                        <b><font face="Verdana" size="1">Pendidikan Terakhir </font></b></td>
                        <td width="324" height="25"><b>
                        <font face="Verdana" size="1" color="#000080">
                        &nbsp;: <? echo $member['dik_akhir'] ?></font></b></td>
                      </tr>
                      <tr>
                        <td width="168" height="25">
                        <b><font face="Verdana" size="1">Nama Ahli Waris </font></b></td>
                        <td width="324" height="25"><b>
                        <font face="Verdana" size="1" color="#000080">
                        &nbsp;: <? echo $member['nama_ahli_waris'] ?></font></b></td>
                      </tr>
                      <tr>
                        <td width="168" height="25">
                        <b><font face="Verdana" size="1">Hubungan dg Ahli Waris </font></b></td>
                        <td width="324" height="25"><b>
                        <font face="Verdana" size="1" color="#000080">
                        &nbsp;: <? echo $member['hub_ahli_waris'] ?></font></b></td>
                      </tr>
                      
                      <tr>
                        <td width="168" height="1">
                        </td>
                        <td width="324" height="1"></td>
                      </tr>
                      <tr>
                        <td width="168" height="1" bgcolor="#FFFF99">
                        <b><font face="Verdana" size="1" color="#FF0000">Data 
                        Bank</font></b></td>
                        <td width="324" height="1" bgcolor="#FFFF99">&nbsp;</td>
                      </tr>
                      <tr>
                        <td width="168" height="25">
                        <b><font face="Verdana" size="1">Nama Bank </font></b></td>
                        <td width="324" height="25"><b>
                        <font face="Verdana" size="1" color="#000080">
                        &nbsp;: <? echo $member['nama_bank'] ?></font></b></td>
                      </tr>
                      <tr>
                        <td width="168" height="25">
                        <b><font face="Verdana" size="1">Cabang </font></b></td>
                        <td width="324" height="25"><b>
                        <font face="Verdana" size="1" color="#000080">
                        &nbsp;: <? echo $member['cabang'] ?></font></b></td>
                      </tr>
                      <tr>
                        <td width="168" height="25">
                        <b><font face="Verdana" size="1">Nama Nasabah </font></b></td>
                        <td width="324" height="25"><b>
                        <font face="Verdana" size="1" color="#000080">
                        &nbsp;: <? echo $member['nama_nasabah'] ?></font></b></td>
                      </tr>
                      <tr>
                        <td width="168" height="25">
                        <b><font face="Verdana" size="1">Nomor Rekening </font></b></td>
                        <td width="324" height="25"><b>
                        <font face="Verdana" size="1" color="#000080">
                        &nbsp;: <? echo $member['nomor_rek'] ?></font></b></td>
                      </tr>
                      
                      <tr>
                        <td width="168" height="1">
                        </td>
                        <td width="324" height="1"></td>
                      </tr>
                      <tr>
                        <td width="168" height="2" bgcolor="#FFFF99">
                        <b><font face="Verdana" size="1" color="#FF0000">Data 
                        Sponsor</font></b></td>
                        <td width="324" height="2" bgcolor="#FFFF99">&nbsp;</td>
                      </tr>
                      
                      <tr>
                        <td width="168" height="22">
                        <b><font face="Verdana" size="1">Nama Sponsor&nbsp; </font>
                        </b></td>
                        <td width="324" height="22">
                        <font color="#000080" face="Verdana" size="1"><b>
                        &nbsp;: <? echo $member['nama_sponsor'] ?></b></font> </td>
                      </tr>
                      
                      <tr>
                        <td width="168" height="21">
                        <b><font face="Verdana" size="1">ID Sponsor </font></b></td>
                        <td width="324" height="21"><b>
                        <font face="Verdana" size="1" color="#000080"> &nbsp;: <? echo $member['id_sponsor'] ?></font></b></td>
                      </tr>
                      
                      <tr>
                        <td width="168" height="19">
                        <b><font face="Verdana" size="1">Username Sponsor </font></b></td>
                        <td width="324" height="19"><b>
                        <font face="Verdana" size="1" color="#000080"> &nbsp;: <? echo $member['username_sponsor'] ?></font></b></td>
                      </tr>
                      
                      <tr>
                        <td width="168" height="1">
                        </td>
                        <td width="324" height="1"></td>
                      </tr>
                      <tr>
                        <td vAlign="center" width="447" colSpan="2" height="1">
                        </td>
                      </tr>
                      <tr>
                        <td width="447" colSpan="2" height="1">
                        <font face="Verdana" color="#ffffff">.</font> </td>
                      </tr>
                    </table>
                  </div>
                  </td>
                </tr>
              </table>
                   </center>
                  </div>


                  <p style="margin-top: 0; margin-bottom: 0" align="center">&nbsp;</p>
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