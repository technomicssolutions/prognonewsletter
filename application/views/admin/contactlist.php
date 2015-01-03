

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
<div class="col-lg-10">
<h3 class="text-center">Contact List</h3> 
</div>                          

<div class="col-lg-10">
<a class="btn btn-primary pull-right" href="<?php echo base_url(); ?>admin/addcategory">Add Category</a>
</div>
<div class="col-lg-10">
<div class="clol-lg-12">
    <?php echo $this->session->flashdata("msg"); ?>
</div>
<table class="table">
  <thead>
  <tr>                                      
      <th>No</th>
      <th>Category</th>
      <th>Name</th>
      <th>Email</th>
      <th colspan='2'>Action</th>
     
  </tr>
  </thead>
  <tbody>
  <?php $i = 0;
  if(!empty($contact)){
    foreach($contact as $row): ?>
    <tr class="row1">                    
        <td><?php echo ++$i; ?></td>
        <td><?php echo $row->title; ?></td>
        <td><?php echo $row->name; ?></td>
        <td><?php echo $row->email; ?></td>   
        <td><a class="btn btn-info" href="<?php echo base_url().'admin/addcontact/'.$row->id; ?>" title="Edit">View/Edit</td>                                                 
        <td><a class="btn btn-danger" href="<?php echo base_url().'admin/deletecontact/'.$row->id; ?>" title="delete" onClick="return confirm('Do you want to delete this record ?');">Delete</a></td>
    </tr>
    <?php endforeach ?>
  <?php } ?>
  </tbody>                 
</table>
<div>
								  
								
</div>      
</div>
</div>
</div>
<?php include('admin_footer.php');?>
</div>
 
</body>
</html>

