<?php 
get_header();
?>
 
 <main id="main-content">
 
	
		<section class="home-hero inverted"style="background-image: url('<?php echo get_template_directory_uri(); ?>/../img/hero-background.jpg'), url('<?php the_post_thumbnail_url('1366x676') ?>');">
		            <p><?php the_content(); ?></p>
	      
			<div class="container">
   
				<div class="hero-content">
					<h1 class="hero-title"><?php the_field('main_slogan'); ?></h1>
					<a href="<?php echo get_post_type_archive_link('students'); ?>" class="hero-link"> <?php the_field('main_slogan_link_'); ?> </a>
				</div>
			</div>
		</section>
		<section class="last-news">
			<div class="container">
				<h2 class="section-title"><?php echo get_field('last_actualities_title'); ?> </h2>
				
                <?php
				// 1 - Tableau d'argument
				$arg = array(
					'post_type'			=> 'post',
					'posts_per_page'	=> 3,
					'order'				=> 'DESC',
				);

				// 2 - Requete
				$requete = new WP_Query($arg);

				// 3 - Boucle
				if ($requete->have_posts()):
				
					while ($requete->have_posts()):
						$requete->the_post(); 
						?>

                           
						<article class="card card-module">
							<img loading="lazy"  src="<?php the_post_thumbnail_url('imgthumbnailActuality'); ?>" alt="Some code" class="card-img">
								
								
								<div class="card-content">
									<p class="card-date"> <?php echo get_the_date(); ?></p>
									<h2 class="card-title"> <?php the_field('card_title'); ?> </h2>
									<p class="card-excerpt"> <?php the_field('card_description'); ?> </p>
								</div>
								<a href="<?php the_permalink() ?>" class="card-link"><?php the_field('button_text'); ?> 
								
								<?php 
									$image = get_field('flash_icon', 'option');
									if( !empty( $image ) ):
									?>
										<img loading="lazy" src="<?php echo esc_url($image['sizes']['flashIcon']); ?>"  alt="<?php echo esc_attr($image['alt']) ; ?>" aria-hidden="true"/>
									<?php endif; ?>
							
							</a>
						</article>			
                
					<?php
				
					endwhile;
				endif;

				// 4 - Réinitialise la boucle par défault / Sortir de la boucle personnalisé
				wp_reset_postdata();

			?>
             
			</div>
		</section>

		<section class="students inverted">
			<div class="container">
				<h2 class="section-title"><?php the_field('main_heading_students_'); ?></h2>
			
								
                <?php
				// 1 - Tableau d'argument
				$arg = array(
					'post_type'			=> 'Students',
					'posts_per_page'	=> 4,
					'order'				=> 'DESC',
				);

				// 2 - Requete
				$requete = new WP_Query($arg);

				// 3 - Boucle
				if ($requete->have_posts()):
				
					while ($requete->have_posts()):
						$requete->the_post(); 
						?>
	
		
							   
						   <article class="student">
                            <img loading="lazy"  src="<?php the_post_thumbnail_url('imgthumbnailStudent'); ?>" alt="Francine Auhi" class="student-img">
                            <h2 class="student-name"><?php the_field('student_name'); ?></h2>
                            <a href="<?php the_permalink() ?>" class="student-link"><?php the_field('student_link'); ?></a>
                        </article>	
                    

			        
               
					<?php
				
					endwhile;
				endif;

				// 4 - Réinitialise la boucle par défault / Sortir de la boucle personnalisé
				wp_reset_postdata();

			?>
		
			</div>
		</section>
		<section class="modules">
			<div class="container">
				<h2 class="section-title"><?php the_field('module_main_title'); ?></h2>
				<?php
				// 1 - Tableau d'argument
				$arg = array(
					'post_type'			=> 'Formation',
					'posts_per_page'	=> 2,
					'order'				=> 'DESC',
				);

				// 2 - Requete
				$requete = new WP_Query($arg);

				// 3 - Boucle
				if ($requete->have_posts()):
				
					while ($requete->have_posts()):
						$requete->the_post(); 
						?>							   
					<article class="card card-module">
							<img loading="lazy"  src="<?php the_post_thumbnail_url( 'imgthumbnailFormation' ); ?>" alt="Some code" class="card-img" >
							<div class="card-content">
								<h2 class="card-title"><?php the_field('sub_title_formation'); ?></h2>
								<p class="card-excerpt"><?php the_field('description_formation_'); ?></p>
							</div>
							<a href="<?php the_permalink() ?>" class="card-link"><?php the_field('button_text_'); ?>
							<?php 
									$image = get_field('flash_icon', 'option');
									if( !empty( $image ) ):
									?>
										<img loading="lazy" src="<?php echo esc_url($image['sizes']['flashIcon']); ?>"  alt="<?php echo esc_attr($image['alt']) ; ?>" aria-hidden="true"/>
									<?php endif; ?>
						</a>
						</article>	
                    

			        
               
					<?php
				
					endwhile;
				endif;

				// 4 - Réinitialise la boucle par défault / Sortir de la boucle personnalisé
				wp_reset_postdata();

			?>
			
		
			</div>
		</section>
	            </main>
   


<?php
get_footer();
?>