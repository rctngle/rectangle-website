<?php

$home_header_left_page_names = ['studio', 'work'];
$home_header_right_page_names = ['clients', 'contact', 'follow'];

$home_header_left_pages = [];
foreach($home_header_left_page_names as $home_header_page_name) {
	$home_header_left_pages[] = get_page_by_path($home_header_page_name, OBJECT, 'page');
}
$home_header_right_pages = [];
foreach($home_header_right_page_names as $home_header_page_name) {
	$home_header_right_pages[] = get_page_by_path($home_header_page_name, OBJECT, 'page');
}

$home_header_left_page_query = rectangle_get_post_query($home_header_left_pages);
$home_header_right_page_query = rectangle_get_post_query($home_header_right_pages);




$home_footer_left_page_names = ['workshops'];
$home_footer_right_page_names = ['talks-lectures', 'teaching', 'interns'];

$home_footer_left_pages = [];
foreach($home_footer_left_page_names as $home_footer_page_name) {
	$home_footer_left_pages[] = get_page_by_path($home_footer_page_name, OBJECT, 'page');
}
$home_footer_right_pages = [];
foreach($home_footer_right_page_names as $home_footer_page_name) {
	$home_footer_right_pages[] = get_page_by_path($home_footer_page_name, OBJECT, 'page');
}

$home_footer_left_page_query = rectangle_get_post_query($home_footer_left_pages);
$home_footer_right_page_query = rectangle_get_post_query($home_footer_right_pages);




$projects = new WP_Query([
	'post_type' => 'post',
	'posts_per_page' => -1,
	'orderby' => 'menu_order',
	'order' => 'ASC',
]);

$left_project_ids = [];
$right_project_ids = [];
foreach($projects->posts as $pidx=>$project){
	if($pidx % 2 == 0){
		$left_project_ids[]=$project->ID;
	} else {
		$right_project_ids[]=$project->ID;
	}
}

$home_left_project_query = rectangle_get_post_query_by_ids($left_project_ids);
$home_right_project_query = rectangle_get_post_query_by_ids($right_project_ids);

?>
<?php get_header(); ?>



<main>
	<div class="about grid grid--columns-2">
		<?php if ($home_header_left_page_query->have_posts()): ?>
			<div class="column">
				<?php while($home_header_left_page_query->have_posts()): $home_header_left_page_query->the_post(); ?>
				
					<h4><?php the_title(); ?></h4>
					<div><?php the_content(); ?></div>

				<?php endwhile; ?>
			</div>
		<?php endif; ?>
		<?php if ($home_header_right_page_query->have_posts()): ?>
			
			<div class="column">
				
				<?php while($home_header_right_page_query->have_posts()): $home_header_right_page_query->the_post(); ?>
				
					<h4><?php the_title(); ?></h4>
					<div><?php the_content(); ?></div>

				<?php endwhile; ?>
			</div>

		<?php endif; ?>
	</div>
	
	<div class="projectscontainer">
		<div class="rectangle rectangle--main">
			<div class="rectangle__left">
				<div>R</div>
				<div>L</div>
				<div>G</div>
			</div>
			<div class="rectangle__center">
				<div>E</div>
				<div>E</div>
				<div>N</div>
			</div>
			<div class="rectangle__right">
				<div>C</div>
				<div>T</div>
				<div>A</div>
			</div>
		</div>
		<div class="projects grid grid--columns-2">
			<?php if ($home_left_project_query->have_posts()): ?>
				<div class="column">
					<?php while($home_left_project_query->have_posts()): $home_left_project_query->the_post(); ?>
					
						<?php get_template_part('templates/post/preview');?>

					<?php endwhile; ?>
				</div>
			<?php endif; ?>
			<?php if ($home_right_project_query->have_posts()): ?>
				<div class="column">
					<?php while($home_right_project_query->have_posts()): $home_right_project_query->the_post(); ?>
					
						<?php get_template_part('templates/post/preview');?>

					<?php endwhile; ?>
				</div>
			<?php endif; ?>
		</div>
	</div>

	<div class="endmatter">
		<div class="rectangle">
			<div class="rectangle__left">
				<div>R</div>
				<div>L</div>
				<div>G</div>
			</div>
			<div class="rectangle__center">
				<div>E</div>
				<div>E</div>
				<div>N</div>
			</div>
			<div class="rectangle__right">
				<div>C</div>
				<div>T</div>
				<div>A</div>
			</div>
		</div>
		<div class="about endmatter grid grid--columns-2">
			<?php if ($home_footer_left_page_query->have_posts()): ?>
				<div class="column">
					<?php while($home_footer_left_page_query->have_posts()): $home_footer_left_page_query->the_post(); ?>
						<div class="<?php echo $post->post_name;?>">
							<h4><?php the_title(); ?></h4>
							<div><?php the_content(); ?></div>
						</div>
					<?php endwhile; ?>
				</div>
			<?php endif; ?>
			<?php if ($home_footer_right_page_query->have_posts()): ?>
				<div class="column">
					<?php while($home_footer_right_page_query->have_posts()): $home_footer_right_page_query->the_post(); ?>
						<div class="<?php echo $post->post_name;?>">
							<h4><?php the_title(); ?></h4>
							<div><?php the_content(); ?></div>
						</div>
					<?php endwhile; ?>
				</div>
			<?php endif; ?>
		</div>
	</div>

</main>

<?php get_footer(); ?>
