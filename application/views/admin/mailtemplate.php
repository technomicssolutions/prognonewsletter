<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Newsletter | Questionnaire</title>

</head>

<body style="margin:0; padding:0; font-family:Arial, Helvetica, sans-serif;">

<table width="100%" bgcolor="#333333" border="0" cellspacing="0" cellpadding="0">
<tr><td>
<table width="600" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td height="86" colspan="4" bgcolor="#FFFFFF" style="margin:0 0 0 27px;">
    <table width="100%" border="0" cellspacing="0" cellpadding="0">
      <tr>
        <td width="27">&nbsp;</td>
        <td width="573"><img src="<?php echo base_url().'assets/img/logo.png'; ?>" width="81" height="62" border="0" /></td>
      </tr>
    </table>
   </td>
  </tr>
  <tr>
    <td height="337" colspan="4" background="<?php echo base_url().'assets/img/banner-img.jpg'; ?>" bgcolor="#f3f4ee">&nbsp;
    </td>
  </tr>
  <tr>
    <td height="117" colspan="4" bgcolor="#e4a552"><table width="100%" border="0" cellspacing="0" cellpadding="0">
      <tr>
        <td width="15" height="117" rowspan="3">&nbsp;</td>
        <td width="570" height="30">                  </td>
        <td width="15" height="117" rowspan="3">&nbsp;</td>
      </tr>
      <tr>
        <td height="59">
          <h2 style="color:#FFFFFF;font-size:18px;margin:0px 0"><?php echo $main_title; ?></h2>
            <p style="color:#FFFFFF;margin:0px 0 0;line-height:22px;font-size:14px"><?php echo $main_content; ?></p>        </td>
      </tr>
      <tr>
        <td height="22">&nbsp;</td>
      </tr>
      
    </table></td>
  </tr>
  <tr>
    <td colspan="4"><table width="100%" border="0" cellpadding="0" cellspacing="0" style="margin:10px 0 0 0;">
      <tr>
        <td width="22" height="240" rowspan="2" bgcolor="#FFFFFF">&nbsp;</td>
        <td width="251" height="30" bgcolor="#FFFFFF">&nbsp;</td>
        <td width="22" height="240" rowspan="2" bgcolor="#FFFFFF">&nbsp;</td>
        <td height="10" rowspan="2">&nbsp;</td>
        <td width="22" rowspan="2" bgcolor="#FFFFFF">&nbsp;</td>
        <td width="251" height="30" valign="top" bgcolor="#FFFFFF">&nbsp;</td>
        <td width="22" rowspan="2" bgcolor="#FFFFFF">&nbsp;</td>
      </tr>
      <tr>
        <td height="196" align="left" valign="top" bgcolor="#FFFFFF">
          <h2 style="color:#231f20;font-size:19px;margin:0px 0"><?php echo $regiontitle1; ?></h2> 
            <p style="color:#9a9a9a;margin:0px 0 0;line-height:22px;font-size:14px"><?php echo $regioncontent1; ?></p>
            <a style="float: left; margin: 20px 0 0 0;" target="_blank" href="<?php echo $regionurl1; ?>"><img src="<?php echo base_url().'assets/img/newsletter-btn.jpg'; ?>" width="155" height="34" /></a>          </td>
        <td width="251" valign="top" bgcolor="#FFFFFF">
          <h2 style="color:#231f20;font-size:19px;margin:0px 0"><?php echo $regiontitle2; ?></h2> 
            <p style="color:#9a9a9a;margin:0px 0 0;line-height:22px;font-size:14px"><?php echo $regioncontent2; ?></p>
            <a style="float: left; margin: 20px 0 0 0;" target="_blank" href="<?php echo $regionurl2; ?>"><img src="<?php echo base_url().'assets/img/newsletter-btn.jpg'; ?>" width="155" height="34" /></a>        </td>
      </tr>
    </table></td>
  </tr>
  <tr>
    <td colspan="4"><table width="100%" border="0" cellpadding="0" cellspacing="0" bgcolor="#FFFFFF" style="margin:10px 0 0 0;">
      <tr>
        <td width="299" height="240" rowspan="2" <?php if(!empty($regionimage3)){ echo 'background="'.base_url().'assets/img/'.$regionimage3.'"'; } ?> ></td>
        <td width="22" height="240" rowspan="2">&nbsp;</td>
        <td width="252" height="30">&nbsp;</td>
        <td width="22" rowspan="2">&nbsp;</td>
      </tr>
      <tr>
        <td width="256" align="left" valign="top"><h2 style="color:#231f20;font-size:19px;margin:10px 0"><?php echo $regiontitle3; ?></h2>
            <p style="color:#9a9a9a;margin:7px 0 0;line-height:22px;font-size:14px"><?php echo $regioncontent3; ?></p>
          <a style="float: left; margin: 20px 0 0 0;" target="_blank" href="<?php echo $regionurl3; ?>" ><img src="<?php echo base_url().'assets/img/newsletter-btn.jpg'; ?>" width="155" height="34" /></a> </td>
      </tr>
    </table></td>
  </tr>
  <tr>
    <td height="10" colspan="4"></td>
  </tr>
  <tr>
    <td width="22" height="240" rowspan="2" valign="top" bgcolor="#FFFFFF">&nbsp;</td>
    <td width="256" height="30" valign="top" bgcolor="#FFFFFF">&nbsp;</td>
    <td width="22" rowspan="2" valign="top" bgcolor="#FFFFFF">&nbsp;</td>
    <td width="299" height="240" rowspan="2" valign="top" <?php if(!empty($regionimage4)){ echo 'background="'.base_url().'assets/img/'.$regionimage4.'"'; } ?> bgcolor="#FFFFFF">&nbsp;</td>
  </tr>
  <tr>
    <td width="256" valign="top" bgcolor="#FFFFFF">
      <h2 style="color:#231f20;font-size:19px;margin:10px 0"><?php echo $regiontitle4; ?></h2>
            <p style="color:#9a9a9a;margin:7px 0 0;line-height:22px;font-size:14px"><?php echo $regioncontent4; ?></p>
          <a style="float: left; margin: 20px 0 0 0;" target="_blank" href="<?php echo $regionurl4; ?>"><img src="<?php echo base_url().'assets/img/newsletter-btn.jpg'; ?>" width="155" height="34" /></a>   
     </td>
  </tr>
  <tr>
    <td colspan="4">
       <p style="color:#FFFFFF;margin:7px 0 0;line-height:20px;font-size:12px">
          Progno Financial Planning Systems (P) Ltd  2nd Floor l RF Complex l Deshabhimani Road <br />
            Kaloor l Cochin 682017  <br />
            Phone:&nbsp; (+91) 8590003555 <br />
            Email id:&nbsp; fp@progno.co.in  <br />
            <a style="color:#FFFFFF; text-decoration:none;" target="_blank" href="http://prognofp.technomicssolutions.com/">www.prognofp.com </a>
      </p>
      <a style="color:#FFFFFF; text-decoration:none;" target="_blank" href="<?php echo $unsubscribe_url; ?>">
          To stop receiving these emails please click here to unsubscribe.     
      </a>
    </td>
  </tr>
  
</table>
</td></tr>
</table>
</body>
</html>
