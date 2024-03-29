<?php get_header(); ?>
			<main id="page-content" class="archive">
			 <?php 
				<?php if ( have_posts() ) : ?>

				<?php if ( is_author() ) echo get_avatar( get_the_author_meta( 'ID' ), 80 ); ?>
						<h2 class="page-title">
							<?php if ( is_category() ) : ?>
								<?php echo single_cat_title( '', false ); ?>
							<?php elseif ( is_author() ) : ?>
								<?php printf( __( '%s', 'stringtheory' ), get_the_author_meta( 'display_name', get_query_var( 'author' ) ) ); ?>
							<?php elseif ( is_tag() ) : ?>
								<?php printf( __( 'Tag Archive for %s', 'stringtheory' ), single_tag_title( '', false ) ); ?>
							<?php elseif ( is_day() ) : ?>
								<?php printf( __( 'Daily Archives: %s', 'stringtheory' ), get_the_date() ); ?>
							<?php elseif ( is_month() ) : ?>
								<?php printf( __( 'Monthly Archives: %s', 'stringtheory' ), get_the_date( _x( 'F Y', 'monthly archives date format', 'stringtheory' ) ) ); ?>
							<?php elseif ( is_year() ) : ?>
								<?php printf( __( 'Yearly Archives: %s', 'stringtheory' ), get_the_date( _x( 'Y', 'yearly archives date format', 'stringtheory' ) ) ); ?>
							<?php else : ?>
								<?php _e( 'Blog Archives', 'stringtheory' ); ?>
							<?php endif; ?>
						</h2><!-- .page-title -->
						<?php
						$description = term_description();
						if ( is_author() )
							$description = get_the_author_meta( 'description' );

		                if ( $description )
							printf( '<h2 class="archive-meta">%s</h2>', $description );
						?>

					<?php
					while ( have_posts() ) : the_post();

						get_template_part( 'content', get_post_format() );

					endwhile;

					} elseif (function_exists('clean_archives_reloaded')) { clean_archives_reloaded(); } 
		      		
		      		else : 

					get_template_part( 'content', 'none' );
					
				endif;
			</main>	
			<?php get_sidebar(); ?>
<?php get_footer(); ?>
		