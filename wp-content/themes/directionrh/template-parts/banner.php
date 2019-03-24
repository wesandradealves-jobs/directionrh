<section class="banner" style="background-image: url(<?php echo wp_get_attachment_url(get_post_thumbnail_id($post->ID), 'full'); ?>);">
	<div class="container">
		<h2><?php echo get_the_title(); ?></h2>
	</div>
</section>