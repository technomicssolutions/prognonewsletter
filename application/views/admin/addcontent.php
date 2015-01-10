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
</div><!-- sidebar -->
</div><!-- col-lg-3 col-lg-12  -->
<div class="col-lg-8">
<div class="admin-cont">  
	<h3 class="text-center">Add Content</h3>
    
         
         

        <?php 
            $attributes   =   array('class' => 'form-horizontal');
            echo form_open_multipart('',$attributes); 
            
        ?>
        <div class="form-group">
            <label for="inputTitle" class="col-sm-3 control-label"></label>
            <div class="col-sm-8">
               <?php 
                   echo $this->session->flashdata("msg"); 
                   if(!empty($image)){
                        echo  form_hidden('image',$image);
                   }
               ?>
            </div>
        </div>
        <div class="form-group">
            <label for="inputTitle" class="col-sm-3 control-label">Title</label>
            <div class="col-sm-8">
                <?php 
                    $attributes   =   array(
                        'class' => 'form-control',
                        'name'  => 'name',
                        'value' =>  set_value('name',$name),
                    );
                    echo form_input($attributes); 
                ?>
            </div>
            <div class="col-sm-8 pull-right">
                <?php
                    echo form_error('name');
                ?>
            </div>
            
        </div>
        <div class="form-group">
            <label for="inputContent" class="col-sm-3 control-label">Content</label>
            <div class="col-sm-8">
                <?php 
                    $attributes   =   array(
                        'class' => 'form-control',
                        'name'  => 'content',
                        'value' =>  set_value('content',$content),
                    );
                    echo form_textarea($attributes); 
               ?>
            </div>
            <div class="col-sm-8 pull-right">
            
            
                <?php
                    echo form_error('content');
                ?>
            </div>
            
        </div>
        <div class="form-group">
            <label for="inputUrl" class="col-sm-3 control-label">Url</label>
            <div class="col-sm-8">
                <?php 
                    $attributes   =   array(
                        'class' => 'form-control',
                        'name'  => 'url',
                        'value' =>  set_value('url',$url),
                    );
                    echo form_input($attributes); 
                ?>
            </div>
            <div class="col-sm-8 pull-right">
            
                <?php
                    echo form_error('url');
                ?>
            </div>   
        </div>
        <div class="form-group">
            <label for="inputImage" class="col-sm-3 control-label">Image</label>
            <div class="col-sm-8">
                <?php 
                    $attributes   =   array(
                        'class' => 'form-control',
                        'name'  => 'userfile',
                    );
                    echo form_upload($attributes); 
                ?>
            </div>
        </div>
         <div class="form-group">
            <label for="inputImage" class="col-sm-3 control-label">Content Image</label>
            <div class="col-sm-8">
                <?php 
                    if(!empty($image)){
                ?>
                <img src="<?php echo base_url().'uploads/'.$image; ?>" alt="image" width='100' height='100'/>
                <?php        
                    }
                ?>
            </div>
        </div>
        <div class="form-group">
           
            <div class="col-sm-8 col-xs-offset-5">
               <?php echo form_submit('submit', 'Save'); ?>
            </div>
        </div>
        <?php 
            echo form_close();  
        ?>
    
                                                    
                                            
			
		
</div> <!-- admin-cont-->     
</div> <!-- col-lg-8 -->
</div><!-- content  main-->
</div><!-- content admin id>-->
<?php include('admin_footer.php');?>
</div><!-- content -->
 
</body>
</html>
	
