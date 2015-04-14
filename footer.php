</div> <!--content wrapper -->

	<div class="color-background-bottom">
		<footer class="row">
			<div class="medium-4 columns">
      			<a href="http://ufl.edu" title="University of Florida"><img src="<?php bloginfo('template_directory');?>/img/uf_logo_white.png" alt="University of Florida"></a>
				<p>302 Anderson Hall<br>
					Gaineville, FL 32611<br>
					352-392-3261<br>
					<a href="mailto:uf-caires@ufl.edu">Contact webmaster</a><br>
					<?php
					$last = $wpdb->get_var("SELECT post_modified FROM $wpdb->posts order by post_modified DESC LIMIT 1");
					echo "Site last updated: " . mysql2date(get_settings('date_format'), $last);
					?></p>
			</div>
			<div class="medium-8 columns">
			<ul class="inline-list">
				<li><a href="#"><strong>HOME</strong></a></li>
				<li><a href="#"><strong>ABOUT</strong></a></li>
				<li><a href="#"><strong>AFFILIATES</strong></a></li>
				<li><a href="#"><strong>GRANTS</strong></a></li>
				<li><a href="#"><strong>TEACHING</strong></a></li>
				<li><a href="#"><strong>PROJECTS</strong></a></li>
				<li><a href="#"><strong>CONTACT</strong></a></li>
			</ul>
			<p>&copy; <?php echo date('Y'); ?> <?php bloginfo( 'name' ); ?>.</p>
				<!--<?php dynamic_sidebar('footer-three'); ?>-->
			</div>				
		</footer>
	</div>
</div>

<?php wp_footer(); ?>
	<!--<script src="<?php bloginfo('template_directory');?>/js/vendor/jquery.js"></script> -->
  	<script src="<?php bloginfo('template_directory');?>/js/foundation.min.js"></script>
  	<script src="<?php bloginfo('template_directory');?>/js/foundation/foundation.topbar.js"></script>
  	<script src="<?php bloginfo('template_directory');?>/js/foundation/foundation.accordion.js"></script>

<script>
	jQuery(document).foundation();
  </script>
</body>
</html>
