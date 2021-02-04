<div class="horizontalBar horizontalBarType1">
  <?php while ( $query->have_posts() ) {
		$query->the_post();
    ?>
    
	<div>
		<a href="<?php the_permalink(); ?>">
			<div class="imgBlock horizontalBarFirst">
				<?php the_post_thumbnail('thumbnail'); ?>
			</div>
			<span>
        <?php the_title(); ?>
      </span>
		</a>
	</div>
  
  <?php } ?>
</div>
