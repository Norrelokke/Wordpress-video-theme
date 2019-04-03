<?php
/** Main Header Template */
?>
<!DOCTYPE html>
<html>

<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<?php wp_head(); ?>
</head>
	<body>
			<header class="site-header">

<nav class="main-nav-container">
<a href="index.html"><img src="<?php bloginfo('template_url') ?>/assets/img/logo.png" class="logo"></a>
<?php
								wp_nav_menu( $arg = array (
										'menu_class' => 'main-nav',
										'theme_location' => 'primary'
								));
?>
<div class="header-search">
<form id="searchform" method="get" action="<?php echo esc_url( home_url( '/' ) ); ?>">
<input type="search" name="s" class="search-input" placeholder="Search" autocomplete="off">
<button type="submit" class="search-submit"><i class="fa fa-search"></i></button>
</form>

</div>
</nav>
		</header>
	</body>
</html>
