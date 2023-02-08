<?php

$post_classes = get_post_class();

$post_classes[] = 'projectpreview';
if (($key = array_search('post', $post_classes)) !== false) {
	unset($post_classes[$key]);
}

?>

<article class="<?php echo implode(' ', $post_classes); ?>">
	<a href="<?php the_permalink(); ?>">
		<?php if (get_field('featured_video')): ?>
			<?php get_template_part('templates/parts/video', null, ['file' => get_field('featured_video')]); ?>
		<?php else: ?>
			<?php get_template_part('templates/parts/image', null, ['id' => get_post_thumbnail_id(), 'size'=>'1536x1536']); ?>
		<?php endif; ?>
	</a>
	<div class="projectpreview__title">
		<div><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></div>
		<div><?php the_field('excerpt'); ?></div>
	</div>
</article>


