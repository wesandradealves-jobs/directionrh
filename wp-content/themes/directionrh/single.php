<?php get_header(); ?>
	<?php if ( have_posts () ) : while (have_posts()) : the_post(); ?>
		<?php get_template_part('template-parts/banner'); ?>
		<section>
		    <div class="container">
		        <?php 
		            the_content();
		        ?>
		    </div>
		</section>
	<?php endwhile;
	endif; ?>
<?php get_footer(); ?>