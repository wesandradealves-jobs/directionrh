<?php get_header(); ?>
	<?php if ( have_posts () ) : while (have_posts()) : the_post(); $paged = (get_query_var('paged')) ? get_query_var('paged') : 1; ?>

	<?php endwhile;
    $args = array(
        'format'  => '?paged=%#%',
        'current' => $paged,
        'total'   => $wp_query->max_num_pages
    );
    echo paginate_links( $args );		
	endif; ?>
<?php get_footer(); ?>