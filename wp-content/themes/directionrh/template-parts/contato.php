<?php if(get_theme_mod('telefone') || get_theme_mod('email')) : ?>
    <div class="contato">
        <?php if(did_action('get_footer')) : ?>
            <h2>Onde Estamos</h2>
            <h3><?php echo get_bloginfo( 'name', 'display'); ?></h3>
        <?php endif; ?>
        
        <?php if(get_theme_mod('telefone')) : ?>
        <p>
            <?php 
                $telefone = (stripos(get_theme_mod('telefone'), ',')) ? explode(',', get_theme_mod('telefone')) : get_theme_mod('telefone');
                if(is_array($telefone)){
                    print (did_action( 'get_footer' )) ? '<span><i><img src="'.get_template_directory_uri().'/assets/imgs/celular.png"></i>'.implode('</span><span><i><img src="'.get_template_directory_uri().'/assets/imgs/celular.png"></i>', $telefone).'</span>' : '<span>'.implode(' | ', $telefone).'</span>';
                } else {
                    print $telefone;
                }
            ?> 
            <?php if(!did_action('get_footer')) : ?>
                <i><img src="<?php echo get_template_directory_uri(); ?>/assets/imgs/phone.png" /></i>   
            <?php endif; ?>
        </p>
        <?php endif; ?>
        <?php if(get_theme_mod('telefone') && did_action('get_footer')) : ?>
        <p>
           <i><img src="<?php echo get_template_directory_uri(); ?>/assets/imgs/correio.png"></i>
           <?php echo '<a href="mailto:'.get_theme_mod('email').'" title="'.get_theme_mod('email').'">'.get_theme_mod('email').'</a>'; ?> 
        </p>
        <?php endif; ?>
    </div>
<?php endif; ?>