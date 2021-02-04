<div class="horizontalBar horizontalBarType2">
	
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
		
		<div class="mainPageWrapper-part3__centerBotLine">
			<?php
					require locate_template('includes/dateAndViews.php');
				 ?>
			<div class="tags">
				<?php
					$cate = array_slice(get_the_terms(get_the_ID(), 'sections'), 0, 2);
					if($cate) {
						foreach ($cate as $cat) { ?>
							<a href="<?php echo get_category_link($cat -> term_id); ?>"><?php echo $cat -> name; ?></a>
						<?php	}
					}
				?>
			</div>
		</div>
	</div>
	
	<?php } ?>
	
</div>