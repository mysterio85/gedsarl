
<!--=== End Footer ===-->

<!--=== Copyright ===-->
<div class="copyright">
	<div class="container">
		<div class="row-fluid">
			<div class="span8">						
	            <p>2014 &copy; GED Sarl, Tous droits réservés - DISTRIBUTION et FORMATION
Distributeur Officiel LEGRAND. <a href="#">Mentions légales </a> </p>
			</div>
			<div class="span4">	
				<a href="index.html"><img id="logo-footer" src="<?php echo base_url()?>assets/img/logo2-default.png" class="pull-right" alt="" /></a>
			</div>
		</div><!--/row-fluid-->
	</div><!--/container-->	
</div><!--/copyright-->	
<!--=== End Copyright ===-->

<!-- JS Global Compulsory -->           
<script type="text/javascript" src="<?php echo base_url()?>assets/js/jquery-1.8.2.min.js"></script>
<script type="text/javascript" src="<?php echo base_url()?>assets/js/modernizr.custom.js"></script>        
<script type="text/javascript" src="<?php echo base_url()?>assets/plugins/bootstrap/js/bootstrap.min.js"></script> 
<!-- JS Implementing Plugins -->           
<script type="text/javascript" src="<?php echo base_url()?>assets/plugins/flexslider/jquery.flexslider-min.js"></script>
<script type="text/javascript" src="<?php echo base_url()?>assets/plugins/parallax-slider/js/modernizr.js"></script>
<script type="text/javascript" src="<?php echo base_url()?>assets/plugins/parallax-slider/js/jquery.cslider.js"></script> 
<script type="text/javascript" src="<?php echo base_url()?>assets/plugins/bxslider/jquery.bxslider.js"></script>
<script type="text/javascript" src="<?php echo base_url()?>assets/plugins/back-to-top.js"></script>
<!-- JS Page Level -->           
<script type="text/javascript" src="<?php echo base_url()?>assets/js/app.js"></script>
<script type="text/javascript" src="<?php echo base_url()?>assets/js/pages/index.js"></script>
<script type="text/javascript" src="<?php echo base_url()?>assets/js/summernote.min.js"></script>
<script type="text/javascript">
    jQuery(document).ready(function() {
        App.init();
        App.initSliders();
        App.initBxSlider1();
        Index.initParallaxSlider();
    });

    $(document).ready(function() {
  	$('.summernote').summernote();
});
</script>
<!--[if lt IE 9]>
    <script src="<?php echo base_url()?>assets/js/respond.js"></script>
<![endif]-->

</body>
</html> 