<?php /* Wrapper Name: Header */ ?>
<div class="row">
	<div class="span12 hidden-phone" data-motopress-type="static" data-motopress-static-file="static/static-search.php">
		<?php get_template_part("static/static-search"); ?>
	</div>
	<div class="span6 headerlogobaru" data-motopress-type="static" data-motopress-static-file="static/static-logo.php">
		<?php get_template_part("static/static-logo"); ?>
	</div>
	<div class="span6 headermenubaru" data-motopress-type="static" data-motopress-static-file="static/static-nav.php">
		<div class="v_menuheader_res" align="center">
		<?php get_template_part("static/static-nav"); ?>
		</div>
	</div>
</div>
<style>
	.tempforSize {display: inline-block !important;}
</style>
<script type="text/javascript">
	var swidth = $(window).width();
	if(swidth <= 768){
	   function getTextWidth(txt) {
		  var $elm = $('<span class="tempforSize">'+txt+'</span>').prependTo("body");
		  var elmWidth = $elm.width();
		  $elm.remove();
		  return elmWidth;
		}
		function centerSelect($elm) {
			var optionWidth = getTextWidth($elm.children(":selected").html());
			var emptySpace =   $elm.width()- optionWidth;
			$elm.css("text-indent", (emptySpace/2) - 10);// -10 for some browers to remove the right toggle control width
		}
		// on start 
		$('.centerSelect').each(function(){
		  centerSelect($(this));
		});
		// on change
		$('.centerSelect').on('change', function(){
		  centerSelect($(this));
		});
	   }
</script>