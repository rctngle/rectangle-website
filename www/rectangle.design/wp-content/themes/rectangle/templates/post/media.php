<?php

$field = $args['field'];
$media = get_field($field);

?>

<?php if ($media && is_array($media) && count($media) > 0): ?>
	<?php foreach ($media as $group): ?>

		<?php foreach($group as $entry): ?>
			<?php if ($entry['image']): ?>
				<?php get_template_part('templates/parts/image', null, ['id' => $entry['image']['ID']]); ?>
			<?php elseif($entry['file'] && $entry['file']['type'] == 'video'): ?> 
				<?php get_template_part('templates/parts/video', null, ['file' => $entry['file'], 'audio' => $entry['audio']]); ?>
			<?php endif; ?>
		<?php endforeach; ?>
	<?php endforeach; ?>
<?php endif; ?>
