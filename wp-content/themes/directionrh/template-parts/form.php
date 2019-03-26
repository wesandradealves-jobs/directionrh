<form class="contactform" method="POST" action="<?php echo site_url('phpmailer/send.php') ?>">
	<span>
		<input onkeypress="mascara(this,soLetras)" required="required" type="text" name="Nome" placeholder="Nome *">
	</span>
	<?php if($page == 'empresa') : ?>
		<span>
			<input onkeypress="mascara(this,soLetras)" required="required" type="text" name="Cargo" placeholder="Cargo">
		</span>	
		<span>
			<input onkeypress="mascara(this,soLetras)" required="required" type="text" name="Empresa" placeholder="Empresa">
		</span>			
	<?php endif; ?>
	<span>
		<input required="required" type="email" name="Email" placeholder="E-mail *">
	</span>
	<span>
		<input type="text" name="Telefone" placeholder="Telefone" class="telefone">
	</span>
	<?php if($page == 'empresa') : ?>
		<span>
			<textarea onkeypress="mascara(this,soLetras)" required="required" type="text" name="Mensagem" placeholder="Mensagem"></textarea>
		</span>			
	<?php endif; ?>
	<span>
		<button class="btn btn-1">Enviar <?php echo (is_front_page() ? '→' : '') ?></button>
	</span>
</form>