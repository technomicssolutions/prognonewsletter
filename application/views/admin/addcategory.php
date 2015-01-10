<!DOCTYPE html>
<html class="en-in no-js" lang="en" dir="ltr">
<head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta charset="utf-8" />
    <meta content='no' name='apple-mobile-web-app-capable'>
    <meta name="viewport" content="width=device-width,initial-scale=1.0, user-scalable=no" />
    <title>Smart Savings </title>
    <link rel="shortcut icon" href="<?php echo $base_url; ?>assets/img/favicon.png">
    
    <!--[if lt IE 9]>
            <link href="css/itie9.css" rel="stylesheet" media="all">
    <![endif]-->	

</head>
<body>

<div id="content">
<?php include('admin_header.php');?>
<div id="admin" style="">
<div class="content-main">
<div class="col-lg-3 col-lg-12">
<div class="sidebar">
<?php include('sidebar-admin.php');?>
</div>
</div>
<div class="col-lg-8">
<div class="admin-cont">                            
<h3>Add Mailing List Category</h3> 

	
	

<table width="100%" border="0" align="left" cellpadding="3" cellspacing="0" class="txt11black">
  <tr>
    <td colspan="2" align="left" valign="top"><br>
        <!--- Content mangement: add, edit, delete content in website pages-->
        <table width="100%" height="360" border="0" cellpadding="0" cellspacing="5" bgcolor="#FEECEC">
          <tr>
            <td align="center" valign="top" bgcolor="#FFFFFF"><table width="100%" border="0" cellspacing="0" cellpadding="4">
                <tr>
                  <td width="76%" align="left" valign="middle" background="" ><strong class="contant2white"><?php echo $this->session->flashdata("msg"); ?></strong></td>
                  <td width="24%" align="right" valign="middle" background="" >
				  
				  </td>
                </tr>
                <tr>
                  <td colspan="2" align="center" valign="top">
				  <?php echo form_open(base_url().'admin/addcategory/'.$id);  ?>
				  <table width="100%" border="0" align="center" cellpadding="6" cellspacing="0">
                    <tbody>
                      <tr>
                        <td align="center" valign="middle" colspan="4"></td>
                      </tr>
					  <tr>
                        <td width="20%" align="left" valign="top" class="subrenning_font">Title</td>
                        <td width="80%" colspan="3" align="left" valign="top">
						<?php echo form_input('title',set_value('title',$title));   ?>
						<span style=" color:#FF0000;"><?php echo form_error('title'); ?></span>						</td>
                      </tr>
					         				
                      <tr>
                        <td align="left" valign="top">&nbsp;</td>
                        <td colspan="3" align="left" valign="top">
						<?php echo form_submit('Save','save');  ?></td>
                      </tr>
                      <tr>
                        <td align="left" valign="top">&nbsp;</td>
                        <td colspan="3" align="left" valign="top">&nbsp;</td>
                      </tr>
                    </tbody>
                  </table>
				 <?php 	echo form_close(); ?>
				  </td>
                </tr>
            </table></td>
          </tr>
        </table>
      <br>
    </td>
  </tr>
  <tr>
    <td height="10" colspan="2"></td>
  </tr>
  <tr>
    <td colspan="2" align="left" valign="top"></td>
  </tr>
  <tr>
    <td colspan="2" align="left" valign="top"></td>
  </tr>
</table>
</div>      
</div>
</div>
</div>
<?php include('admin_footer.php');?>
</div>
 
</body>
</html>
