<footer class="main-footer">
		<div class="container">
			<address>
				<strong><?php echo get_field('title_footer', 'option');?></strong><br>
				
				<?php the_field('details_contact', 'option'); ?>
				 <a href="tel:<?php the_field('number', 'option'); ?>"><?php the_field('number', 'option'); ?></a>

			</address>
			<nav class="footer-nav">
				<ul class="menu">
				<?php
       			 $arg= array(
           		'theme_location' => 'mentionLegal',
            	'container'      => '',
				'class'      => 'menu-item'			
       			 );
       			wp_nav_menu($arg);


    		?>
				</ul>
			</nav>
			<nav class="social-nav">
				<ul class="menu">
				<?php
       			 $arg= array(
           		'theme_location' => 'SocialMedia',
            	'container'      => '',
				'class'      => 'menu-item'			
       			 );
       			wp_nav_menu($arg);


    		?>
			
				</ul>
			</nav>
		</div>
	</footer>

	<?php wp_footer(); ?>