<?php
/**  Main Footer  */
?>

	<footer  class="site-footer">
		<nav>
			<?php
					wp_nav_menu( $arg = array (
						'menu_class' => 'foot-nav',
						'theme_location' => 'footer'
											));
			?>
		</nav>
	</footer>

<?php wp_footer(); ?>

</body>
</html>
