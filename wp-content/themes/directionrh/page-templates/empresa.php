<?php
    /**
    * Template Name: Empresa
    */
?>
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
			if(get_field('color_bar')) :
				?>
				<section class="color_box" style="background-color: <?php echo get_field('color_bar')['background']; ?>">
					<div class="container">
						<p>
							<?php echo get_field('color_bar')['texto']; ?>
						</p>
					</div>
				</section>
				<?php
			endif;
		?>
		<?php
			if(get_field('features')) :
				?>
				<section class="column_box">
					<div class="container">
						<h2><?php echo get_field('features')['titulo']; ?></h2>
						<?php 
							if(get_field('features')['feature']){
								foreach (get_field('features')['feature'] as $key => $value) {
									
								?>
									<div>
										<?php if($value['thumbnail']) : ?>
										<img src="<?php echo $value['thumbnail']; ?>" />
										<?php else : ?>
										<i class="<?php echo $value['icon_class']; ?>"></i>
										<?php endif; ?>
										<h3><?php echo $value['titulo']; ?></h3>
										<p><?php echo $value['texto']; ?></p>
									</div>
									<?php
								}
							}
						?>
					</div>
				</section>
				<?php
			endif;
		?>
		<?php		
			if(get_field('depoimentos')) :
				?>
				<section>
					<div class="container">
						<h2>Depoimentos</h2>
						<div>
							<div class="bxslider testimonials">
								<?php 
									foreach (get_field('depoimentos') as $key => $value) {
										?>
											<div>
												<blockquote>
													<p><?php echo $value['depoimento'] ?></p>
													<p>
														<?php echo $value['autor'] ?>
													</p>
												</blockquote>
											</div>
										<?php
									}
								?>
							</div>
						</div>
					</div>
				</section>
				<?php
			endif;
			wp_reset_postdata(); 
			wp_reset_query(); 				
		?>
		<section class="contato" id="contato">
			<div class="container">
				<h2>Entre em Contato</h2>
				<?php get_template_part('template-parts/form'); ?>
			</div>
		</section>
	<?php endwhile;
	endif; ?>
<?php get_footer(); ?>