<?php get_header(); ?>
<main>
	<div class="container">
		<div class="archive__header"><h1><?php echo post_type_archive_title();?></h1></div>
		<div class="grid grid--columns-3 grid--gap-2">
			<?php get_template_part('loop'); ?>
			
		</div>
	</div>
</main>
<?php get_footer(); ?>