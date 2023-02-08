<?php

function rectangle_load_template_part($template_name, $part_name=null, $args=null) {
	ob_start();
	get_template_part($template_name, $part_name, $args);
	$var = ob_get_contents();
	ob_end_clean();
	return $var;
}

function rectangle_wrap_embed_with_div($html, $url, $attr) {
	return '<div class="embed">' . $html . '</div>';
}

add_filter('embed_oembed_html', 'rectangle_wrap_embed_with_div', 10, 4);


function rectangle_pre_get_posts( $query) {
	if (!is_admin() && $query->is_main_query()) {
		$query->set('posts_per_page', -1);
	}
}
add_action( 'pre_get_posts', 'rectangle_pre_get_posts');

function rectangle_get_post_object_ids($posts) {
	$post_ids = [];
	if ($posts && is_array($posts) && count($posts) > 0) {
		foreach($posts as $post) {
			$post_ids[] = $post->ID;
		}
	}
	return $post_ids;
}

function rectangle_get_post_query($posts) {
	$post_ids = [];
	$post_types = [];
	if ($posts && is_array($posts) && count($posts) > 0) {
		foreach($posts as $post) {
			$post_ids[] = $post->ID;
			$post_types[] = $post->post_type;
		}
	}

	if (count($post_ids) > 0) {
		return new WP_Query([
			'post_type' => $post_types,
			'posts_per_page' => -1,
			'post__in' => $post_ids,
			'orderby' => 'post__in',
			'order' => 'ASC',
		]);
	}
	return false;
}

