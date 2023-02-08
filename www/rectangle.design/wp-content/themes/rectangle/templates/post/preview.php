<?php

$post_classes = get_post_class();
$post_classes[] = 'preview';

?>

<article class="<?php echo implode(' ', $post_classes); ?>">
	<a href="<?php the_permalink(); ?>">
		<?php if (get_field('featured_video')): ?>
			<?php get_template_part('templates/parts/video', null, ['file' => get_field('featured_video')]); ?>
		<?php else: ?>
			<?php get_template_part('templates/parts/image', null, ['id' => get_post_thumbnail_id()]); ?>
		<?php endif; ?>
	</a>
	<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
	<div><?php the_field('excerpt'); ?></div>
</article>
<hr />

