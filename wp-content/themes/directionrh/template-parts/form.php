<form class="contactform" method="POST" action="<?php echo site_url('phpmailer/send.php') ?>">
	<span>
		<input onkeypress="mascara(this,soLetras)" required="required" type="text" name="nome" placeholder="Nome *">
	</span>
	<span>
		<input required="required" type="email" name="email" placeholder="E-mail *">
	</span>
	<span>
		<input type="tel" name="telefone" placeholder="Telefone" class="telefone">
	</span>
	<span>
		<button class="btn btn-1">Enviar <?php echo (is_front_page() ? '→' : '') ?></button>
	</span>
</form>