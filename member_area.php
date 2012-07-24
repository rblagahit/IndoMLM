<?
require( "label.php" );
dbConnect();
if( !verifyUser() ) header( "Location: index.php" );
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
                  <font face="Verdana" color="#000080" size="2">Selamat : </font>
                  <font face="Verdana" color="#ff0000" size="2"><b><? echo "$session_nama_member" ?></b></font><font face="Verdana" color="#000080" size="2">, 
                  anda berhasil login di <b>member area</b> anda</font></p>
                  <p style="MARGIN-TOP: 0px; MARGIN-BOTTOM: 0px" align="center">
                  <font face="Verdana" color="#000080" size="2">untuk itu 
                  gunakanlah yang semestinya</font></p>
                  <p style="MARGIN-TOP: 0px; MARGIN-BOTTOM: 0px" align="center">
                  <font face="Verdana" size="2"><font color="#000080">dan jangan 
                  lupa </font><b><font color="#ff0000">Logout </font></b>
                  <font color="#000080">jika keluar member area.</font></font></p>
                  <p style="MARGIN-TOP: 0px; MARGIN-BOTTOM: 0px" align="center">
                  <font face="Verdana" color="#000080" size="2">&nbsp;</font><font face="Verdana" size="2"><font color="#000080">Hingga 
                  saat ini anda memperoleh kunjungan : </font><b>
                  <font color="#ff0000"><? echo "$session_hits" ?></font></b><font color="#000080">&nbsp;kali di website anda</font></font></p>
                  <p style="MARGIN-TOP: 0px; MARGIN-BOTTOM: 0px" align="center">
                  <font face="Verdana" color="#000080" size="2">Untuk 
                  meningkatkan kunjungan di website anda gunakanlah tool-tool 
                  promosi online</font></p>
                  <p style="MARGIN-TOP: 0px; MARGIN-BOTTOM: 0px" align="center">
                  <font face="Verdana" color="#000080" size="2">yang telah kami 
                  berikan</font></p>
                  <p style="MARGIN-TOP: 0px; MARGIN-BOTTOM: 0px" align="center">
                  &nbsp;</p>
                  <p style="MARGIN-TOP: 0px; MARGIN-BOTTOM: 0px" align="center">
                  <font face="Verdana" size="2" color="#000080">URL Website anda 
                  adalah :</font></p>
                  <p style="MARGIN-TOP: 0px; MARGIN-BOTTOM: 0px" align="center">
                  <b><font face="Verdana" size="2" color="#FF0000"><? echo "$NAMA_WEB/?id=$session_username" ?></font></b></p>
                  <P 
                  style="MARGIN-TOP: 0px; MARGIN-BOTTOM: 0px; LINE-HEIGHT: 100%" align="center">&nbsp;</P>
                  <p style="MARGIN-TOP: 0px; MARGIN-BOTTOM: 0px" align="center">
                  <b><font face="Verdana" color="#000080" size="2">SUKSES SELALU</font></b></p>
                  <p style="MARGIN-TOP: 0px; MARGIN-BOTTOM: 0px" align="center">
                  <font face="Verdana" color="#000080" size="2"><? echo "$ADVT_NAME" ?></font></p>
                  <P 
                  style="MARGIN-TOP: 0px; MARGIN-BOTTOM: 0px; LINE-HEIGHT: 100%" align="center">
                  &nbsp;</P>
       <p style="margin-top: 0; margin-bottom: 0" align="center">&nbsp;</p>
                  <P 
                  style="MARGIN-TOP: 0px; MARGIN-BOTTOM: 0px; LINE-HEIGHT: 100%" align="center">
                  <img border="1" src="suksesman.jpg" width="132" height="218"></P>


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
