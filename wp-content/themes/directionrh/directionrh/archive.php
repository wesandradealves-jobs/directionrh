<?php get_header(); ?>
	<?php 
		get_template_part('template-parts/banner'); 
	?>	
	<?php if(get_queried_object()->description && get_queried_object()->slug == 'coaching') : ?>
	<section>
	    <div class="container">
	        <p><?php echo get_queried_object()->description; ?></p>
	    </div>
	</section>
	<?php endif; ?>
	<section>
		<ul class="servicos">
    		<?php 
                $children = get_terms( array( 
                    'taxonomy' => get_queried_object()->taxonomy,
                    'hide_empty' => 0,
                    'order' => 'ASC',
                    'parent'   => get_queried_object()->term_id
                ) ); 
                
                $posts = new WP_Query( array(
                    'post_type' => str_replace('_categories','',get_queried_object()->taxonomy),
                    'posts_per_page' => -1,  
                    'order' => 'ASC',
                    'tax_query' => array(
                        array(
                            'taxonomy' => get_queried_object()->taxonomy,
                            'terms' => get_queried_object()->term_id,
                            'field' => 'ID',
                            'include_children' => true,
                            'operator' => 'IN'
                        )
                    ),
                ) );                  
                
                if($children){
                  foreach ($children as $child) {
					    echo '
    					    <li>
    					        <div class="thumbnail" style="background-image: url('.get_field('background', $child).')"></div>
    							<h3 class="title"><a title="'.$child->name.'" href="'.get_term_link($child->term_id, get_queried_object()->taxonomy).'">'.$child->name.'</a></h3>
    							<p><a title="'.$child->name.'" href="'.get_term_link($child->term_id, get_queried_object()->taxonomy).'">'.$child->description.'</a></p>
    					    </li>
					    '; 
                  }
                }elseif($posts){
                    while ( $posts->have_posts() ) : $posts->the_post();
					    echo '<li id="'.$post->post_name.'">';
					    echo '
							<div class="thumbnail" style="background-image: url('.wp_get_attachment_url(get_post_thumbnail_id($post->ID), 'full').')"></div>
							<h3 class="title">'.get_the_title().'</h3>
							<p><a title="'.get_the_title().'" href="'.get_the_permalink().'">'.get_the_excerpt().'</a></p>
					    </li>';                        
                    endwhile;
                }                
    		?>   
		</ul>
	</section>
<?php get_footer(); ?>