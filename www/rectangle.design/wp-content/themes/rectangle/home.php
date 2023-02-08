<?php

$home_header_page_names = ['studio', 'work', 'clients', 'contact', 'follow'];
$home_header_pages = [];
foreach($home_header_page_names as $home_header_page_name) {
	$home_header_pages[] = get_page_by_path($home_header_page_name, OBJECT, 'page');
}
$home_header_page_query = rectangle_get_post_query($home_header_pages);

?>
<?php get_header(); ?>

<main>
	<?php if ($home_header_page_query->have_posts()): ?>
		<?php while($home_header_page_query->have_posts()): $home_header_page_query->the_post(); ?>
			<div>
				<h4><?php the_title(); ?></h4>
				<div><?php the_content(); ?></div>
			</div>
		<?php endwhile; ?>
	<?php endif; ?>

	<?php get_template_part('loop'); ?>
</main>

<?php get_footer(); ?>
