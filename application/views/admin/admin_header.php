
<script>
        (function (doc) {
            var viewport = document.getElementById('viewport');
            if (navigator.userAgent.match(/iPad/i)) {
                doc.getElementById("viewport").setAttribute("content", "width=1280, user-scalable=no");
            } else {
                doc.getElementById("viewport").setAttribute("content", "width=device-width, initial-scale=1.0, user-scalable=no");
            }
        }(document));
    </script>

    <link href="<?php echo $base_url; ?>assets/css/fonts.css" rel="stylesheet" media="all">
    <link href="<?php echo $base_url; ?>assets/css/bootstrap-min.css" rel="stylesheet" media="all">
    <link href="<?php echo $base_url; ?>assets/css/datepicker.css" rel="stylesheet" media="all">
    <link href="<?php echo $base_url; ?>assets/css/bootstrap-timepicker.css" rel="stylesheet" media="screen">
    <link href="<?php echo $base_url; ?>assets/css/main.css" rel="stylesheet" media="all">
    <link href="<?php echo $base_url; ?>assets/css/font-awesome.css" rel="stylesheet" media="all">

    <link rel="shortcut icon" href="<?php echo $base_url; ?>assets/img/favicon.png">

 
    <!--[if lt IE 9]>
        <link href="css/itie9.css" rel="stylesheet" media="all">
    <![endif]-->
    <script src="<?php echo $base_url; ?>assets/js/modernizr-2.6.2.js"></script>
    <script type="text/javascript" language="javascript" src="<?php echo $base_url; ?>assets/js/jquery-1.8.2.min.js"></script>



<header class="nav-header innr-head">
    <div class="nav-bar inner-pages-relative">
        <div class="container">
            <h1 class="logo"> <a href="<?php echo $base_url; ?>"></a> </h1>
            <button class="navbar-toggle pull-right" type="button" data-toggle="collapse" data-target=".bs-navbar-collapse"> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
            <div class="btn-grp pull-right">

                <div class="btn-grp pull-right">
  <a class="btn btn-gray" href="<?php echo base_url();?>logout">Logout</a>
                        <!--<a class="btn" href="<?php echo $base_url; ?>account">Sign Up</a>-->
                </div>
                
            </div>
<ul id="topmenu-nav" role="navigation" class="list-unstyled list-inline pull-left font-semiBold navbar-collapse bs-navbar-collapse">
    <!--<li><a href="<?php //echo $base_url; ?>">Home</a></li>-->
  
</ul>

<script type="text/javascript">
    $(document).ready(function () {
        $("ul#topmenu-nav>li>a").each(function () {
            if ('about' == 'services') {
                $("#lnkservices").addClass("active");
            }
            else {
                var ahref = $(this).attr("href");
                if (ahref != undefined) {
                    if ($.trim(ahref.toLowerCase()) == '/about') {
                        $(this).addClass("active");
                    }
                }
            }
        });
    });
</script>
        </div>
    </div>
    <!-- navbar ends here -->
</header>