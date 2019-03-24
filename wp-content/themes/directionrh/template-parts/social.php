<?php if ( get_theme_mod('facebook') || get_theme_mod('twitter') || get_theme_mod('skype') || get_theme_mod('youtube') || get_theme_mod('whatsapp')) : ?>
	<div class="social">
		<p>Siga-nos nas nossas mídias sociais</p>
		<i class="toggle-social fal fa-arrow-circle-right"></i>
		<ul>
			<?php if ( get_theme_mod('facebook') ) : ?>
			<li><a href="<?php echo get_theme_mod('facebook');  ?>" title="Facebook" target="_blank"><i class="fab fa-facebook"></i></a></li>
			<?php endif; ?>
			<?php if ( get_theme_mod('twitter') ) : ?>
			<li><a href="<?php echo get_theme_mod('twitter');  ?>" title="Twitter" target="_blank"><i class="fab fa-twitter-square"></i></a></li>
			<?php endif; ?>
			<?php if ( get_theme_mod('skype') ) : ?>
			<li><a href="<?php echo get_theme_mod('skype');  ?>" title="Skype" target="_blank"><i class="fab fa-skype"></i></a></li>
			<?php endif; ?>
			<?php if ( get_theme_mod('youtube') ) : ?>
			<li><a href="<?php echo get_theme_mod('youtube');  ?>" title="Youtube" target="_blank"><i class="fab fa-youtube"></i></a></li>
			<?php endif; ?>	
			<?php if ( get_theme_mod('whatsapp') ) : ?>
			<li><a href="tel:<?php echo get_theme_mod('whatsapp');  ?>" title="WhatsApp" target="_blank"><i class="fab fa-whatsapp"></i></a></li>
			<?php endif; ?>
		</ul>		
	</div>
<?php endif; ?>