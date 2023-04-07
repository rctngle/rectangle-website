<?php

$post_classes = get_post_class();

$post_classes[] = 'post--layout-' . get_field('layout');


$projects_query = new WP_Query([
	'post_type' => 'post',
	'posts_per_page' => -1,
	'orderby' => 'menu_order',
	'order' => 'ASC',
]);

$prev_idx = 0;
$next_idx = 0;
foreach($projects_query->posts as $idx => $project) {
	if ($project->ID == get_the_ID()) {
		$prev_idx = $idx - 1;
		$next_idx = $idx + 1;
	}

	if ($prev_idx < 0) {
		$prev_idx = count($projects_query->posts) - 1;
	}

	if ($next_idx > count($projects_query->posts) - 1) {
		$next_idx = 0;
	}
}

$prev = $projects_query->posts[$prev_idx];
$next = $projects_query->posts[$next_idx];

?>

<article class="<?php echo implode(' ', $post_classes); ?>">
	<div class="rectangle">
		<div class="rectangle__left">
			<div><a href="<?php echo site_url();?>">R</a></div>
			<div><a href="<?php echo site_url();?>">L</a></div>
			<div><a href="<?php echo site_url();?>">G</a></div>
		</div>
		<div class="rectangle__center">
			<div><a href="<?php echo site_url();?>">E</a></div>
			<div><a href="<?php echo site_url();?>">E</a></div>
			<div><a href="<?php echo site_url();?>">N</a></div>
		</div>
		<div class="rectangle__right">
			<div><a href="<?php echo site_url();?>">C</a></div>
			<div><a href="<?php echo site_url();?>">T</a></div>
			<div><a href="<?php echo site_url();?>">A</a></div>
		</div>
	</div>
	<div class="post__about grid grid--columns-2">
		<div class="column">
			<div class="post__titlecontrols">
				<div class="post__title">
					<h2><?php the_title(); ?></h2>
					<?php if (get_field('date')): ?>
						<div><?php the_field('date'); ?></div>
					<?php endif; ?>
					<?php if (get_field('url')): ?>
						<div><a href="<?php the_field('url'); ?>" target="_blank"><?php echo parse_url(get_field('url'))['host']; ?></a></div>
					<?php endif; ?>
				</div>
				<div class="post__controls">
					<div class="desktop">
						<a href="<?php echo get_the_permalink($prev); ?>">&larr;</a>
						Project <?php echo get_post_field( 'menu_order', get_the_ID()); ?> / <?php echo wp_count_posts()->publish; ?>
						<a href="<?php echo get_the_permalink($next); ?>">&rarr;</a>
					</div>
					<a href="<?php echo get_the_permalink($next); ?>" class="mobile">next</a>
				</div>
			</div>

			

			<div class="post__content">
				<?php the_content(); ?>
			</div>
		</div>
		<div class="column">

		</div>
	</div>
	<div class="post__media">
		<div class="post__medialeft column"><?php get_template_part('templates/post/media', null, ['field' => 'media_left']); ?></div>
		<div class="post__mediaright column"><?php get_template_part('templates/post/media', null, ['field' => 'media_right']); ?></div>
	</div>
</article>

