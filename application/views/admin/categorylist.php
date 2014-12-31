
<!DOCTYPE html>
<html class="en-in no-js" lang="en" dir="ltr">
<head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta charset="utf-8" />
    <meta content='no' name='apple-mobile-web-app-capable'>
    <meta name="viewport" content="width=device-width,initial-scale=1.0, user-scalable=no" />
    <title>Progno</title>
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
<div class="col-lg-3">
<div class="sidebar">
<?php include('sidebar-admin.php');?>
</div>
</div>
<div class="col-lg-8">
<div class="admin-cont">                            
<h3>Blogs Category  List</h3> 
<a class="btn btn-blue" href="<?php echo base_url(); ?>admin/addcategory">Add Category</a>
<table width="100%" border="0" align="left" cellpadding="3" cellspacing="0" class="txt11black">



  <tr>
    <td align="left" valign="top"><br>
        <!--- Content mangement: add, edit, delete content in website pages-->
        <table width="100%" border="0" cellpadding="0" cellspacing="5" bgcolor="#FEECEC">
          <tr>
            <td align="center" valign="top" bgcolor="#FFFFFF">
			<table width="98%" border="0" cellpadding="4" cellspacing="0" bordercolor="#FFFFFF">
                <tr>
                  <td align="left" valign="middle" background="<?php echo base_url(); ?>img/menubg.jpg" >
				  <strong class="contant2white"> <?php echo $this->session->flashdata("msg"); ?></strong>				  </td>
                  <td align="right" valign="middle" background="<?php echo base_url(); ?>img/menubg.jpg" >
				    </td>
                </tr>
                <tr>
                  <td colspan="2" align="left" valign="top">
				 
				    <table width="100%" border="0" cellspacing="0" cellpadding="0">
                      
                                <tr>
                                    <td align="right" class="remark_txt"></td>
                                </tr>
                             
                      <tr>
                        <td align="left" valign="middle"><span class="contant2">
                        </span>
                          <table width="100%" border="0" align="left" cellpadding="0" cellspacing="0" class="txt11black">
                                <tr>
                                  	<td align="right" class="remark_txt">									</td>
                                </tr>
                                <tr>
                                  <td align="left" valign="top">
								  <table width="100%" border="1" align="center" cellpadding="3" cellspacing="1" bordercolor="#f0f0f0" bgcolor="#FFFFFF">
                                      <tr bgcolor="#e3e3e3">                                      
                                        <th width="51" align="center" bgcolor="#e3e3e3" ><strong>No</strong></th>
                                        
                                        <th width="407" align="left" bordercolor="#F0F0F0" style="padding: 0 0 0 20px;" ><strong>Title</strong></th>
                                        
                                        <th width="174" align="center" bgcolor="#e3e3e3" ><strong>view</strong></th>
                                        <th width="100" align="center" valign="middle" bgcolor="#e3e3e3" ><span class="remark_txt"></span></th>
                                      </tr>
                    <?php $i = 0; ?>             
									  <?php foreach($category as $row): ?>
										<tr bgcolor="#FFFFFF" class="row1">										 
										  <td align="center" bgcolor="#FFFFFF"><?php echo ++$i; ?></td>
										  
										  <td width="407" align="left" bordercolor="#F0F0F0" style="padding: 0 0 0 20px;" ><?php echo $row->name; ?></td>	
										  
										  <td width="174" align="center" bgcolor="#FFFFFF" class="style1"><a class="btn" href="<?php echo base_url().'admin/addcategory/'.$row->id; ?>" title="Edit">View/Edit</a></td>
										  <td width="100" align="center" bgcolor="#FFFFFF" class="style1">
                                          <a class="btn btn-primary" href="<?php echo base_url().'admin/deletecategory/'.$row->id; ?>" title="delete" onClick="return confirm('Do you want to delete this record ?');">Delete</a>                                        </td>
										</tr>
									 <?php endforeach ?>
								 
                                  </table></td>
                                </tr>
                          </table></td>
                      </tr>
                  </table>				  </td>
                </tr>
            </table></td>
          </tr>
        </table>
      <br>    </td>
  </tr>
  <tr>
    <td height="10"></td>
  </tr>
  <tr>
    <td align="left" valign="top"></td>
  </tr>
  <tr>
    <td align="left" valign="top"></td>
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