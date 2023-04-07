<?php

$field = $args['field'];
$media = get_field($field);
?>

<?php if ($media && isset($media['media']) && is_array($media['media']) && count($media['media']) > 0): ?>
	<?php foreach ($media as $group): ?>
		<?php if($group and is_array($group) && count($group) > 0):?>
			<?php foreach($group as $entry): ?>
				<?php if ($entry['image']): ?>
					<div class="post__mediaitem">
						<?php get_template_part('templates/parts/image', null, ['id' => $entry['image']['ID'], 'size'=>'2048x2048']); ?>

					</div>
				<?php elseif($entry['file'] && $entry['file']['type'] == 'video'): ?> 
					<div class="post__mediaitem">
						<?php get_template_part('templates/parts/video', null, ['file' => $entry['file'], 'audio' => $entry['audio']]); ?>
					</div>
				<?php endif; ?>
			<?php endforeach; ?>
		<?php endif;?>
	<?php endforeach; ?>
<?php endif; ?>