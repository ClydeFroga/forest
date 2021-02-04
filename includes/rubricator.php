<div class="rubricator">
	
	<?php
		$categories = get_categories( [
			'taxonomy'     => 'category',
			'exclude'      => '2058',
			'number'       => 0,
		] );
	?>
	
	<ul>
		
		<?php
		foreach( $categories as $category ) { ?>
		
		<li>
			<a href="<?php echo get_category_link($category -> term_id); ?>">
				<?php echo $category->name ?>
			</a>
		</li>
		
		<?php } ?>
		
	</ul>
	
	<?php	wp_reset_postdata(); ?>

	
</div>
