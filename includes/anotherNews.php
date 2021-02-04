<div class="anotherNews">
	<a href="<?php echo get_term_link($AnotherNewsId, $AnotherNewsCat) ?>" class="h2Title">
		<?php echo $title; ?>
	</a>
	
	<?php
		$dateAndViews = true;
			require locate_template('includes/horizontalBar.php');
		$dateAndViews = false;
	?>
	
</div>