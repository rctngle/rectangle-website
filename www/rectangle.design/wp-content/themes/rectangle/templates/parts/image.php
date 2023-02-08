<?php 

$post_thumbnail_alt = get_post_meta($args['id'], '_wp_attachment_image_alt', true);   

$size = (isset($args['size'])) ? $args['size'] : 'large';

echo wp_get_attachment_image( $args['id'], $size, false, ['alt' => $post_thumbnail_alt] ); 

if(!is_home()){
	get_template_part('templates/parts/title-caption', null, ['id' => $args['id']]);	
}

?>

