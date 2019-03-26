<?php get_header(); ?>
	<?php if ( have_posts () ) : while (have_posts()) : the_post(); ?>
		<?php get_template_part('template-parts/banner'); ?>
		<?php if(get_the_content()) : ?>
			<section>
				<div class="container">
					<?php the_content(); ?>
				</div>
			</section>
		<?php endif; ?>
		<?php 
			if($post->post_name == 'servicos'){
			    $query_args = array(
			        'post_type' => $post->post_name,
			    );
			    $query = new WP_Query( $query_args );
			    if($query){
					echo '<section>
							<div class="container">
								<ul class="servicos">';
					while ( $query->have_posts() ) : 
						$query->the_post();
					    echo '<li id="'.$post->post_name.'">';
					    echo '
							<div class="thumbnail" style="background-image: url('.wp_get_attachment_url(get_post_thumbnail_id($post->ID), 'full').')"></div>
							<p>'.get_the_content().'</p>
					    </li>';
					endwhile;
					echo '</ul>
						</div>
							</section>';
			    }
			    wp_reset_query();
			    wp_reset_postdata();					
			} elseif($post->post_name == 'clientes'){
				if(get_field('clientes')){
					?>
					<section class="clientes">
						<div class="container">
							<h2>Alguns de nossos clientes</h2>
							<ul class="carousel">
								<?php 
									foreach (get_field('clientes') as $key => $value) {
										?>
										<li><a href="<?php echo $value['url']; ?>" title="<?php echo $value['titulo']; ?>"><img src="<?php echo $value['thumbnail']; ?>" alt="<?php echo $value['titulo']; ?>"></a></li>
										<?php
									}
								?>
							</ul>							
						</div>
					</section>
					<?php
				}
			}
		?>
	<?php endwhile;
	endif; ?>
<?php get_footer(); ?>