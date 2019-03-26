<?php get_header(); ?>
	<?php 
		get_template_part('template-parts/banner'); 
	?>	
	<section>
		<div class="container">
			<ul class="servicos">
			<?php if ( have_posts () ) : while (have_posts()) : the_post(); $paged = (get_query_var('paged')) ? get_query_var('paged') : 1; ?>
				<?php 
				    echo '<li id="'.$post->post_name.'">';
				    echo '
						<div class="thumbnail" style="background-image: url('.wp_get_attachment_url(get_post_thumbnail_id($post->ID), 'full').')"></div>
						<p>'.get_the_content().'</p>
				    </li>';
				?>
			<?php endwhile; ?>
			</ul>
			<?php
		    $args = array(
		        'format'  => '?paged=%#%',
		        'current' => $paged,
		        'total'   => $wp_query->max_num_pages
		    );
		    echo paginate_links( $args );		
			endif; ?>
		</div>
	</section>
<?php get_footer(); ?>