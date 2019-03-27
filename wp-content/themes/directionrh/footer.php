	</main>
	<footer class="footer" style="background-image: url(<?php echo get_theme_mod('background'); ?>)">
		<div class="container">
			<?php echo get_template_part('template-parts/navigation'); ?>
			<?php echo get_template_part('template-parts/contato'); ?>
		</div>
		<div class="copyright">
			<div class="container">
	          <p><?php echo "&#x24B8; Copyright ".date('Y')." - ".get_bloginfo('name')." - Todos os direitos reservados."; ?></p>
	          <p>
	            <a class="stamps" href="http://www.system-dreams.com.br" target="_blank" title="System Dreams - Criação e Otimização de Sites">Developed by SD</a>
	            <a class="stamps" href="javascript:void(0)" title="W3C | HTML5">W3C | HTML5</a>
	          </p>				
			</div>
		</div>
	</footer>
	<?php 
		get_template_part( 'template-parts/social' );
	?>
</div>
<?php wp_footer(); ?>
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
</body>
</html>