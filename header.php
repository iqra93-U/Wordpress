<!DOCTYPE html>
<html lang="fr">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Promotion DWWM2019-2</title>
    <?php wp_head(); ?>
</head>
<body class="home">

<?php wp_body_open(); ?>
	<a href="#main-menu" class="screen-reader-text">Aller à la navigation principale</a>
	<a href="#main-content" class="screen-reader-text">Aller au contenu principal</a>
	<header class="main-header">
		<div class="container">
			<div class="logo"><a href="<?php bloginfo('url') ?>"><?php bloginfo('name') ?></a></div>
			<nav class="main-nav">
				<button aria-expanded="false" aria-controls="main-menu">Menu</button>
		
				<ul class="menu" id="main-menu" hidden>
				<?php
       			 $arg= array(
           		'theme_location' => 'principle',
            	'container'      => '',
			

       			 );
       			wp_nav_menu($arg);


    		?>
		
				</ul>
			</nav>
		</div>
	</header>