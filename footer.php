			</div><!--// end #wrapper -->	
	<footer id="footer">	
				<div class="icon-menu">
						<?php wp_nav_menu( array('menu' => 'Footer Menu')); ?>
				</div>  
				
				<?php if ( function_exists('dynamic_sidebar') && dynamic_sidebar('Footer Widget Area') ) : else : ?>
			
				<?php endif; /* END FOR WIDGETS CALL */ ?>
				
				 
	<span class="copyright">Copyright &copy; <?php echo date('Y');?> <a href="<?php echo home_url(); ?>" rel="home"><?php bloginfo('name'); ?></a>.Theme by <a href="http://technosiren.com" class="fa fa-star">TechnoSiren</a></span>
	</footer>	
	<?php wp_footer(); ?>
	</body>
</html>