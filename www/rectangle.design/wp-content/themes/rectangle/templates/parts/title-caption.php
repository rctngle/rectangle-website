<?php
$attachment_title = get_the_title($args['id']);
$attachment_caption = wp_get_attachment_caption($args['id']);
?>

<div class="post__mediacaption">
	<div>
		<h5><?php echo $attachment_title; ?></h5>
		<div><?php echo $attachment_caption; ?></div>
	</div>
</div>