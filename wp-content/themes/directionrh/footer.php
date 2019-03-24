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
<script src='https://maps.googleapis.com/maps/api/js?key=AIzaSyC5QMfSnVnSCcmkFag0ygrXzj2QJ9usEG4'></script>
<noscript>Seu Navegador pode não aceitar javascript.</noscript>
<script>
	<?php 
		$lat = explode(',', get_theme_mod('maps'))[0];
		$lng = explode(',', get_theme_mod('maps'))[1];
		echo '
			function init_map(){
				var mapOptions = {
				  center: new google.maps.LatLng('.$lat.', '.$lng.'),
				  zoom: 15,
				  disableDefaultUI: true,
				  mapTypeId: google.maps.MapTypeId.ROADMAP
				};
				var marker = new google.maps.Marker({
                    position: "'.get_theme_mod('maps').'",
                    map: map
                });				
				var map = new google.maps.Map(document.getElementById("map"),
				            mapOptions);
				var marker = new google.maps.Marker({position: {lat: '.$lat.', lng: '.$lng.'}, map: map});	
			}
		    google.maps.event.addDomListener(window, "load", init_map);
	    '; 
    ?>
</script>
<noscript>Seu Navegador pode não aceitar javascript.</noscript>
</body>
</html>