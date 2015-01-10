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
<script type="text/javascript" src="<?php base_url().'ckeditor/ckeditor.js'; ?>"></script>
<script type="text/javascript" src="<?php base_url().'ckfinder/ckfinder.js'; ?>"></script>
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
            echo form_open_multipart(base_url().'admin/addtemplate/'.$id,$attributes); 
            
        ?>
        <div class="form-group">
            <label for="inputTitle" class="col-sm-3 control-label"></label>
            <div class="col-sm-8">
               <?php 
                   echo $this->session->flashdata("msg"); 
                   
               ?>
            </div>
        </div>
        <div class="form-group">
            <label for="inputTitle" class="col-sm-3 control-label">Template Name</label>
            <div class="col-sm-8">
                <?php 
                    $attributes   =   array(
                        'class' => 'form-control',
                        'name'  => 'name',
                        'value' =>  set_value('name',$title),
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
            <label for="inputContent" class="col-sm-3 control-label">Template title</label>
            <div class="col-sm-8">
                <?php 
                    $attributes   =   array(
                        'class' => 'form-control',
                        'name'  => 'header',
                        'value' =>  set_value('header',$header),
                    );
                    echo form_textarea($attributes);
                    // $this->ckeditor->editor("textarea header",set_value('header',$header));
               ?>
            </div>
            <div class="col-sm-8 pull-right">
            
            
                <?php
                    echo form_error('header');
                ?>
            </div>
            
        </div>
        <div class="form-group">
            <label for="inputContent" class="col-sm-3 control-label">Template content1</label>
            <div class="col-sm-8">
                <?php 
                    $attributes   =   array(
                        'class' => 'form-control',
                        'name'  => 'footer',
                        'value' =>  set_value('footer',$footer),
                    );
                    echo form_textarea($attributes); 
                    //$this->ckeditor->editor("textarea footer",set_value('footer',$footer));
               ?>
            </div>
            <div class="col-sm-8 pull-right">
            
            
                <?php
                    echo form_error('footer');
                ?>
            </div>
            
        </div>
         <div class="form-group">
            <label for="inputContent" class="col-sm-3 control-label">Content1</label>
            <div class="col-sm-8">
                <?php 
                    foreach($content as $row){
                        $options[$row->id] =   $row->title;
                    }
                    echo form_dropdown('content1', $options,set_value('content1',$content1)); 
                    
               ?>
            </div>
            <div class="col-sm-8 pull-right">
                <?php
                    echo form_error('content1');
                ?>
            </div>

           
            
        </div>
       
       
        <div class="form-group">
            <label for="inputContent" class="col-sm-3 control-label">Content2</label>
            <div class="col-sm-8">
                <?php 
                    foreach($content as $row){
                        $options[$row->id] =   $row->title;
                    }
                    echo form_dropdown('content2', $options,set_value('content2',$content2)); 
                    
               ?>
            </div>
            <div class="col-sm-8 pull-right">
            
            
                <?php
                    echo form_error('content2');
                ?>
            </div>
            
        </div>
        <div class="form-group">
            <label for="inputContent" class="col-sm-3 control-label">Content3</label>
            <div class="col-sm-8">
                <?php 
                    foreach($content as $row){
                        $options[$row->id] =   $row->title;
                    }
                    echo form_dropdown('content3', $options,set_value('content3',$content3)); 
                    
               ?>
            </div>
            <div class="col-sm-8 pull-right">
            
            
                <?php
                    echo form_error('content3');
                ?>
            </div>
            
        </div>
        
      
         <div class="form-group">
            <label for="inputContent" class="col-sm-3 control-label">Content4</label>
            <div class="col-sm-8">
                <?php 
                    foreach($content as $row){
                        $options[$row->id] =   $row->title;
                    }
                    echo form_dropdown('content4', $options,set_value('content4',$content4)); 
                    
               ?>
            </div>
            <div class="col-sm-8 pull-right">
            
            
                <?php
                    echo form_error('content4');
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
	
