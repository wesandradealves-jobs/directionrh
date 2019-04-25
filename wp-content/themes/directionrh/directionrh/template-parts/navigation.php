<?php 
	if(wp_get_nav_menu_items('header')){
		?>
		<nav class="navigation">
			<?php echo (did_action('get_footer')) ? '<h2>Site Map</h2>' : ''; ?>
			<ul>
				<?php 
					$page = $post->post_name;
					foreach (wp_get_nav_menu_items('header') as $key => $value) {
						echo '<li class="'; 
						if(!is_front_page() && explode('/', $value->url)[4] == $page || is_front_page() && $value->post_name == 'home'){
							echo 'current';
						}
						echo '"><a href="'.(($value->title == 'Contato') ? get_page_link(get_page_by_path('empresa')).'#contato' : $value->url).'" title="'.$value->title.'">'.$value->title.'</a>'; 
							if($value->title == 'Serviços' && !did_action('get_footer')){
		                            $terms = get_terms( array( 
		                                'taxonomy' => 'servicos_categories',
		                                'hide_empty' => 0,
                                        
                                        'orderby' => 'name',
                                        'order' => 'ASC',
		                                'parent'   => 0
		                            ) ); 
		                            if($terms){
		                              echo '<ul>';
		                                foreach ($terms as $term) {
		                                  echo '<li>';
		                                    echo '<a href="'.get_term_link($term->term_id, $term->taxonomy).'" title="'.$term->name.'">'.$term->name.'</a>';
		                                    
		                                  
		                                    $children = get_terms( array( 
		                                        'taxonomy' => $term->taxonomy,
		                                        'hide_empty' => 0,
                                                
                                                'orderby' => 'name',
                                                'order' => 'ASC',
		                                        'parent'   => $term->term_id
		                                    ) ); 
		                                    
                                            $p = new WP_Query( array(
                                                'post_type' => str_replace('_categories','',$term->taxonomy),
                                                'posts_per_page' => -1,
                                                
                                                'order' => 'ASC',
                                                'tax_query' => array(
                                                    array(
                                                        'taxonomy' => $term->taxonomy,
                                                        'terms' => $term->slug,
                                                        'field' => 'slug',
                                                        'include_children' => true,
                                                        'operator' => 'IN'
                                                    )
                                            ) ) );			  
                                            
                                            if($children){
                                                echo '<ul>';
                                                  foreach ($children as $child) {
                                                    echo '<li>';
                                                            echo '<a href="'.get_term_link($child->term_id, $term->taxonomy).'" title="'.$child->name.'">'.$child->name.'</a>';
                		                                   
                		                                    $childs = get_terms( array( 
                		                                        'taxonomy' => $term->taxonomy,
                		                                        'hide_empty' => 0,
                                                                
                                                                'orderby' => 'name',
                                                                'order' => 'ASC',
                		                                        'parent'   => $child->term_id
                		                                    ) ); 
                		                                    
                                                            $p = new WP_Query( array(
                                                                'post_type' => str_replace('_categories','',$term->taxonomy),
                                                                'posts_per_page' => -1,
                                                                
                                                                'orderby' => 'name',
                                                                'order' => 'ASC',
                                                                'tax_query' => array(
                                                                    array(
                                                                        'taxonomy' => $term->taxonomy,
                                                                        'terms' => $child->slug,
                                                                        'field' => 'slug',
                                                                        'include_children' => true,
                                                                        'operator' => 'IN'
                                                                    )
                                                            ) ) );	
                                                            
                                                            if($childs){
                                                                echo '<ul>';
                                                                    foreach ($childs as $c) {
                                                                        echo '<li>';
                                                                            echo '<a href="'.get_term_link($c->term_id, $term->taxonomy).'" title="'.$c->name.'">'.$c->name.'</a>';
                                		                                    
                                		                                    $ch = get_terms( array( 
                                		                                        'taxonomy' => $term->taxonomy,
                                		                                        'hide_empty' => 0,
                                                                                
                                                                                'orderby' => 'name',
                                                                                'order' => 'ASC',
                                		                                        'parent'   => $c->term_id
                                		                                    ) ); 
                                		                                    
                                                                            $p = new WP_Query( array(
                                                                                'post_type' => str_replace('_categories','',$term->taxonomy),

                                                                                'orderby' => 'name',
                                                                                'order' => 'ASC',
                                                                                'posts_per_page' => -1,
                                                                                'tax_query' => array(
                                                                                    array(
                                                                                        'taxonomy' => $term->taxonomy,
                                                                                        'terms' => $c->slug,
                                                                                        'field' => 'slug',
                                                                                        'include_children' => true,
                                                                                        'operator' => 'IN'
                                                                                    )
                                                                            ) ) );	
                                                                            
                                                                            if($ch){
                                                                                echo '<ul>';
                                                                                foreach ($ch as $chd) {
                                                                                    echo '<li>';
                                                                                        echo '<a href="'.get_term_link($chd->term_id, $term->taxonomy).'" title="'.$chd->name.'">'.$chd->name.'</a>';
                                                                                    echo '</li>';
                                                                                }
                                                                                echo '</ul>';
                                                                            } elseif($p){
                                                                                echo '<ul>';
                                                                                while ( $p->have_posts() ) : $p->the_post();
                                                                                    echo '<li><a href="'.get_the_permalink().'" title="'.get_the_title().'">'.get_the_title().'</a></li>';
                                                                                endwhile;
                                                                                wp_reset_query();
                                                                                wp_reset_postdata();                                                  
                                                                                echo '</ul>';   
                                                                            }
                                                                        
                                                                        echo '</li>';
                                                                    }       
                                                                echo '</ul>';
                                                            }elseif($p){
                                                                echo '<ul>';
                                                                while ( $p->have_posts() ) : $p->the_post();
                                                                    echo '<li><a href="'.get_the_permalink().'" title="'.get_the_title().'">'.get_the_title().'</a></li>';
                                                                endwhile;
                                                                wp_reset_query();
                                                                wp_reset_postdata();                                                  
                                                                echo '</ul>';
                                                            }
                                                        echo '
                                                    </li>';
                                                  }
                                                echo '</ul>';
                                            } elseif($p){
                                                echo '<ul>';
                                                while ( $p->have_posts() ) : $p->the_post();
                                                    echo '<li><a href="'.get_the_permalink().'" title="'.get_the_title().'">'.get_the_title().'</a></li>';
                                                endwhile;
                                                wp_reset_query();
                                                wp_reset_postdata();                                                  
                                                echo '</ul>';
                                            }


		                                  echo '</li>';
		                                }
		                              echo '</ul>';
		                            }

							}
						echo '</li>';
					}
				?>
				<?php if(!did_action('get_footer')) : ?>
					<li>
			            <button onclick="mobileNavigation(this)" class="hamburger hamburger--collapse" type="button">
			              <span class="hamburger-box">
			                <span class="hamburger-inner"></span>
			              </span>
			            </button> 		
					</li>
				<?php endif; ?>
			</ul>
		</nav>
		<?php
	}
?>