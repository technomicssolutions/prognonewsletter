<!DOCTYPE html>
<html class="en-in no-js" lang="en" dir="ltr">
<head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta charset="utf-8" />
    <meta content='no' name='apple-mobile-web-app-capable'>
    <meta name="viewport" content="width=device-width,initial-scale=1.0, user-scalable=no" />
    <title>Smart Savings</title>
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
	<h3>Add User</h3>
	<table width="770" border="0" align="left" cellpadding="3" cellspacing="0" class="txt11black">
    <tr>
        <td colspan="2" align="left" valign="top"><br>
            <!--- Content mangement: add, edit, delete content in website pages-->
            <table width="750" height="360" border="0" cellpadding="0" cellspacing="5" bgcolor="#FEECEC">
                <tr>
                    <td align="center" valign="top" bgcolor="#FFFFFF"><table width="100%" border="0" cellspacing="0" cellpadding="4">
                            <tr>
                               
                                <td colspan="3" align="right" valign="middle" >
                                    <a href="<?php echo base_url(); ?>admin; ?>" style="text-decoration:none;" ><strong class="contant2white">Back&nbsp;&nbsp;&nbsp;</strong></a>
                                </td>
                            </tr>
                            <tr>
                                <td colspan="2" align="center" valign="top">
                                	<span style="color:#FF0000"><?php echo validation_errors(); ?></span>
                                   
                                    <?php 
                                       echo form_open_multipart();
                                    ?>
                                    <table width="100%" border="0" align="center" cellpadding="6" cellspacing="0">
                                        <tbody>
                                        	
                                              <tr>
                                                <td align="left" valign="top" class="subrenning_font"><strong>Category</strong></td>
                                                <td colspan="3" align="left" valign="top">
                                                    <select name="category">
                                                        <?php foreach($categories as $row){ ?>
                                                            <option value="<?php echo set_value('category',$row->id); ?>" <?php if($row->id==$category){ echo 'selected';}?> ><?php echo $row->name; ?></option>
                                                        <?php } ?>  
                                                    </select>                       </td>
                                            </tr>
                                            <tr>
                                                <td align="left" valign="top" class="subrenning_font">
												<strong>User Name</strong>
												</td>
                                                <td colspan="2" align="left" valign="top">												
												<input type="text" name="name" value="<?php echo set_value('name',$name); ?>"></td>
                                            </tr>
                                               <tr>
                                                <td align="left" valign="top" class="subrenning_font">
												<strong>Email</strong>
												</td>
                                                <td colspan="2" align="left" valign="top">												
												<input type="text" name="email" value="<?php echo set_value('email',$email); ?>"></td>
                                            </tr>
                                            <tr>
                                                <td align="left" valign="top">&nbsp;</td>
                                                <td colspan="2" align="left" valign="top">
                                                    <input type="submit" name="Submit" value="Submit"></td>
                                            </tr>
                                            
                                        </tbody>
                                    </table>
                                    </form>				  </td>
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
	
