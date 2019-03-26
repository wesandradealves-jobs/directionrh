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
		                                'parent'   => 0
		                            ) ); 
		                            if($terms){
		                              echo '<ul>';
		                                foreach ($terms as $term) {
		                                  echo '<li>';
		                                  $url_0 = get_term_link($term->term_id, 'servicos_categories');
		                                  echo '<a href="'; 
		                                  print_r($url_0);
		                                  echo '" title="'.$term->name.'">'.$term->name.'</a>';

		                                    $children = get_terms( array( 
		                                        'taxonomy' => 'servicos_categories',
		                                        'hide_empty' => 0,
		                                        'parent'   => $term->term_id
		                                    ) ); 
		                                    if($children){
		                                      echo '<ul>';
		                                      foreach ($children as $child) {
		                                        $url = get_term_link($child->term_id, 'servicos_categories');
		                                        echo '<li>
			                                        <a href="';
			                                        print_r($url);
			                                        echo '" title="'.$child->name.'">'.$child->name.'</a>';


					                                    $children = get_terms( array( 
					                                        'taxonomy' => 'servicos_categories',
					                                        'hide_empty' => 0,
					                                        'parent'   => $child->term_id
					                                    ) ); 
					                                    if($children){
					                                      echo '<ul>';
					                                      foreach ($children as $child) {
					                                        $url = get_term_link($child->term_id, 'servicos_categories');
					                                        echo '<li>
						                                        <a href="';
						                                        print_r($url);
						                                        echo '" title="'.$child->name.'">'.$child->name.'</a>';
						                                        echo '
					                                        </li>';
					                                      }
					                                      echo '</ul>';
					                                    }
			                                        
			                                        echo '
		                                        </li>';
		                                      }
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