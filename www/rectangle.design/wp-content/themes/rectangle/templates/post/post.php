<?php

$post_classes = get_post_class();

$post_classes[] = 'post--layout-' . get_field('layout');

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
	<div class="post__about grid grid grid--columns-2">
		<div>
			<h2><?php the_title(); ?></h2>
			<?php if (get_field('date')): ?>
				<div><em><?php the_field('date'); ?></em></div>
			<?php endif; ?>
			<?php if (get_field('url')): ?>
				<div><a href="<?php the_field('url'); ?>" target="_blank"><?php echo parse_url(get_field('url'))['host']; ?></a></div>
			<?php endif; ?>
			<br/>
			<div>
				<?php the_content(); ?>
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
				tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
				quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
				consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
				cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
				proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>					
			</div>
		</div>
	</div>
	<div class="post__media grid">
		<div class="post__medialeft"><?php get_template_part('templates/post/media', null, ['field' => 'media_left']); ?></div>
		<div class="post__mediaright"><?php get_template_part('templates/post/media', null, ['field' => 'media_right']); ?></div>
	</div>

</article>
<hr />

