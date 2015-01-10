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
            echo form_open(base_url().'admin/sendtemplate',$attributes); 
            
        ?>
              
         <div class="form-group">
            <label for="inputContent" class="col-sm-3 control-label">Content1</label>
            <div class="col-sm-8">
                <?php 
                    $attributes  = 'id = category';
                    foreach($category as $row){
                        $options[$row->id] =   $row->title;
                    }
                    echo form_multiselect('category', $options,set_value('category',$category),$attributes); 
                ?>
            </div>
            <div class="col-sm-8 pull-right">
                <?php
                    echo form_error('category');
                ?>
            </div>
        </div>


        <div class="form-group">
            <div class="col-sm-8 col-xs-offset-5">
               <?php 
                    $data = array(
                        'name'    => 'button',
                        'id'      => 'show-button',
                        'value'   => 'show',
                        'type'    => 'button',
                        'class'   => 'btn-primary',
                        'content' => 'Show'
                    );
                    echo form_button($data);

               ?>
            </div>
        </div>
        <div class="col-lg-12" id="result"   style="height:200px;overflow-y:scroll;background:#FFF"; >


        <div>
        <?php 
            echo form_close();  
        ?>
    
                                                    
                                            
			
		
</div> <!-- admin-cont-->     
</div> <!-- col-lg-8 -->
</div><!-- content  main-->
</div><!-- content admin id>-->
<?php include('admin_footer.php');?>
<script type="text/javascript">
   $(document).ready(function(){
        $('#show-button').click(function(){
            var selected  =  $("select").val();
            
            $.ajax({
              type: "POST",
              url: "<?php echo base_url().'admin/getcontacts'; ?>",
              data: {selected: selected}
            }).done(function( msg ) {
                $("#result").html(msg);
            });
       });
    });

</script>
</div><!-- content -->
 
</body>
</html>
	
