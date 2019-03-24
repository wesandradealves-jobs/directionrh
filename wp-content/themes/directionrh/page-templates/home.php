<?php
    /**
    * Template Name: Home
    */
?>
<?php get_header(); ?>
<section class="home">
    <div class="container">
        <h2>Soluções Integradas <small>Em RH</small></h2>
        <p><a href="<?php echo get_page_by_path('empresa')->guid; ?>">Saiba Mais</a></p>
    </div>
</section>
<?php if(get_field('mosaico')) : ?>
<section class="home-mosaic">
	<div class="container">
		<ul>
			<?php 
				foreach (get_field('mosaico') as $key => $value) {
					if(is_object($value['url'])){
						$url = $value['url']->guid;
					} else {
						$url = $value['url'];
					}					
					echo '<li class="post_'.$value['id'].' '.( ($value['full_width'] ? 'full_width' : '') ).'" style="background-color:'.$value['background_color'].';background-image:url('.$value['imagem'].')">
						'; 						
						if(!$value['em_branco']) : 
							echo '<div class="'.( ($value['icone'] ? 'has-icon' : '') ).'" style="background-color:'.( (!$value['full_width'] ? $value['background_color'] : '') ).'">
								<div style="color:'.( ($value['background_color'] && $value['background_color'] != '#ffffff') ? 'white' : 'initial' ).'">
									'.( ($value['titulo'] && $value['titulo'] != 'Serviços') ? '<h3>'.$value['titulo'].'</h3>' : '' ).'
									
									'.( ($value['texto']) ? '<p>'.$value['texto'].'</p>' : '' ).'

									'; 

									if($value['titulo']=='Contato'){
										get_template_part('template-parts/form');
									}

									if($value['url'] && !$value['icone']){
										echo '<a '.( ($value['full_width']) ? 'style="background-color:'.$value['background_color'].'"' : '' ).' href="'.$url.'" title="'.( ($value['titulo'] && $value['titulo'] == 'Serviços') ? $value['titulo'] : 'Saiba Mais' ).'">'.( ($value['titulo'] && $value['titulo'] == 'Serviços') ? $value['titulo'] : 'Saiba Mais' ).'</a>';
									}

									echo'

									'.( ($value['icone']) ? '<a href="'.$url.'"><img src="'.$value['icone'].'" alt="'.$value['titulo'].'" /></a>' : '' ).'
								</div>
							</div>';
						endif;
						echo '
					</li>';
				}
			?>
		</ul>
	</div>
</section>
<?php endif; ?>
<?php get_footer(); ?>