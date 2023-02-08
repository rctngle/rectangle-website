<?php 
$pages = $wp_query->max_num_pages; 
?>

<?php if ( have_posts() ) : ?>
	<?php while ( have_posts() ) : the_post();  ?>
		<?php if (is_singular()): ?>
			<?php if (get_post_type() == 'page'): ?>
				<?php get_template_part('templates/pages/page', get_post_field( 'post_name', get_post() )); ?>
			<?php else: ?>
				<?php get_template_part('templates/' . get_post_type() . '/' . get_post_type()); ?>
			<?php endif; ?>
		<?php else: ?>
			<?php get_template_part('templates/' . get_post_type() . '/preview'); ?>
		<?php endif; ?>
	<?php endwhile; ?>
	
	<?php if ($wp_query->max_num_pages > 1): ?>
		<?php get_template_part('templates/nav/pagination'); ?>
	<?php endif; ?>
	
<?php else: ?>
	<p class="no-results">Sorry, no results match your filters</p>
<?php endif; ?>
	