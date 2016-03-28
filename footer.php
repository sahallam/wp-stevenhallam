<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the id=main div and all content after
 *
 * @package _tk
 */
?>
			</div><!-- close .*-inner (main-content or sidebar, depending if sidebar is used) -->
		</div><!-- close .row -->
	</div><!-- close .container -->
</div><!-- close .main-content -->

<div class="container">
	<div class="footer-ad">
		<?php dynamic_sidebar('footer-ad');?>
	</div>
</div>
			   						
<footer id="colophon" class="site-footer" role="contentinfo">
	<div id="footer">
    	<div class="container">
	    	<div class="row">
				<div class="site-footer-inner col-sm-12">
			   		<div class="container">
				 		<div class="row">
				   			<div class="col-md-4">
					   			<div class="footer-widget1">
						   			<?php dynamic_sidebar('footer-1'); ?>
					   			</div>
				   			</div>
				   			<div class="col-md-4">
					   			<div class="footer-widget2">
						   			<?php dynamic_sidebar('footer-2'); ?>
					   			</div>
				   			</div>
				   			<div class="col-md-4">
					   			<div class="footer-widget3">
						   			<?php dynamic_sidebar('footer-3'); ?>
					   			</div>
				   			</div>
				 		</div>
			 		</div> <!-- close .container -->
			   	</div> <!-- close .site-footer-inner -->
			</div> <!-- close .row -->
				   
		</div> <!-- close .container -->
	</div><!-- close footer -->
	<div id="site-info">
		<div class="container">
			<div class="row">
				<div class="site-footer-inner col-sm-12">
					&copy; 2016 Steven Hallam
				   	<span class="sep">  |  </span>
				   	Constantly In Beta
				   	<span class="sep">  |  </span>
				   	www.stevenhallam.com
				</div>
			</div>
		</div>
	</div><!-- close .site-info -->
	
</footer><!-- close #colophon -->

<?php wp_footer(); ?>

</body>
</html>