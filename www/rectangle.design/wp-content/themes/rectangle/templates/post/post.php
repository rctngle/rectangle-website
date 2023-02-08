<?php

$post_classes = get_post_class();

$post_classes[] = 'layout-' . get_field('layout');

?>

<article class="<?php echo implode(' ', $post_classes); ?>">
	<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
	<?php if (get_field('date')): ?>
		<div><?php the_field('date'); ?></div>
	<?php endif; ?>
	<?php if (get_field('url')): ?>
		<div><a href="<?php the_field('url'); ?>" target="_blank"><?php echo parse_url(get_field('url'))['host']; ?></a></div>
	<?php endif; ?>
	
	<div><?php the_content(); ?></div>

	<?php get_template_part('templates/post/media', null, ['field' => 'media_left']); ?>
	<?php get_template_part('templates/post/media', null, ['field' => 'media_right']); ?>

</article>
<hr />

