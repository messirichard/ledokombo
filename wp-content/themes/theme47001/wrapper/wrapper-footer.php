<?php /* Wrapper Name: Footer */ ?>
<div class="row footer-widgets">
	<div class="span4 footerlogobaru" data-motopress-type="dynamic-sidebar" data-motopress-sidebar-id="footer-sidebar-1">
		<?php dynamic_sidebar("footer-sidebar-1"); ?>
	</div>
<!-- 	<div class="span2" data-motopress-type="dynamic-sidebar" data-motopress-sidebar-id="footer-sidebar-2">
		<?php dynamic_sidebar("footer-sidebar-2"); ?>
	</div> -->
	<div class="span2 footermenubaru" data-motopress-type="dynamic-sidebar" data-motopress-sidebar-id="footer-sidebar-3">
		<?php dynamic_sidebar("footer-sidebar-3"); ?>
	</div>
	<div class="span3 footermenubaru" data-motopress-type="dynamic-sidebar" data-motopress-sidebar-id="footer-sidebar-4">
		<?php dynamic_sidebar("footer-sidebar-4"); ?>
	</div>
	<div class="span3 copyright footermenubaru" data-motopress-type="static" data-motopress-static-file="static/static-footer-text.php">
		<div class="footer-sidebar-5" data-motopress-type="dynamic-sidebar" data-motopress-sidebar-id="footer-sidebar-5">
			<?php dynamic_sidebar("footer-sidebar-5"); ?>
		</div>
		<div class="footer-logo" data-motopress-type="static" data-motopress-static-file="static/static-footer-logo.php">
			<?php get_template_part("static/static-footer-logo"); ?>
		</div>
		<?php get_template_part("static/static-footer-text"); ?>
		<div class="social-nets-wrapper" data-motopress-type="static" data-motopress-static-file="static/static-social-networks.php">
			<?php get_template_part("static/static-social-networks"); ?>
		</div>
	</div>
</div>

<!-- <div class="row footer-nav-holder">
	<div style="width: 100%;background: white;">
		<ul class="bawahfooter">
		  <li class="bawah2">Producer</li>
		  <li class="bawah2">Packers & Exporters of Tobacco</li>
		  <li class="bawah2">Plantations</li>
		  <li class="bawah2">General Trading</li>
		</ul>
	</div>
	<!-- <div class="span12" data-motopress-type="static" data-motopress-static-file="static/static-footer-nav.php">
		<?php get_template_part("static/static-footer-nav"); ?>
	</div> -->
</div>
 
<style>
ul.bawahfooter{
    list-style-type: none;
    margin: 0;
    padding: 0;
    overflow: hidden;
    background-color: #000;
	text-align:center;
}


li.bawah2{
   	display: inline;
    color: white;
    text-align: center;
    padding: 14px 16px;
    text-decoration: none;
}

li a:hover:not(.active) {
    background-color: #111;
}

.active {
    background-color: #4CAF50;
}
</style>