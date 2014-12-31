



<div class="go-to-top">
	<a class="go-tp-btn trigger" href="#content"></a>
</div>
<footer class="footer">
    <div class="container text-center">
        <ul class="list-unstyled list-inline foot-nav">
            <li><a href="<?php echo $base_url; ?>site">Home</a></li>
            <li><a href="<?php echo $base_url; ?>site/about">About Us</a></li>
            <li><a href="<?php echo $base_url; ?>site/financialdiagnosis">Services</a></li>
            <li><a href="<?php echo $base_url; ?>site/blog">Blog</a></li>
			<li><a href="<?php echo $base_url; ?>site/career">Careers</a></li>
			<li><a href="<?php echo $base_url; ?>site/media">News</a></li>
            <li><a href="<?php echo $base_url; ?>site/contact">Contact Us</a></li>             
        </ul>
        <div class="footr-logo"> <a href="index.php"></a> </div>
        <h5>Follow us to get the latest news and updates.</h5>
        <ul class="follow-us list-unstyled list-inline cf text-center">
            <li><a target="_blank" href="https://www.facebook.com/pages/Progno-Financial-Planning-Systems-P-Ltd/306114492800179?fref=ts" class="fb-icon"></a></li>
            <li><a target="_blank" href="https://twitter.com/prognofp" class="tweet-icon"></a></li>
            
            <li><a target="_blank" href="http://www.linkedin.com/company/progno-financial-planning-systems-private-limited" class="in-icon"></a></li>
        </ul>
    </div>
    <div class="credit-wrap">
        <div class="container"> Copyright  2014 prognofp.com | All rights reserved | <a href="/about#Our-Policies">PRIVACY POLICY</a><span> | </span> <a class="terms-link" href="/about#terms">Terms and Conditions</a> </div>
    </div>
</footer>



  <script type="text/javascript" language="javascript" src="<?php echo $base_url; ?>assets/js/bootstrap.min.js"></script>
    <script type="text/javascript" language="javascript" src="<?php echo $base_url; ?>assets/js/jquery.carouFredSel-6.2.1.js"></script>
    <script type="text/javascript" language="javascript" src="<?php echo $base_url; ?>assets/js/jquery.easing.1.3.js"></script>
    <script type="text/javascript" language="javascript" src="<?php echo $base_url; ?>assets/js/main.js"></script>
    <script type="text/javascript" language="javascript" src="<?php echo $base_url; ?>assets/js/smooth-scroll.js"></script>
    <script type="text/javascript" language="javascript" src="<?php echo $base_url; ?>assets/js/jquery.parallax-1.1.3.js"></script>
    
    <script type="text/javascript">
        $(function () {
            $("html").niceScroll();
            $('.bg1').parallax("50%", 0.1);
            $('.bg2').parallax("50%", 0.4);
            $('.bg3').parallax("50%", 0.2);
            $('.bg4').parallax("50%", 0.2);
            $('.tab-nav a').bind('click', function (event) { $('.tab-nav a').removeClass('active'); $(this).addClass('active'); var $anchor = $(this); $('html, body').stop().animate({ scrollTop: $($anchor.attr('href')).offset().top }, 400, 'easeInOutExpo'); $('html, body').stop().animate({ scrollTop: $($anchor.attr('href')).offset().top }, 400); event.preventDefault(); });
        });
        var StartJourney = {
            ActionOnSuccess: function (args) {
                if (args.Status == false) {
                    $("#btnstartjourney").val("Submit Query");
                    $("#StartJourneyMsg").html(args.Message).addClass("error");
                } else {
                    window.location = '/index/thankyou';
                }
            },
            onBegin: function () {
                $("#btnstartjourney").val("processing..");
            },
            ActionOnFailure: function (args) {
                $("#btnstartjourney").val("Submit Query");
                $("#StartJourneyMsg").html("Sorry some error occured, try again!").addClass("error");
            }
        }
    </script>