<?php

$file = $args['file'];
$classes = [];
if($args['audio']){
	$classes[]='audio';
}
?>

<video class="<?php echo implode(' ', $classes);?>" src="<?php echo $file['url']; ?>" autoplay muted loop playsinline></video>
<?php if($args['audio']):?>
<div class="post__mediacaption">
	<div>
		<a class="audiotoggle" href="">mute video</a>
	</div>
</div>
<?php endif;?>