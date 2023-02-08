<?php

$classes = get_body_class();

$titles = [];

if (is_singular()) {
	$titles[] = get_the_title();
} else {
	$queried_object = get_queried_object();
	if (isset($queried_object->label)) {
		$titles[] = $queried_object->label;
	} else if (isset($queried_object->name)) {
		$titles[] = $queried_object->name;
	}
}

$titles[] = get_bloginfo('name');

?>
<!DOCTYPE html>
<html lang="en-gb">
<head>

	<title><?php echo implode(' – ', $titles); ?></title>
	<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory');?>/build/styles/screen.css?t=<?php echo time(); ?>" />
	<script src="<?php bloginfo('template_directory');?>/build/scripts/scripts.js?t=<?php echo time(); ?>"></script>
	<meta charset="utf-8" />
	
	<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1">
	

	<link rel="apple-touch-icon" sizes="180x180" href="<?php bloginfo('template_directory');?>/apple-touch-icon.png">
	<link rel="icon" type="image/png" sizes="32x32" href="<?php bloginfo('template_directory');?>/favicon-32x32.png">
	<link rel="icon" type="image/png" sizes="16x16" href="<?php bloginfo('template_directory');?>/favicon-16x16.png">
	<link rel="manifest" href="<?php bloginfo('template_directory');?>/site.webmanifest">
	<link rel="mask-icon" href="<?php bloginfo('template_directory');?>/safari-pinned-tab.svg" color="#ff0046">
	<meta name="msapplication-TileColor" content="#2b5797">
	<meta name="theme-color" content="#ffffff">

	<?php wp_head(); ?>

	<meta name="twitter:site" content="@rctngle">

	<?php if (is_singular()): ?>		
		<meta name="twitter:description" content="<?php echo strip_tags(get_field('excerpt')); ?>">
		<meta name="twitter:title" content="<?php the_title() ?>">
		<meta property="og:description" content="<?php echo strip_tags(get_field('excerpt')); ?>" />
		<meta property="og:title" content="<?php the_title() ?>" />
		<meta name="twitter:card" content="summary_large_image">

		<?php if (has_post_thumbnail()): ?>			
			<?php $post_thumb = get_the_post_thumbnail_url(get_the_ID(), 'large');?>
			
			<meta name="twitter:image" content="<?php echo $post_thumb ?>" />
			<meta property="og:image" content="<?php echo $post_thumb ?>" />
		<?php else:?>
			<meta property="og:image" content="<?php bloginfo('template_directory');?>/social-card.jpg" />
			<meta name="twitter:image" content="<?php bloginfo('template_directory');?>/social-card.jpg" />
		<?php endif; ?>
	<?php endif; ?>

	<?php if(is_home()):?>
		<meta property="og:title" content="Rectangle" />
		<meta name="twitter:card" content="summary_large_image">
		<meta name="twitter:description" content="Rectangle">
		<meta property="og:description" content="Rectangle">
		<meta name="twitter:title" content="Rectangle">	
		<meta name="twitter:image" content="<?php bloginfo('template_directory');?>/social-card.jpg" />
		<meta property="og:image" content="<?php bloginfo('template_directory');?>/social-card.jpg" />
	<?php endif;?>

</head>

<body class="<?php echo implode(' ', $classes); ?>">
<div class="siteborder"></div>



