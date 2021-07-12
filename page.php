<?php 
get_header();
?>

<main id="main-content" class="post">
		<div class="container container-narrow">
			<h1><?php the_field('title_mention'); ?></h1>
			<p><?php the_field('description_mention'); ?></p>
		</div>
	</main>



<?php
get_footer();
?>